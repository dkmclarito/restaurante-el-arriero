<!DOCTYPE html>
<html lang="en">
    <?php
    $conexion = mysqli_connect('localhost', 'root', '', 'empleos');
   ?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Contacto</title>
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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="index.html">Inicio <i class="fas fa-house-user"></i></a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Empleos <i
                                class="fas fa-users"></i> </a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="acerca-de.html">??Qui??nes
                            somos <i class="fas fa-question"></i></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="contacto.html">Contacto <i
                                class="fas fa-mail-bulk"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">

        </div>
    </header>

    <style>
    #mensajes{
        width: 70%;
        margin-left: 15%;
    }
</style>

    <!-- Contact Section-->


    <section class="page-section" id="mensajes">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Horario Laboral</th>
      <th scope="col">Experiencia Laboral</th>
      <th scope="col">Acci??n</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql = "SELECT * FROM datos";
      $resultado = mysqli_query($conexion, $sql);

      while($mostrar = mysqli_fetch_array($resultado)){

        ?>
      
    <tr>
      <td><?php echo $mostrar['nombre'] ?></td>
      <td><?php echo $mostrar['horas'] ?></td>
      <td><?php echo $mostrar['experiencia'] ?></td>
      <td><a href="https://api.whatsapp.com/send?phone=50375663930" target="_blank">Enviar CV</a></td>
    </tr>

  </tbody>
  <?php
      }
?>
</table>
    </section>


    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Estamos aqui <i class="fas fa-map-marked"></i></h4>
                    <p class="lead mb-0">
                        Colonia La Escal??n
                    </p>
                    <a href="https://www.google.com/maps/d/viewer?msa=0&ie=UTF8&t=m&ll=13.702228002153305%2C-89.22629600000003&spn=0.002012%2C0.006426&source=embed&mid=1-DWfzVyPD5KxwLfxYqDDTzmHVds&z=17"
                        target="_blank">
                        ??C??mo llegar?
                    </a>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Siguenos en</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/elarrierosv"
                        target="_blank">
                        <i class="fab fa-fw fa-facebook-f"></i>
                    </a>

                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Desarrollador</h4>
                    <p class="lead mb-0">

                    <ul>
                        <li>Cesia Rebeca</li>
                        <li>Fernando Alexis</li>
                        <li>Santos Argueta</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </footer>
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
