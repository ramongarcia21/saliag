<?php

  session_start();
  include 'conexion.php';
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PAYLOAD</title>

    <!-- Bootstrap -->
    <link href="resources/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="resources/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="resources/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="resources/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="resources/build/css/custom.min.css" rel="stylesheet">
    <link href="resources/icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          
            <form action="validar.php" method="post">
              <h1>Iniciar sesión</h1>
                
                <div>
                    <input type="text" name="username"  class="form-control" placeholder=" Username"/>
                </div>
                <div>
                  <input type="password" name="password" class="form-control" placeholder=" Password" />
                </div>
                <div>  
                  <button  class="btn btn-block btn-secondary submit" type="submit" name="btn-login" >   
                    <i class="bi bi-arrow-return-right"> </i>Iniciar sesión   
                  </button>
                </div>

                <div class="clearfix"></div>
                    
                    <p>©2021 Todos los derechos reservados para PAYLOAD</p>
                  
                </div>
              
            </form>
          </section>
        </div>
    
      </div>
    </div>
  </body>
</html>