// é uma classe de configuração manual do db

package com.crud.app;

import javax.sql.DataSource;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.jdbc.datasource.DriverManagerDataSource;
import org.springframework.orm.jpa.JpaVendorAdapter;
import org.springframework.orm.jpa.vendor.Database;
import org.springframework.orm.jpa.vendor.HibernateJpaVendorAdapter;

@Configuration 
// Esse @config está marcando pro spring q essa classe é uma fonte de configurações 
public class DataConfig {
    @Bean
    // O @bean diz pro spring executar esse método e pegar o objeto q ele retorna
    public DataSource dataSource() { 
        // Esse método diz pro Spring "onde" o db está e "como" se conectar a ele :P
        DriverManagerDataSource dataSource = new DriverManagerDataSource();
        dataSource.setDriverClassName("com.mysql.cj.jdbc.Driver");
        dataSource.setUrl("jdbc:mysql://localhost:3306/ultraviolence");
        dataSource.setUsername("root");
        dataSource.setPassword("");
        return dataSource;
    }

    @Bean
    public JpaVendorAdapter jpaVendorAdapter() {
        // Esse método diz ao JPA como ele deve se comportar ao falar com o db
        HibernateJpaVendorAdapter adapter = new HibernateJpaVendorAdapter();
        adapter.setDatabase(Database.MYSQL);
        adapter.setShowSql(true);
        adapter.setGenerateDdl(true);
        adapter.setDatabasePlatform("org.hibernate.dialect.MySQLDialect");
        adapter.setPrepareConnection(true);

        return adapter;
    }
}