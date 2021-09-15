<?php
session_start();
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
    <title>Pet Planet | Login</title>

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
                <a href="login.php" class="secundary-button">Login</a>
                <a href="cadastrar.php" class="primary-button">Registre-se</a>
            </div>

        </div>
       
    </header>
    
    <main>
        <h1>Olá, é um prazer revê-lo!</h1>

        <div class="pic-user">
            <img src="images/dog-login.jpg" alt="">
        </div>
        <h2>Fazer login</h2>
        <?php
            if(isset($_POST["btnLogin"])){
                
                $email =  base64_encode(addslashes($_POST["email"]));
                $senha = md5(addslashes($_POST["senha"]));
                if(!empty($email) && !empty($senha)){
                    $sql = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha' ";

                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) == 1){
                            // existe o usuario no banco
                            $row = mysqli_fetch_array($result);
                            //
                            $_SESSION['id'] = $row['id'];
                            $_SESSION['nome'] = $row['nome'];
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['nome_bichinho'] = $row['nome_bichinho'];
                            $_SESSION['senha'] = $row['senha'];
                            header('Location: user-page.php');
                        }else{
                            echo "usuário não encontrado";
                        }
                }
                

            }
        }

        ?>

        <form method="POST" action="" >
            <label> Usuário </label>
          
            <div class="input-wrp">
                <input type="text" name="email" id="email" class="wrp-campo" required>
                <span class="floating-label"> Digite seu e-mail</span>
                <img src="images/mail-line.svg" alt="">
                
            </div>

            <label> Senha </label>
            <div class="input-wrp">
                <input type="text" name="senha" id="senha" class="wrp-campo" required>
                <span class="floating-label"> Digite sua senha</span>
                <img src="images/lock-password-line.svg" alt=""> 
            </div>
            
            <div class="block-pass">
                <div class="remember-pass">
                    <input type="checkbox" name="lembrar-me" id="lembrar-me" checked>
                    <span class="checkmark">Lembrar-me</span>
                </div>
                <a href="#" class="pass-recover">Esqueci minha senha</a>
            </div>
            
            <button type="submit" name="btnLogin" value="Acessar" class="primary-button login-button">Entrar</button>
            
            <div class="block-pass bottom">Ainda não é nosso cliente?<a href="cadastrar.php" class="pass-recover">Cadastre-se</a></div>
            
        </form>
        
    </main>

    <footer>
        © Copyright 2021. Todos os direitos reservados.
    </footer>

</body>
</html>