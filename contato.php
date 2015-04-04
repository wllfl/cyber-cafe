<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Contato - Cyber Café</title>
  <meta name="keywords" content="Desenvolvimento de sites em São Roque e Região, Jogos online sem lag,Serviços pessoais,ps4,ps3,xbox360, lazer mairinque,cyber cafe mairinque,cyber cafe 24h">
  <meta name="description" content="Desenvolvimentos de Sistemas,Jogos online, ps4 ps3 xbox360,cyber café , lan house mairinque,conexao rapida,cyber cafe 24h mairinque">
  <meta name="robots" content="ALL">
  <meta name="author" content="Cyber-Cafe-24h">
  <link rel="shortcut icon" href="img/fiv-icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
  <link rel="stylesheet" type="text/css" href="css/menu-rodape.css" />
  <link rel="stylesheet" type="text/css" href="css/contato.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" href="css/fonts-icon.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/contato.css">
  <script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body id="pg-contato">
  	<?php require_once 'include/inc_menu.php'; ?>  

     <div class="container carousel">
        <div class="row-fluid">

           <div class='row-fluid'>
              <div class="col-md-4 box-titulo">
                <h1 class='title-pagina'><i class='fa fa-envelope fa-2x'></i> Entre em Contato</h1>
              </div>
          </div>
      
        </div>
    </div> 
    <!-- INICIO CONTATO  -->
    <div class="container">
      <div class="row-fluid infoContato">
        <div class="span5">
          <h2 class="subtitulo-pagina">Informações </h2>
          <hr class="linhaContato">
              <p><i class="fa fa-user"></i> Responsável: Heleno A. Gomes</p>
              <p><i class="fa fa-phone"></i> Fixo: (11) 4708 - 3000</p>
              <p><i class="fa fa-phone"></i> Celular Vivo: (11) 97251 - 0358</p>
              <p><i class="fa fa-envelope"></i><a href="mailto:cybercafe24h@gmail.com"> cybercafe24h@gmail.com</a></p>
              <p><i class="fa fa-envelope"></i><a href="mailto:treinamentos@ig.com.br"> treinamentos@ig.com.br</a></p>
        </div>

        <div class="span7 form-contato">
          <form action="envia_email.php" method="post" id='form-contato'>
                <input type="text" name='nome' required class="input-contato" placeholder="Nome">
                <input type="text" name='email' required class="input-contato" placeholder="E-Mail">
                <input type="text" name='fone' class="input-contato" placeholder="Telefone Residencial">
                <input type="text" name='assunto' class="input-contato" placeholder="Assunto">
                <textarea class="input-contato textarea" rows="10" name='mensagem' required placeholder="Digite sua mensagem"></textarea>
                <input type="button" id='submit' class="btn btn-large btn-info" value='Enviar'>
                <span class='msg'></span>
          </form>
        </div>
      </div>
    </div>  
    <!-- FIM CONTATO -->

    <!-- INICIO MAPA -->
        <div class="map-canvas" id="map-canvas">Carregando nosso endereço...</div>
    <!-- FIM MAPA -->   

    <!-- INICIO RODAPÉ -->
  	<?php 	require_once 'include/inc_rodape.php'; ?>
    <!-- FIM RODAPÉ -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
    </body>
</body>
</html>