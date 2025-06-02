<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $pdo->beginTransaction();

        $nome = $_POST["nome"];
        $pais = $_POST["pais"];
        $email = $_POST["email"];
        $data_nascimento = $_POST["data_nascimento"];

        // Criar o hash da senha
        $senha_hash = password_hash($senha_original, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO usuario (nome, pais, email, data_nascimento, senha)VALUES(:nome, :pais, :email, :data_nascimento, :senha)");

        $stmt->execute([
            ':nome' => $nome,
            ':pais' => $pais,
            ':email' => $email,
            ':data_nascimento' => $data_nascimento,
            ':senha' => $senha_hash
        ]);

        $pdo->commit();

    } catch (PDOException $e) {
        echo "Cadastro não concluído" .
            $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultraviolence</title>
    <link rel="stylesheet" href="../css/register/re-main.css">
</head>

<body>
    <main>
        <h2 class="cadConcluido">Cadastro feito com sucesso!</h2>

            <img src="https://66.media.tumblr.com/fd2819673aa6e9a28f5baf559d6f5b26/tumblr_pd83f69WdI1wk694yo2_r3_540.gif"
            alt="Lana smoking"/>

        <div class="btn-header">
            <a href="login.html" class="loginLink">Faça seu login</a>
        </div>
    </main>
</body>
</html>