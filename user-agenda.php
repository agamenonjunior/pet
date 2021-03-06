<?php
session_start();
require_once("conexao/conexao.php");
if(isset($_SESSION['email'])){
    $id    = $_SESSION['id'];
    $nome  = $_SESSION['nome'];
    $email = $_SESSION['email'];
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
    <link rel="stylesheet" href="css/style-user-agenda.css">
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
                        <li><a href="user-page.php">
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
                        <li><a href="09-user-agenda.html" class="active">
                                <img src="images/agenda.svg" alt="" width="21px">
                                <span class="menu-option">Agenda</span>
                            </a></li>
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

    <main>

        <section class="agenda">
            <h1><a href="#">Agenda</a></h1>
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
                    <a href="#">Não há agendamentos pendentes.</a>
                </div>
            </div>
            <div class="see-more">
                <a href="#">CONFIRA NOSSOS SERVIÇOS &rarr;</a>
            </div>
        </section>

        <section class="servicos-agendados">
            <h1><a href="#">Serviços agendados</a></h1>

            <div class="card seus-agendamentos">

                <div class="card compromisso">
                    <div class="pet-picture">
                        <img src="images/pet-picture1.png" alt="">
                    </div>
                    <div class="card-options">
                        <i class="ri-time-fill"></i>
                        <i class="ri-pencil-fill"></i>
                    </div>
                    <div class="text-compromisso">
                        <p><strong>Pet:</strong> Princesa</p>
                        <p><strong>Serviço:<br></strong> Acompanhamento veterinário</p>
                        <div>
                            <p><strong>Data:</strong> 15/09/2021</p>
                            <p id="comp-horario"><strong>Horário:</strong> 14:00</p>
                        </div>
                        <p><strong>Local:</strong> Clínica Pet Planet</p>
                    </div>
                </div>

                <div class="card compromisso">
                    <div class="pet-picture">
                        <img src="images/pet-picture2.png" alt="">
                    </div>
                    <div class="card-options">
                        <i class="ri-time-fill"></i>
                        <i class="ri-pencil-fill"></i>
                    </div>
                    <div class="text-compromisso">
                        <p><strong>Pet:</strong> Pulga</p>
                        <p><strong>Serviço:<br></strong> Banho completo</p>
                        <div>
                            <p><strong>Data:</strong> 24/09/2021</p>
                            <p id="comp-horario"><strong>Horário:</strong> 09:00</p>
                        </div>
                        <p><strong>Local:</strong> Clínica Pet Planet</p>
                    </div>
                </div>

                <div class="card compromisso passado">
                    <div class="pet-picture">
                        <img src="images/pet-picture3.png" alt="">
                    </div>
                    <div class="card-options">
                        <i class="ri-time-fill"></i>
                        <i class="ri-pencil-fill"></i>
                    </div>
                    <div class="text-compromisso">
                        <p><strong>Pet:</strong> Zorro</p>
                        <p><strong>Serviço:<br></strong> Adestramento especializado</p>
                        <div>
                            <p><strong>Data:</strong> 07/09/2021</p>
                            <p id="comp-horario"><strong>Horário:</strong> 16:00</p>
                        </div>
                        <p><strong>Local:</strong> Clínica Pet Planet</p>
                    </div>
                </div>

                <div class="card compromisso invisible">
                    <div class="pet-picture">
                        <img src="images/pet-picture3.png" alt="">
                    </div>
                    <div class="card-options">
                        <i class="ri-time-fill"></i>
                        <i class="ri-pencil-fill"></i>
                    </div>
                    <div class="text-compromisso">
                        <p><strong>Pet:</strong> Zorro</p>
                        <p><strong>Serviço:<br></strong> Adestramento especializado</p>
                        <div>
                            <p><strong>Data:</strong> 30/09/2021</p>
                            <p id="comp-horario"><strong>Horário:</strong> 16:00</p>
                        </div>
                        <p><strong>Local:</strong> Clínica Pet Planet</p>
                    </div>
                </div>
                
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
