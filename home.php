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
    <title>Ultraviolence</title>
    <link rel="stylesheet" href="src/css/home/ho-main.css">
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
            <a href="index.html" class="btn-header">Voltar ao início</a>
        </div>
    </header>

    <main>
        <div class="scroll-horizontal">
            <div class="img-wrapper slower">
                <a href="#" target="_blank">
                    <img src="https://m.media-amazon.com/images/I/71v9YKQxm2L.jpg" alt="Born to Die Album">
                </a>
            </div>
            <div class="img-wrapper faster">
                <a href="#" target="_blank">
                    <img src="https://monkeybuzz.com.br/wp-content/uploads/2012/11/lana-del-rey-paradise.jpg"
                        alt="Paradise Album">
                </a>
            </div>
            <div class="img-wrapper slower slower vertical">
                <a href="#" target="_blank">
                    <img src="https://monkeybuzz.com.br/wp-content/uploads/2014/06/7244134666.png"
                        alt="Ultraviolence Album">
                </a>
            </div>
            <div class="img-wrapper slower slower-down">
                <a href="#" target="_blank">
                    <img src="https://m.media-amazon.com/images/I/71ZvezJ2OoL._UF1000,1000_QL80_.jpg"
                        alt="Honeymoon Album">
                </a>
            </div>
            <div class="img-wrapper">
                <a href="#" target="_blank">
                    <img src="https://monkeybuzz.com.br/wp-content/uploads/2017/07/f991b1a6b8809ed3cbea444e3e6f49a31000x1000x1-597a6c0c29702.jpg"
                        alt="Lust for Life Album">
                </a>
            </div>
            <div class="img-wrapper slower">
                <a href="nfr.php">
                    <img src="https://m.media-amazon.com/images/I/91XkHPMMSnL.jpg" alt="Norman F***ing Rockwell! Album">
                </a>
            </div>
            <div class="img-wrapper faster1">
                <a href="#" target="_blank">
                    <img src="https://media.pitchfork.com/photos/5ffde6ad50609aa314ba30ec/master/pass/Lana-Del-Rey-Chemtrails-Over-the-Country-Club.jpg"
                        alt="Chemtrails Over the Country Club Album">
                </a>
            </div>
            <div class="img-wrapper slower slower2">
                <a href="#" target="_blank">
                    <img src="https://musicainstantanea.com.br/wp-content/uploads/2021/11/Lana-Del-Rey-Blue-Banisters.jpg"
                        alt="Blue Banisters Album">
                </a>
            </div>
            <div class="img-wrapper slower last">
                <a href="#" target="_blank">
                    <img src="https://musicainstantanea.com.br/wp-content/uploads/2022/12/Lana-Del-Rey-Did-You-Know-That-Theres-A-Tunnel-Under-Ocean-Blvd-700x700.jpeg"
                        alt="Did You Know That There's A Tunnel Under Ocean Blvd Album">
                </a>
            </div>
        </div>
    </main>

    <footer>


    </footer>

</body>

</html>