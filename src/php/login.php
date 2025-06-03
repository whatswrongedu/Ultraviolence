<?php
require 'connection.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Pegando as infos la no db
    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = :email LIMIT 1");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_email'] = $usuario['email'];
        header("Location: ../../home.php");
        exit;
    } else {
        echo "<script>alert('Email ou senha inválidos'); window.location.href='login.html';</script>";
    }
}
?>