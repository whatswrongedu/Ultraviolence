// basicamente é o controlador de tráfego do projeto

package com.crud.app.controller;

import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.validation.BindingResult;
import org.springframework.validation.annotation.Validated;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

import com.crud.app.model.User;
import com.crud.app.repository.AppRepository;

@Controller
// @controller diz pro spring que essa classe é um controlador web, ou seja,
// faz o ele ir atrás dos @GetMapping, @PostMapping, @RequestMapping, etc
public class CrudController {
    @Autowired
    // 
    private AppRepository csr;//(csr = Customer Service Repository)

    @RequestMapping("/")
    // @RequestMapping mapeia os pedidos para o contexto raiz, tipo o "//localhost:8080/"
    public String index() {
        return "index";
        // retorna a string index. O ViewResolver do Spring, como o Thymeleaf,
        // vai procurar um template com o nome "index.html" para renderizar
    }

    @GetMapping("/register")
    // esse @GetMapping é um atalho para @RequestMapping(method = RequestMethod.GET), ou seja,
    // ele mapeia pedidos HTTP GET para o, nesse caso, /register
    public String register() {
        return "register";
    }

    @GetMapping("/login")
    public String login() {
        return "login";
    }

    @GetMapping("/store")
    public String store() {
        return "store";
    }

    @GetMapping("/nfr")
    public String nfr() {
        return "nfr";
    }


    @PostMapping("/register")
    // mesma coisa que o @GetMapping só que agora é o método POST
    public String register(User usuario) {
        // os parâmetros do pedido (do formulário) são mapeados pros campos do objeto User
        csr.save(usuario);
        // esse save vai fzr um INSERT SQL
        return "redirect:/login";
        // assim que o usuário criar o cadastro, ele vai ser redirecionado direto pra fzr o login,
        // seguindo o padrão Post/Redirect/Get (PRG)
    }

    @GetMapping("/readUser")
    public ModelAndView readUser() {
        // essa classe ModelAndView é nativa do spring, serve pra mostrar os dados que vc quer ver e
        // qual template(html)vai ser usado pra renderizar esses dados
        ModelAndView mv = new ModelAndView("readUser");

        Iterable<User> usuarios = csr.findAll();
        // Utiliza o repositório (csr) para buscar todos os registos da entidade User
        // resumindo tudo, ele executa um SELECT * FROM user
        // ps: boa prática: nomear a lista no plural
        mv.addObject("usuarios", usuarios);
        // adiciona a lista de utilizadores ao model com o nome "usuarios", que vai ser usado
        // pelo thymeleaf no template lá (${usuarios})
        return mv;
        // e aqui é o View la do ModelAndView
    }

    @GetMapping("/updateUser/{idUser}")
    // {idUser} é um placeholder para uma variável
    public ModelAndView updateUserGet(@PathVariable("idUser") int idUser) {
        // @PathVariable extrai o valor do {idUser} da URI(Uniform Resource Identifier)
        // e atribui no parâmetro idUser
        Optional<User> usuarioOpt = csr.findById(idUser);
        // Busca o utilizador por ID

        if (usuarioOpt.isEmpty()) {
            // e se o utilizador não existir, redireciona para a lista principal
            return new ModelAndView("redirect:/readUser");
        }

        ModelAndView mvu = new ModelAndView("updateUser");
        // se achar o utilizador, prepara a view updateUser
        mvu.addObject("usuario", usuarioOpt.get());
        return mvu;
        // adiciona o objeto User(que foi pego no Optional)no model com nome "usuario"
        // é usado para pré-preencher os campos do formulário de edição :P
    }

    @PostMapping("/updateUser/{idUser}")
    // agr é o POST
    public String updateUserPost(@Validated User usuario, BindingResult result, RedirectAttributes attributes) {
        // O JPA entende que se o usuario já tem um ID,
        // ent ele vai atualizar(UPDATE) em vez de criar(INSERT)
        csr.save(usuario);
        // se o objeto tem um ID que já existe, ele vai fzr um UPDATE SQL
        return "redirect:/readUser";
        // vai redirecionar pra readUser, padrão PRG
    }

    @GetMapping("/deleteUser/{idUser}")
    // ps: em APIs REST, isto seria um @DeleteMapping, mas para
    // formulários/links HTML simples, pode ser o GET msm (cof cof gambiarra)
    public String deleteUser(@PathVariable("idUser") int idUser) {

        Optional<User> usuarioOpt = csr.findById(idUser);
        // verifica se o usuario existe antes de apagar

        if (usuarioOpt.isPresent()) {
            csr.deleteById(idUser);
            // Se o usuario existe, vai mandar a exclusão pelo repositório
            // ele vai fzr um DELETE FROM user WHERE id = ?
        }
        return "redirect:/readUser";
        // padrão PGR
    }
}