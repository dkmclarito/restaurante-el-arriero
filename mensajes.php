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
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="editarempleos.php">REGISTRAR EMPLEOS </a>
                </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">EDITAR EMPLEOS</a>
                    </li>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">MENSAJES</a>
                    </li>
              
                </ul>
            </div>
        </div>
    </nav>


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
      <th scope="col">Mensaje</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Contactar</th>
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
      <td><?php echo $mostrar['mensaje'] ?></td>
      <td><?php echo $mostrar['email'] ?></td>
      <td><a href="https://api.whatsapp.com/send?phone=503<?php echo $mostrar['email']?>" target="_blank">Responder por WhatsApp</a></td>
    </tr>

  </tbody>
  <?php
      }
?>
</table>
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
