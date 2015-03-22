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
                <h1 class='title-pagina'><i class='fa fa-envelope fa-1x'></i> Entre em Contato</h1>
              </div>
          </div>
      
        </div>
    </div> 
    <!-- INICIO CONTATO  -->
    <div class="container">
      <div class="row col-md-12 infoContato">
        <div class="col-md-5">
          <h3 class="subtitulo">Informações para o contato: </h3>
          <hr class="linhaContato">
          <label for="responsavel">Reponsável: </label>
          <label for="email">E-Mail: </label>
          <label for="telefone">Telefone: </label>
          <label for="celular">Celular: </label>
        </div>

        <div class="col-md-5 pull-right">
          <form >
                <input type="text" class="form-control" placeholder="Nome">
                <input type="text" class="form-control" placeholder="E-Mail">
                <input type="text" class="form-control" placeholder="Telefone Residencial">
                <input type="text" class="form-control" placeholder="Assunto">
                <textarea class="form-control" rows="3" class="textarea"></textarea>
                <input type="submit" class="btn btn-large btn-info">
          </form>
        </div>
      </div>
    </div>  
    <!-- FIM CONTATO -->

    <!-- INICIO MAPA -->
    <div class="map-wrapper">
        <div class="map-canvas" id="map-canvas">Carregando nosso endereço...</div>
    </div>
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