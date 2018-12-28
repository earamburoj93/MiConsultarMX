<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mi Consultor</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Estilos Propios -->
    <link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />

    
    <script>
        var ws = "http://localhost/ApiConsultorMX/miconsultor/public/";
    </script>
    
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"> <img class="logo" src="" height="40"> LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav ml-auto"> 

          <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">
                <img src="img/desk.svg" width="25" height="25" class="d-inline-block align-top" alt=""> 
                InDesk
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#myModal" data-toggle="modal">Usuarios</a></li>
                <li><a class="dropdown-item" href="#">Empresas</a></li>
                <li><a class="dropdown-item" href="#"></a></li>
              </ul>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">
                <img src="img/cloud.svg" width="25" height="25" class="d-inline-block align-top" alt="">
                InCloud
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"> Menu item 1</a></li>
                <li><a class="dropdown-item" href="#"> Menu item 2 </a></li>
              </ul>
          </li>  
          <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">
                <img src="img/box.svg" width="25" height="25" class="d-inline-block align-top" alt="">
                InBox
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"> Menu item 1</a></li>
                <li><a class="dropdown-item" href="#"> Menu item 2 </a></li>
              </ul>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">
                <img src="img/how.svg" width="25" height="25" class="d-inline-block align-top" alt="">
                InHow
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"> Menu item 1</a></li>
                <li><a class="dropdown-item" href="#"> Menu item 2 </a></li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="img/contact.svg" width="25" height="25" class="d-inline-block align-top" alt="">
                Contacto
              </a>
          </li>          
        </ul>
      </div>
    </nav>

  
    <?php include("login.php"); ?>
    <?php include("registro.php"); ?>    
    
    <!-- Header -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
            
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider/img2.jpeg" alt="">
            </div>
            <div class="carousel-item">
                <img src="img/slider/img3.jpeg" alt="">
            </div>
            <div class="carousel-item">
                <img src="img/slider/img4.jpeg" alt="">
            </div>
        </div>
            
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>



    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contactanos</h2>
        <!--<hr class="star-dark mb-5">-->
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Nombre</label>
                  <input class="form-control" id="name" type="text" placeholder="Nombre" required="required" data-validation-required-message="Favor de introducir el nombre.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email</label>
                  <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Introduzca un correo valido.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Numero Telefonico</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Numero Telefonico" required="required" data-validation-required-message="Introduzca un numero telefonico.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Mensaje</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Mensaje" required="required" data-validation-required-message="Favor de escribir su mensaje."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">2215 John Daniel Drive
              <br>Clark, MO 65243</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Freelancer</h4>
            <p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
              <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

    <script>
      $("#registro").click( function()
        {
          $('#myModal').modal('hide')
          document.getElementById("FormGuardarUsuario").reset();
          $('#RegistroModal').modal('show')
        }
      );
    </script>

    
  </body>

</html>
