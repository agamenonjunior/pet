<?php
session_start();
require_once("conexao/conexao.php");
if(isset($_SESSION['email'])){
    $id    = $_SESSION['id'];
    $nome  = $_SESSION['nome'];
    $email = base64_decode($_SESSION['email']);
    $nome_bichinho = $_SESSION['nome_bichinho'];
}else{
header("Location: login.php");
}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style-user-pages.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Pet Planet | Bem-vindo</title>
</head>

<body>

    <header>
        <div class="container">
            <div class="logo">
                <a href="user-page.php">
                    <img class="imagelogo" src="images/pet-planet.png" alt="Logo">
                </a>
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#" class="active">
                                <img src="images/sugestoes.svg" alt="" width="24px">
                                <span class="menu-option">Sugestões</span>
                            </a></li>
                        <li><a href="10-user-produtos.html">
                                <img src="images/carrinho.svg" alt="" width="25px">
                                <span class="menu-option">Produtos</span>
                            </a></li>
                        <li><a href="user-servicos.php">
                                <img src="images/servicos.svg" alt="" width="28px">
                                <span class="menu-option">Serviços</span>
                            </a></li>
                        <li><a href="09-user-agenda.html">
                                <img src="images/agenda.svg" alt="" width="21px">
                                <span class="menu-option">Agenda</span>
                            </a></li> olá, <?php echo $nome; ?>
                    </ul>
                </nav>
            </div>

            <div class="search">
                <input type="search" name="buscar" id="buscar">
                <img src="images/lupa.svg" alt="lupa" width="20px">

                <div class="user-pic">
                    <img src="images/user-pic.png" alt="">
                    <div class="notification-dot"></div>
                    <i class="ri-arrow-down-s-fill ri-xl"></i>
                </div>


            </div>
        </div>
    </header>

    <div class="lateral-menu">
        <ul>
            <li><a href="#" class="active">
                    <i class="ri-emotion-laugh-line"></i>
                    <span class="menu-option">Meus dados</span>
                </a></li>
            <li><a href="#">
                    <i class="ri-bear-smile-line"></i>
                    <span class="menu-option">Meus pets</span>
                </a></li>
            <li><a href="#">
                    <i class="ri-dossier-line"></i>
                    <span class="menu-option">Consultas</span>
                </a></li>
            <li><a href="#">
                    <i class="ri-microscope-line"></i>
                    <span class="menu-option">Exames</span>
                </a></li>
            <li><a href="#">
                    <i class="ri-capsule-line"></i>
                    <span class="menu-option">Medicamentos</span>
                </a></li>
            <li><a href="#">
                    <i class="ri-message-2-line"></i>
                    <span class="menu-option">Chat rápido</span>
                </a></li>
            <li><a href="#">
                    <i class="ri-settings-3-fill"></i>
                    <span class="menu-option">Configurações</span>
                </a></li>
            <li><a href="#">
                    <i class="ri-lock-2-fill"></i>
                    <span class="menu-option">Privacidade</span>
                </a></li>
            <li><a href="#">
                    <i class="ri-share-box-fill"></i>
                    <span class="menu-option">Compartilhar</span>
                </a></li>
            <li><a href="#">
                    <i class="ri-star-line"></i>
                    <span class="menu-option">Avalie-nos</span>
                </a></li>
            <li><a href="logout.php" style="color: #c90000">
                    <i class="ri-logout-box-r-line"></i>
                    <span class="menu-option">Sair</span>
                </a></li>
        </ul>
    </div>

    <section id="banner">

        <div class="banner-text">
            <h1>Cuidar do seu bichinho nunca foi tão fácil! &#x1F929</h1>
            <h2>Complete já o seu cadastro e tenha acesso a todos os nossos serviços exclusivos!</h2>
            <a href="#" class="upgrade-button"><i class="bx bxs-upvote"></i> Fazer upgrade</a>
        </div>

    </section>

    <main>

        <section class="artigos">

            <h1><a href="#">Artigos</a></h1>

            <div class="card big-card">
                <div class="card-header">
                    <div class="author-pic" style="cursor: pointer;">
                        <img src="images/card-author.png" alt="">
                    </div>
                    <a href="#">
                        <div class="title">
                            <h1>Vacinas obrigatórias</h1>
                            <h2>Cuide do seu melhor amigo</h2>
                        </div>
                    </a>
                    <i class="ri-share-fill"></i>
                </div>
                <a href="#" class="card-picture">
                    <img src="images/card-gato.png" alt="">
                </a>
                <div class="card-resume">
                    <p>As vacinas consideradas mais importantes e obrigatórias são a antirrábica e a polivalente.</p>
                </div>
                <div class="card-buttons">
                    <a href="#">SAIBA MAIS</a>
                    <a href="#">LER DEPOIS</a>
                </div>
            </div>

            <div class="card small-card-1">
                <a href="#" class="card-picture">
                    <img src="images/card-cockatiel.png" alt="">
                </a>
                <a href="#" class="title">
                    <h1>Penas brilhosas</h1>
                    <h2>As melhores dicas para as suas aves terem penas mais saudáveis!</h2>
                </a>
            </div>

            <div class="see-more">
                <a href="#">VEJA MAIS +</a>
            </div>

        </section>

        <section class="produtos">

            <h1><a href="#">Produtos</a></h1>

            <div class="card small-card-2">

                <div class="conteudo">
                    <div class="text">
                        <h3>EM ALTA <i class="ri-fire-fill ri-lg"></i></h3>
                        <h1>Óculos para gatos</h1>
                        <h2>Deixe seu felino muito mais descolado nas fotos!</h2>
                    </div>
                    <div class="card-picture">
                        <img src="images/card-glasses.png" alt="">
                    </div>
                </div>

                <div class="card-buttons">
                    <a href="#">VER ITEM</a>
                    <a href="#"><i class="ri-shopping-cart-2-line ri-lg"></i></a>
                    <a href="#"><i class="ri-heart-line ri-lg"></i></a>
                </div>

            </div>

            <div class="card small-card-2">

                <div class="conteudo">
                    <div class="text">
                        <h3>COM DESCONTO <i class="ri-price-tag-3-line ri-lg"></i></h3>
                        <h1>Roupa de batata-frita</h1>
                        <h2>Linda roupinha com estampa de batata-frita.</h2>
                    </div>
                    <div class="card-picture">
                        <img src="images/card-fries.png" alt="">
                    </div>
                </div>

                <div class="card-buttons">
                    <a href="#">VER ITEM</a>
                    <a href="#"><i class="ri-shopping-cart-2-line ri-lg"></i></a>
                    <a href="#"><i class="ri-heart-line ri-lg"></i></a>
                </div>

            </div>

            <div class="card small-card-2">

                <div class="conteudo">
                    <div class="text">
                        <h3>PARA VOCÊ <i class="ri-user-star-line ri-lg"></i></h3>
                        <h1>Aquário premium</h1>
                        <h2>Seus peixes vão adorar esse aquário luxuoso!</h2>
                    </div>
                    <div class="card-picture">
                        <img src="images/card-fish.png" alt="">
                    </div>
                </div>

                <div class="card-buttons">
                    <a href="#">VER ITEM</a>
                    <a href="#"><i class="ri-shopping-cart-2-line ri-lg"></i></a>
                    <a href="#"><i class="ri-heart-line ri-lg"></i></a>
                </div>

            </div>

            <div class="see-more">
                <a href="#">VEJA MAIS +</a>
            </div>

        </section>

        <section class="agenda">
            <h1><a href="09-user-agenda.html">Agenda</a></h1>
            <div class="card calendar-container">
                <div class="calendar">
                    <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date">
                            <h1></h1>
                        </div>
                        <i class="fas fa-angle-right next"></i>
                    </div>
                    <p id="today-desc"></p>
                    <div class="weekdays">
                        <div>Dom</div>
                        <div>Seg</div>
                        <div>Ter</div>
                        <div>Qua</div>
                        <div>Qui</div>
                        <div>Sex</div>
                        <div>Sáb</div>
                    </div>
                    <div class="days"></div>
                </div>
                <div class="agendamentos">
                    <i class="ri-calendar-event-line"></i>
                    <a href="09-user-agenda.html">Não há agendamentos pendentes.</a>
                </div>
            </div>
            <div class="see-more">
                <a href="08-user-servicos.html">CONFIRA NOSSOS SERVIÇOS &rarr;</a>
            </div>
        </section>

    </main>

    <footer>
        © Copyright 2021. Todos os direitos reservados.
    </footer>

    <script src="js/calendar.js"></script>
    <script src="js/menu-lateral.js"></script>

</body>

</html>