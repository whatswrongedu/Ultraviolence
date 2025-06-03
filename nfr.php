<?php
require 'src/php/connection.php';
session_start();
if (!isset($_SESSION['usuario_id'])) {
    echo "Sessão não iniciada.";
    exit;
} else {
    echo "Sessão ativa para o usuário: " . $_SESSION['usuario_email'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Norman F***ing Rockwell</title>

    <link rel="stylesheet" href="src/css/testNFR/testNFR.css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" />
    
</head>
<body>
    <header>
        <img src="src/assets/images/uv.jpg" alt="Logo do album Ultraviolence">
        <div class="header-link">
            <nav class="header-navigation">
                <div class="header-search">
                    <img src="src/assets/icons/search.png" alt="icon de busca">
                    <input id="search-input" type="text" placeholder="O que você procura?" />
                </div>
            </nav>
            <a href="https://www.instagram.com/whatswrongedu/" target="_blank"><i
                    class="icon ion-logo-instagram"></i></a>
            <a href="https://github.com/whatswrongedu" target="_blank"><i class="icon ion-logo-github"></i></a>
            <a href="testHome.html" class="btn-header">Voltar</a>
        </div>
    </header>
    <main>
        <div class="wallpaper">
            <div class="background">
                <img src="src/assets/images/nfr.webp" alt="">
                <div class="overlay"></div>
                <h1>Norman F***king Rockwell</h1>
            </div>
        </div>
         <div class="line">

         </div>




        </div>
    </main>
    <footer>

    </footer>
</body>

</html>