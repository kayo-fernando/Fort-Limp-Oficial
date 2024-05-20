<?php
    if(isset($_POST['submit'])){
    /*  print_r($_POST['email']);
      print_r('<br>');
      print_r($_POST['senha']);*/
      include_once('./conexao.php');

      $email = $_POST['email'];
      $senha = $_POST['senha'];
    
     
      $result = mysqli_query($conexao, "INSERT INTO login_user(email_user, senha_user) VALUES ('$email', '$senha')");
      
    
    
    }
    
    if(isset($_POST['submit2'])){
      /*print_r($_POST['email_cad']);
      print_r($_POST['senha1']);
      print_r($_POST['senha2']);*/
      include_once('./conexao.php');

      $email_cad = $_POST['email_cad'];
      $senhaum = $_POST['senha1'];
      $senhadois = $_POST['senha2'];

      $result1 = mysqli_query($conexao, "INSERT INTO cadastro_user(email_cad_user, senha_cad_user, confirm_senha) VALUES('$email_cad', '$senhaum', '$senhadois')");
    }

?>

<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en"> 
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website with Login & Registration Form</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Unicons -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
     <div class="div_main">
      <div class="main_one"></div>
      <div class="main_two"></div>
      <div class="main_three"></div>
     </div>
      <nav class="nav">
        <a href="#" class="nav_logo"><img src="../img/1.png" alt=""></a>

        <ul class="nav_items">
          <li class="nav_item">
            <span class="button1"><a href="#" class="nav_link">Home</a></span>
            <span class="button1"><a href="../sobre nós/quem somos.html" class="nav_link">Sobre nós </a></span>
            <span class="button1"><a href="#" class="nav_link">Serviços</a></span>
            <span class="button1"><a href="../registration-form-html-css-javascript/Registration Form/index.html" class="nav_link">Cadastre-se</a></span>
          </li>
        </ul>

        <button class="button" id="form-open">Login</button>
      </nav>
        <div class="center">
          <div>
           <div class="mascote">
             <span>
            
               <img src="../img/3.png" alt="">
             </span>
           </div>
          </div>


          <div>
            <div class="titulo">
              <span> <h1>Seja bem vindo</h1>
               <p> A FORTLIMP é uma empresa dedicada à limpeza urbana e ao cuidado com o meio ambiente.
                   Nosso objetivo é otimizar os horários de coleta de lixo, colaborar com ONGs ambientais
                   e promover o descarte correto de resíduos. Junte-se a nós para criar comunidades mais
                   limpas, seguras e sustentáveis.
                </p>
              </span>
             
            </div>
          </div>
        </div>
    </header>

    <!-- Home -->
    
    <section class="home">
     
      <div class="background">
         
      </div>
      
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
          <form action="./main.php" method="post">
            <h2>Login</h2>

            <div class="input_box">
              <input type="email" name="email" placeholder="Digite seu email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input
                type="password"
                name="senha"
                placeholder="Digite sua senha"
                required
              />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Lembrar-me</label>
              </span>
              <a href="#" class="forgot_pw">Esqueceu sua senha?</a>
            </div>

            <button class="button" name="submit">Logar agora</button>

            <div class="login_signup">
              Não possui uma conta? <a href="#" id="signup">Cadastre-se</a>
            </div>
          </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
          <form id="cad-user-form" action="./main.php" method="post">
            <h2>Cadastre-se</h2>

            <div class="input_box">
              <input type="email" placeholder="Digite seu email" name="email_cad" id="email_cad" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Crie sua senha" name="senha1" id="senha1" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Confirme sua senha" name="senha2" id="senha2" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button class="button" name="submit2" type="submit" value="Cadastrar">Finalizar cadastro</button>

            <div class="login_signup">
              Já possui uma conta? <a href="#" id="login">Login</a>
            </div>
          </form>
        </div>
      </div>
      <footer>
        <div class="footer">
        
          <div class="link-content">
            <div class="link-content__info">
              <ul>
                <h3>Inicio</h3>
                <li>Home</li>
                <li>Sobre nós</li>
                <li>Serviços</li>
                <li>Cadastre-se</li>
              </ul>
              <ul>
                <h3>Sobre nós</h3>
                <li><p>A FORTLIMP é uma 

                       empresa dedicada
                       à limpeza urbana
                       e ao cuidado com
                       o meio ambiente.
                        
               </p></li>
              </ul>
              <ul>
                <h3>Serviços</h3>
                <li>Centro de ajuda</li>
                <li>Carreiras</li>
                <li>Preferência de cookies</li>
              </ul>
              <ul>
                <H3>Suporte</H3>
                <li>FAQ</li>
                <li>Tel: +55 (85) 99149-9901</li>
                <li>E-mail: forthelp@gmail.com</li>
              </ul>
            </div>
          

        </div>
        <div class="social-links">
          <div class="span">
            <span><h3>Nossas redes</h3></span>
            <button class="buttom2"><i class="fa-brands fa-facebook-f"></i></button>
            <button class="buttom2"><i class="fa-brands fa-instagram"></i></button>
            <button class="buttom2"><i class="fa-brands fa-youtube"></i></button>
          </div>           
        </div>

      </footer>
    </section>
   
    <script src="./script.js"></script>
    <script src="./alert.js"></script>
   <!-- <script src="./sweetalert.js"></script-->
  </body>
</html>
