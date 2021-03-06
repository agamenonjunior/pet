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
    <link rel="stylesheet" href="css/style-user-servicos.css">
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
                        <li><a href="user-servicos.php" class="active">
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

    <main>

        <section class="servicos-disponiveis">
            <h1><a href="#">Agende já os seus serviços!</a></h1>
            <div class="card-carousel">
                <div class="carousel__actions">
                    <button data-js="carousel__button--prev" aria-label="Slide anterior">
                        <i class="ri-arrow-left-s-line"></i>
                    </button>
                </div>
              <div class="carousel">
                    <div data-js="carousel__item" class="carousel__item carousel__item--visible">
                    <img src="images/pet-appointment.png" />
                    </div>
                    <div data-js="carousel__item" class="carousel__item">
                        <img src="images/pet-bath.png" />
                    </div>
                    <div data-js="carousel__item" class="carousel__item">
                    <img src="images/pet-care.png" />
                    </div>
            
                    <div data-js="carousel__item" class="carousel__item">
                    <img src="images/pet-trainer.png" />
                    </div>
                    <div data-js="carousel__item" class="carousel__item">
                        <img src="images/pet-transporter.png" />
                    </div>
                    <div data-js="carousel__item" class="carousel__item">
                        <img src="images/pet-walker.png" />
                    </div>
                    <h1>Acompanhamento veterinário</h1>
                    <div class="servico-descricao">
                    </div>
              </div>
              <div class="carousel__actions">
                <button data-js="carousel__button--next" aria-label="Próximo slide">
                    <i class="ri-arrow-right-s-line"></i>
                </button>
              </div>
            
            </div>
            
            <div class="descricao-servico">
                <p>Os melhores profissionais do mercado estão prontos para ajudar você a dar um upgrade na qualidade de vida do seu pet!</p>
            </div>
        </section>
        
        <section class="agendar-servico">
            <form action="" method="POST">
                <label for="pet-name"><i class="ri-bear-smile-line"></i> 
                    Nome do seu pet:</label>
                <input type="text" name="pet-name" value="<?php echo $nome_bichinho; ?>" id="pet-name" placeholder="Digite o nome do seu bichinho" required>

                <label for="servico"><i class="ri-stethoscope-line"></i> 
                    Serviço:</label>
                <select name="servico" id="servico">
                    <option value="">Acompanhamento veterinário</option>
                    <option value="">Banho completo</option>
                    <option value="">Tosa e corte de unhas</option>
                    <option value="">Adestramento especializado</option>
                    <option value="">Transporte de pets</option>
                    <option value="">Passeador de cães</option>
                </select>

                <div class="data-hora">
        
                    <label for="data">Data:</label> 
                    <input type="date" name="data" id="data" required>
                
                    <label for="horario">Horário:</label>
                    <input type="time" name="horario" id="horario" required>

                </div>

                </div>
                
                <label for="more-infos"><i class="ri-chat-new-line"></i> 
                    Comentário:</label>
                <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Alguma informação adicional?"></textarea>

                <button type="submit" value="Submit"><i class="ri-calendar-check-fill ri-lg sty"></i> 
                    Agendar</button>
            </form>
        </section>

    </main>

    <footer>
        © Copyright 2021. Todos os direitos reservados.
    </footer>

    <script src="js/menu-lateral.js"></script>
    <script src="js/carousel.js"></script>
</body>

</html>
