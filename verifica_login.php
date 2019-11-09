<!DOCTYPE html>
<html>
<head>
	<title>Comprovar Login</title>
</head>
<body>
  <?php
	try
	{
         
      $base=new PDO("mysql:host=localhost;dbname=plataforma","root");
       $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $sql="SELECT * FROM usuario WHERE usuario= :usuario AND senha= :senha";

       $resultado=$base->prepare($sql);

       $nome=($_POST["usuario"]);
       $password=($_POST["senha"]);

       $resultado->bindValue(":usuario", $nome);
       $resultado->bindValue(":senha", $password);

       $resultado->execute();

       $numero_registro=$resultado->rowCount();

       if($numero_registro!=0)
       {
         echo "<h1>GOOOOOOOOOOOOOOOO conectado com sucesso</h1>";

         session_start();

         $_SESSION["usuario"] = $_POST["usuario"];

         header("Location:home.php");


       }else
       {
             header("Location:index.php");
       }

	} catch(Exception $e)
	{
       die("Error:" . $e->getMessage());
	}
?>
</body>
</html>



