<?php
 require_once("conexao/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-forms.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Pet Planet | Cadastre-se</title>

    <script src="js/menu-mobile.js" type="text/javascript"></script>

</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.html"><img class="imagelogo" src="images/pet-planet.png" alt="Logo"></a>
            </div>

            <div class="menu">
                <div class="menuMobile">
                    <div class="mm-line"></div>
                    <div class="mm-line"></div>
                    <div class="mm-line"></div>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Início</a></li>
                        <li><a href="02-quem-somos.html">Quem somos</a></li>
                        <li><a href="03-nossos-servicos.html">Nossos serviços</a></li>
                        <li><a href="04-fale-conosco.html">Fale conosco</a></li>
                    </ul>
                </nav>
            </div>

            <div class="buttons">
                <a href="05-login.html" class="secundary-button">Login</a>
                <a href="06-cadastro.html" class="primary-button">Registre-se</a>
            </div>

        </div>
        
    </header>
    
    <main>
        <h1>Seja bem-vindo(a) à Pet Planet!</h1>

        <div class="pic-user">
            <img src="images/cat-sigin.jpg" alt="">
        </div>

        <?php

            if(isset($_POST["btnCadUsuario"])){
                $nome =  addslashes($_POST["nome"]);
                $nome_bichinho =  addslashes($_POST["nome_bichinho"]);
                $email =  base64_encode(addslashes($_POST["email"]));
                $senha =  md5(addslashes($_POST["senha"]));
                if(!empty($nome)&&!empty($nome_bichinho) && !empty($email) && !empty($senha)   ){
                    //campos preenchidos

                    //executar query
                    $sql  = "INSERT INTO usuarios (nome, nome_bichinho, email,senha)VALUES('$nome','$nome_bichinho','$email','$senha')";
                    if(mysqli_query($conn, $sql)){
                        echo '<b>'."Cadastro efetuado com sucesso ! ".'</b>';
                    } else{
                        echo "ERROR: Cadastro não funcionou corretamente! $sql. " . mysqli_error($conn);
                    }
                }
                
            }

        ?>

        <form autocomplete="off" action="" method="POST">
            <h2>Cadastre-se facilmente</h2>
           
            <div class="input-wrp">
                <input type="text" name="nome" id="name" class="wrp-campo" required>
                <span class="floating-label"> Seu nome completo</span>
                <img src="images/user-3-line.svg" alt="">
            </div>

            <div class="input-wrp">
                <input type="text" name="nome_bichinho" id="pet-name" class="wrp-campo" required>
                <span class="floating-label"> Nome de um bichinho seu</span>
                <img src="images/mickey-line.svg" alt="">
            </div>

            <div class="input-wrp">
                <input type="text" name="email" id="email-address" class="wrp-campo" required>
                <span class="floating-label"> Endereço de e-mail</span>
                <img src="images/mail-line.svg" alt="">
            </div>

            <div class="input-wrp">
                <input type="password" name="senha" id="password" class="wrp-campo" required>
                <span class="floating-label"> Senha</span>
                <img src="images/lock-unlock-line.svg" alt=""> 
            </div>

            <div class="input-wrp">
                <input type="password" name="confirmar_senha" id="confirm-password" class="wrp-campo" required>
                <span class="floating-label"> Confirme sua senha</span>
                <img src="images/lock-password-line.svg" alt=""> 
            </div>

            <div class="block-terms">
                <div class="i-agree">
                    <input type="checkbox" name="agree" id="agree" checked>
                    <span class="checkmark">Eu li e concordo com os</span>
                </div>
                <a href="#" class="terms-of-use">termos e condições de uso</a>
            </div>
            <div class="block-terms">
                <div class="i-agree">
                    <input type="checkbox" name="i-want" id="i-want" checked>
                    <span class="checkmark">Quero receber novidades via e-mail</span>
                </div>
            </div>
            
            <button type="submit" name="btnCadUsuario" value="Cadastrar" class="primary-button" id="lets-go">Vamos lá!</button>

            <div class="block-pass bottom">Já possui uma conta?<a href="login.php" class="pass-recover">Fazer login</a></div>
            
        </form>
    </main>

    <footer>
        © Copyright 2021. Todos os direitos reservados.
    </footer>

</body>
</html>