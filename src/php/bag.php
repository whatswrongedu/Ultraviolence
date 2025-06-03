<?php
class Carrinho {
    private $id;
    private $produto_id;
    private $nome;
    private $preco;
    private $quantidade;
    private $imagem;
    private $cliente_id;

    
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getProdutoId() {
        return $this->produto_id;
    }
    public function setProdutoId($produto_id) {
        $this->produto_id = $produto_id;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }
    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getImagem() {
        return $this->imagem;
    }
    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }


    public function getClienteId() { 
        return $this->cliente_id; 
    }
    public function setClienteId($cliente_id) {
        $this->cliente_id = $cliente_id; 
    }
}
?>
