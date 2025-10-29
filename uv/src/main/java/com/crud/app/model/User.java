// Essa classe é a representação da tabela User no db. É o "molde" para os dados

package com.crud.app.model;

import java.io.Serializable;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;

@Entity
// O @entity está dizendo pro spring q essa classe é uma entidade do db q deve ser mapeada lá
// E, por isso, o JPA cria uma tabela no db automaticamente
public class User implements Serializable {
    // esse implements Serializable diz q essa classe pode ser "serializada"(convertida em bytes),
    // o JPA usa isso pra tranferência de dados e gerenciamento de cache
    private static final long serialVersionUID = 1L;
    // isso é padrão pra qualquer classe que tenha o implements Serializable, serve pra controlar a versão da classe
    @Id
    // marca o atributo logo abaixo(o idUser)como chave primária
    @GeneratedValue(strategy = GenerationType.AUTO)
    // Diz pro JPA como o id deve ser gerado. Basicamente é a mesma coisa que o AUTO_INCREMENT
    private int idUser;
    private String nome;
    private String cpf;
    private String email;
    private String senha;


    public User() {
    }
    // É o construtor. É importante saber que o JPA/Hibernate exige que tenha um construtor público e vazio
    // pra ele criar instâncias da classe quando buscar dados no db


    public int getIdUser() {
        return this.idUser;
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;
    }

    public String getNome() {
        return this.nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getCpf() {
        return this.cpf;
    }

    public void setCpf(String cpf) {
        this.cpf = cpf;
    }

    public String getEmail() {
        return this.email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

        public String getSenha() {
        return this.senha;
    }

    public void setSenha(String senha) {
        this.senha = senha;
    }
    // Getters and Setters. Necessários pra ler e definir atributos private e bla bla bla
}