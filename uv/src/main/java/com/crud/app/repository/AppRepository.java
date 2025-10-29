// é a camada de acesso aos dados 
// a única parte do código que fala diretamente com o db para a entidade User

package com.crud.app.repository;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;
import com.crud.app.model.User;

@Repository
public interface AppRepository extends CrudRepository<User, Integer> {
    // O CrudRepository é uma interface do JPA que dá, de graça,
    // toda a funcionalidade de um CRUD (Create, Read, Update, Delete) sem
    // precisar escrever uma única linha de SQL. Como n amar as frameworks?
}
