<?php
//dado que desde caulquier punto es posible regresar al index, destruimos 
//las variables de sesion para evitar errores

if(session_start()){
  session_destroy();
  $_SESSION = array();
  $_POST = array();
  $_GET = array();
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Clínica Guadalupe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>

    <main>
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper amber lighten-4">
            <a class="brand-logo" href="index.html">&nbsp;&nbsp;&nbsp;<img class="responsive-img" src="resources/logo.png" width="100" height="250"/></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li class="active"><a href="index.html">Inicio</a></li>
              <li class=""><a href="especialidad.html">Especialidades</a></li>
              <li class=""><a href="agenda.html">Agenda una cita</a></li>
              <li class=""><a href="quienes.html">¿Quiénes somos?</a></li>
            </ul>
            <ul class="side-nav oro" id="mobile-demo">
              <li class="active"><a href="index.html">Inicio</a></li>
              <li class=""><a href="especialidad.html">Especialidades</a></li>
              <li class=""><a href="agenda.html">Agenda una cita</a></li>
              <li class=""><a href="quienes.html">¿Quiénes somos?</a></li>
            </ul>
          </div>
        </nav>
      </div>

    <div class="slider">
        <ul class="slides">
         
          <li>
            <a title="Cancer" href="resources/cancer.pdf"><img class="responsive-img" src="resources/cancer.jpg" width="100" height="250" alt="diabetes" /></a>
            <div class="caption right-align">
              <h3>¿Qué es el cancer y cómo prevenirlo?</h3>
              <h5 class="light grey-text text-lighten-3">Click Aquí</h5>
            </div>
          </li>
          <li>
            <a title="Donar Sangre" href="resources/DonaSangre.pdf"><img class="responsive-img" src="resources/donar.jpg" width="100" height="250" alt="Donar Sangre" /></a> <!-- random image -->
            <div class="caption left-align">
              <h3>Dona sangre</h3>
               <h5 class="light grey-text text-lighten-3">Click Aquí</h5>
            </div>
          </li>
          <li>
           <a title="Diabetes" href="resources/diabetes.pdf"><img class="responsive-img" src="resources/diabetes.jpg" width="100" height="250" alt="diabetes" /></a>  <!-- random image -->
            <div class="caption left-align">
              <h3>¿Qué es la Diabetes?</h3>
              <h5 class="light grey-text text-lighten-3">Click Aquí</h5>
            </div>
          </li>
          <li>
            <a title="Nutrición" href="resources/nutricion.pdf"><img class="responsive-img" src="resources/nutricion.jpg" width="100" height="250" alt="Nutrición" /></a>
            <div class="caption right-align">
              <h3>Nutrición: datos y consejos</h3>
              <h5 class="light grey-text text-lighten-3">Click Aquí</h5>
            </div>
          </li>
         
        </ul>
    </div>
    <br>
    </main>
    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5>Dirección</h5>
                <p class="grey-text text-lighten-4">Hacienda de Solis #155 Col Impulsora<br> C.P 57130 Neza, México</p>

                <h5>Teléfonos</h5>
                <p class="grey-text text-lighten-4">5780-3682<br>51207991</p>
              </div>

              <div class="col l4 offset-l2 s12">
                <h5>Correo</h5> <span class="white-text">Aquí va el correo</span><br>

              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <center>
            <a href="login.html">©GAAX 2017 </a>
            </center>
            </div>
          </div>
  </footer>

  <!--  Scripts-->
  <script src="js/jquery-2.1.1.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  <script>
    $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
  </script>

  </body>
</html>