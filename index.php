<!DOCTYPE html>
<html>
    <head>
        <!-- created by OSTON CODE CYPHER -->
        <!--Support/subscribe my channel @ youtube.com/ostoncodecypher -->
        <title>Amemais - Login / Registrar</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
        <link rel="stylesheet" href="css/custom.css">  
        <style>
            .progress{
                width:50%;
                margin:0 auto;
                margin-top:20%;
            }
            @media only screen and (max-width:924px){
                .progress{
                    width:70%;
                    margin:0 auto;
                    margin-top:60%;
                }
            }
        </style>
    </head>

    <body class="body">

        <div id="flayer">
            <div id="slayer">
                <div class="container" id="content">
                    <br> <br>

                    <div class="row">
                        <div class="col l3 m3 s12"></div>
                        <div class="col l6 m6 s12">
                            <form name="cadastrar" action="insere_usuario.php" method="POST">
                                <div class="card-panel z-depth-5">
                                    <h5 class="center">Cadastre-se</h5>
                                    <p class="center">Junte-se à nossa família agora!</p>

                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" name="nome" class="validate">
                                        <label>Nome Completo</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">assignment_ind</i>
                                        <input type="text" name="usuario" class="validate" maxlength=30>
                                        <label>Usuario</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">perm_phone_msg</i>
                                        <input type="text" name="celular" class="validate" maxlength=14>
                                        <label>Celular</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">email</i>
                                        <input type="email" name="email" class="validate" maxlength=30>
                                        <label>E-mail</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="txtSenha" type="password" name="senha" class="validate" 
                                        maxlength=16>
                                        <label>Insira Senha (max 16)</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">lock</i>
                                        <input type="password" name="senha" class="validate" maxlength=16 oninput="validaSenha(this)">
                                        <label>Repita a Senha</label>
                                    </div>


                                    <p class="right">Já é cadastrado(a) <a href="login.php" class="modal-trigger">Fazer Login</a></p>
                                    <input type="submit" name="SendCadUser" value="Registrar" class="btn left col s4 blue">

                                    <div class="clearfix"></div>
                                </div>
                            </form>

                        </div>
                        

                    </div>
                </div>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

<script>
    $(document).ready(function () {
        // BOTÃO MENU
        $(".button-collapse").sideNav();
        // SLIDER
        $('.slider').slider();
    });
</script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/custom.js"></script>
<script>
    const login = document.querySelectorAll(".modal");
    M.Modal.init(login, {
        opacity: 0.7,
        dismissible: false
    });
    document.querySelector("#content").style.display = "none";
    document.querySelector("#flayer").classList.add("progress");
    document.querySelector("#slayer").classList.add("indeterminate");
    setTimeout(function () {
        document.querySelector("#flayer").classList.remove("progress");
        document.querySelector("#slayer").classList.remove("indeterminate");
        document.querySelector("#content").style.display = "block";
    }, 3000)
</script>
<script type="text/javascript">
	$(document).ready(function(){
			$("#celular").mask("(99) 99999-9999");
		});
</script>

<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>

</body>

</html>