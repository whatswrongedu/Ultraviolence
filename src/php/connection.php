<?php
$host = 'localhost';
$db = 'ultraviolence';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
} catch (PDOException $e) {
    echo "Erro na conexão com o banco: " . $e->getMessage();
}
?>