<!DOCTYPE hml>

<html>

<head>
    <meta charset="utf-8">
    <title>Login - Amemais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <style type="text/css">
        #sombra{
            -webkit-box-shadow: 10px 10px 37px 0px rgba(223,226,242,1);
            -moz-box-shadow: 10px 10px 37px 0px rgba(223,226,242,1);
            box-shadow: 10px 10px 37px 0px rgba(223,226,242,1);
        }
    </style>

</head>

<body>
    
    <div class="container col col-sm-4" id="sombra" style="margin-top: 110px; border-radius: 15px; border: 2px solid #f3f3f3">
        <div style="padding: 10px">
            <center>
                <img src="img/cadeado.png" width="100px" heigth="100px">
            </center>
            <form method="post" action="verifica_login.php" id="formlogin" name="formlogin">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="usuario" 
                    class="form-control" placeholder="Usuário" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="text" name="senha" 
                    class="form-control" placeholder="Senha" autocomplete="off" required>
                </div>
                <button type="submit" class="btn btn-sm btn-success">Entrar</button>
            </form>
                <p style="text-align: left;">Ainda não é cadastrado? <a href="index.php">Cadastrar-me</a></p>
                <div style="text-align: right;">
                </div>
               
                </div>
        </div>
    
    </div>


    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>    
</body>

</html>