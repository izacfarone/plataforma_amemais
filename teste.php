<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Materialize </title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Materialize CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
      <link rel="stylesheet" href="css/custom.css">  
    </head>
    <body> 
        
        
         <!-- Navbar goes here -->

    <!-- Page Layout here -->
    <div class="row">

      <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
       Grey navigation panel

              This content will be:
          3-columns-wide on large screens,
          4-columns-wide on medium screens,
          12-columns-wide on small screens  

      </div>

      <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
        Teal page content

              This content will be:
          9-columns-wide on large screens,
          8-columns-wide on medium screens,
          12-columns-wide on small screens  

      </div>

    </div>
        
            <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

    <script> 
    $(document).ready(function(){
       // BOTÃO MENU
       $(".button-collapse").sideNav(); 
       // SLIDER
       $('.slider').slider();     
    });  
    </script> 

    </body>
  </html>