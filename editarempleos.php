<!DOCTYPE html>
<html lang="es">
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
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive2" aria-controls="navbarResponsive2"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive2">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="panel.php">PANEL DE CONTROL </a>
                </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">REGISTRAR EMPLEOS </a>
                    </li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">EDITAR EMPLEOS </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="mensajes.php">MENSAJES </a>
                    </li>
              
                </ul>
            </div>
        </div>
    </nav>


    <!-- Contact Form-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Registrar Un Empleo</h2>
     
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">


                    <form action="empleosregistra.php" method="post">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Nombre completo..."
                                data-sb-validations="required" name="nombre"/>
                            <label for="name">Empleo</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">El Nombre Es Requerido.</div>
                        </div>
                 
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="horas" type="text" placeholder="Horas requeridas"
                                data-sb-validations="required" name="horas"/>
                            <label for="horas">Horario laboral</label>
                            <div class="invalid-feedback" data-sb-feedback="horas:required">El Número de horas es Requerido.
                            </div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="experiencia" type="text" placeholder="Experiencia requerida"
                                data-sb-validations="required" name="experiencia"/>
                            <label for="experiencia">Experiencia Laboral</label>
                            <div class="invalid-feedback" data-sb-feedback="experiencia:required">Escribe la experiencia laboral.
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Se registró con éxito</div>
                            </div>
                        </div>
                        <!-- Submit error message-->

                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error al registrar el empleo!</div>
                        </div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Registrar Empleo</button>
                    </form>



                </div>
            </div>
        </div>
    </section>

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
