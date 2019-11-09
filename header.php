<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Amemais  </title>
      <link rel="shortcut icon" href="/img/logo.png" type="image/x-png">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Materialize CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
      <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>

    <?php
      session_start();
      if(!isset($_SESSION["usuario"]))
      {
        header("Location:index.php");
      }
?>
   
    <!-- HEADER-->
    <header>
      <nav class="red lighten-1">
        <div class="container">
          <div class="nav-wrapper">

              <!--COMO A TELA FICA NAS VERSÕES MOBILE (TABLET E CELULAR)-->
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

              <!-- De tablet para baixo-->
              <ul class="left hide-on-med-and-down">
              <li><a href="home.php">Home</a></li>
                <li><a href="adote.php">Adote</a></li>
                <li><a href="historias.php">Histórias</a></li>
                <li><a href="fale_conosco.php">Fale Conosco</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="#"><b><?php echo $_SESSION["usuario"];?></b> 
                </a>
              </li>
              <li>
                  <a href="finalizar_session.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Sair
                  </a>
              </li>
            </ul>

            <!--FORMATANDO A TELA PARA A VERSÃO DE CELULAR-->
            <ul class="side-nav" id="mobile-demo">
              <li><a href="badges.html">Adote</a></li>
              <li><a href="historias.html">Histórias</a></li>
              <li><a href="fale_conosco.html">Fale Conosco</a></li>
              <li><a href="login.html">Login</a></li>
            </ul>
                        </ul>
          </div>
          </div>
        </nav>
    </header>

    <?php
      require_once 'admin/conn.php';
      $conn = new Conn();
    ?>