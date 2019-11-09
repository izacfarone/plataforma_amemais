<?php require_once("header.php"); ?>
  <!--FIM DO CABEÇALHO-->
<style> </style>
  <div class="container justify">
    <br>
    <ul class="collapsible col s6">
      <?php
        
        $result_user = "SELECT * FROM historia";

        $resultado_user = $conn->getConn()->prepare($result_user);
        $resultado_user->execute();

      while ($row_user = $resultado_user->fetch(PDO::FETCH_ASSOC)):      
      ?>
     
      <li>
        
        <div class="collapsible-header"><i class="material-icons prefix">pets</i><?php echo $row_user['nome']; ?></div>
         <div class="collapsible-body container">
           <div class="container">
             <span class="center-align">
             <strong>
             <h5 for=""><?php echo $row_user['titulo']; ?></h5>
             </strong>
             </span>
             <hr><br>
          <span style="font-family: Cambria,Georgia,serif; font-size:130%;">
            <?php echo $row_user['texto']; ?>
          </span>
          <div class="center-align">
            <img src="<?php echo  "admin/".$row_user['imagem']; ?>" alt="" style="width: 200px; height: 200px;">
          </div>
        </div>
        </div>
      </li>
      <?php  endwhile; ?>
    </ul>
    <br>
  </div>



  <!-- RODAPÉ-->
  <?php require_once("footer.php"); ?>