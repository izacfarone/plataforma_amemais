

<?php
  require_once ("header.php");

  $result_user = "SELECT * FROM noticia";

  $resultado_user = $conn->getConn()->prepare($result_user);
  $resultado_user->execute();
?>

    <!-- SLIDER -->
    <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/cao_e_gato.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>Aqui somos todos uma família!</h3>
              <h5 class="light grey-text text-lighten-3">A família Amemais.</h5>
            </div>
          </li>
          <li>
            <img src="img/gato.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/Animais-para-serem-adotados-Cláudio-Lahos-16.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>Venha nos visitar</h3>
              <h5 class="light grey-text text-lighten-3">Agende uma visita e conheça um pouco mais sobre a .</h5>
            </div>
          </li>
          <li>
            <img src="img/abandonado.JPG"> <!-- random image -->
            <div class="caption center-align">
              <h3>Abandono é crime!</h3>
              <h5 class="light grey-text text-lighten-3">Encontrou um animal abandonado? Entre em contato!!!</h5>
            </div>
          </li>
        </ul>
      </div>

      <!-- CONTEUDO -->
      <div class="row container center">

        <!-- NOTICAS -->
        <section class=" col s12 m6 l12 center">
          <h5 class="center"> Últimas noticias </h5>

          <?php while ($row_user = $resultado_user->fetch(PDO::FETCH_ASSOC)): ?>
            <article class="col s12 l6 xl4">
              <div class="card">
                <div class="card-image">
                 <img src="<?php echo 'admin/'.$row_user['imagem']; ?>" style='height: 250px;'>

                </div>
                <div class="card-content">
                  <span class="card-title"> <!--Aqui é o título da noticia-->
                    <?php
                      echo $row_user['chamaTit'];
                    ?>
                  </span>
                  <p>
                    <?php
                      echo $row_user['chamaDesc'];
                    ?>
                  </p>
                </div>
                <div class="card-action">
                  <a href="#">Leia mais</a>
                </div>
              </div>
            </article>
          <?php endwhile;?>
        </section>
      </div>

<?php require_once("footer.php"); ?>
