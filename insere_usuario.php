<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
<link rel="stylesheet" href="css/custom.css">  

<?php
        require './conn.php';
        require 'script/password.php';
        $Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($Dados['SendCadUser'])):
            unset($Dados['SendCadUser']);
            $conn = new Conn();
            $result_cadastrar = "INSERT INTO usuario (nome, email, celular, usuario, senha, created) VALUES (:nome, :email, :celular, :usuario, :senha, NOW())";
            $cadastrar = $conn->getConn()->prepare($result_cadastrar);
            $cadastrar->bindParam(':nome', $Dados['nome'], PDO::PARAM_STR);
            $cadastrar->bindParam(':email', $Dados['email'], PDO::PARAM_STR);
            $cadastrar->bindParam(':celular', $Dados['celular'], PDO::PARAM_STR);
            $cadastrar->bindParam(':usuario', $Dados['usuario'], PDO::PARAM_STR);
            $cadastrar->bindParam(':senha', $Dados['senha'], PDO::PARAM_STR);
            $cadastrar->execute();
        endif;

        

        ?>

<div class="container col s12 m6 l9" style="width:400px">
    <center style="margin-top: 110px"> 
        <h4 >Parabéns <?php echo $Dados['nome']; ?>, você foi cadastrado com sucesso</h4>
        <div style="margin-top: 10px">
            <a href="index.php" class="waves-effect waves-light btn green accent-4"style="color: #000000; text-align: right;">Voltar</a>&nbsp;&nbsp;
            <a href="login.php" class="waves-effect waves-light btn light-blue darken-4"style="color: #ffffff; text-align: left;">LOGAR</a>
        </div>
    </center>
</div>