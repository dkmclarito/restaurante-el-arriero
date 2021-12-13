<!DOCTYPE html>
<html lang="en">
<?php
 $conexion = mysqli_connect('localhost', 'root', '', 'prueba');
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Panel de control y atencion al cliente</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/scroll.js"></script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="">
        <div class="container">

            <!--REDES-->
            <div class="redes">
                <a href="https://www.facebook.com/elarrierosv" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                </a>

            </div>


            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive2" aria-controls="navbarResponsive2"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.html">Inicio <i class="fas fa-house-user"></i></a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="empleos.php">Empleos <i class="fas fa-users"></i> </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="acerca-de.html">¿Quiénes
                            somos <i class="fas fa-question"></i></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#">Contacto <i class="fas fa-mail-bulk"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column xxxxxxxxx">
     
        </div>
    </header>


<style>
    .xxxxxxxxx{
        height: 90px;
    }
    #mensajes{
        width: 70%;
        margin-left: 15%;
        margin-top: -4%;
    }
    #mensajes a{
        color: white;
    }
</style>


    <!-- Contact Section-->
    <section class="page-section" id="mensajes">
       <h4>El Mensaje fue enviado con éxito</h4>
       <h1>¡Gracias por preferirnos!</h1>
       <button class="btn btn-primary"><a href="index.html">Volver</a></button>
       <button class="btn btn-danger"><a href="contacto.html">Enviar otro mensaje</a></button>
    </section>


<br><br><br><b></b>

    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Restaurante El Arriero 2021</small></div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
