<!DOCTYPE html>
<html>
<head>
	<title>Encerrando session</title>
</head>
<body>

	<?php
	    
       session_start();
       session_destroy();
       header("Location:login.php");

	?>

</body>
</html>