<?php require_once ("header.php");?>


<?php require_once("header.php"); ?>
  <!--FIM DO CABEÇALHO-->
<style> </style>
  <div class="container justify">
    <br>
    <ul class="collapsible col s6">
      <?php
        
        $result_user = "SELECT CODIGO, NOME FROM noticia";

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




<?php
        
        require './Conn.php';
        
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        $limit = 1;
        $conn = new Conn();
        $result_user = "SELECT * FROM comentario WHERE id=:id LIMIT :limit";
        
        $resultado_user = $conn->getConn()->prepare($result_user);
        $resultado_user->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado_user->bindParam(':limit', $limit, PDO::PARAM_INT);
        $resultado_user->execute();
        
        $row_user = $resultado_user->fetch(PDO::FETCH_ASSOC);
        echo "ID: " . $row_user['id'] . "<br>";
        echo "Nome: " . $row_user['nome'] . "<br>";
        echo "E-mail: " . $row_user['celular'] . "<br>";
        echo "Comentario: " . $row_user['comentario'] . "<br>";
        echo "Inserido: " . date('d/m/Y H:i:s', strtotime($row_user['created'])) . "<br>";
        if(!empty($row_user['modified'])):
            echo "Alterado: " . date('d/m/Y H:i:s', strtotime($row_user['modified'])) . "<br>";
        endif;
        ?>

<?php require_once ("footer.php");?>