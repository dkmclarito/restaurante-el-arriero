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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="mensajes.php">PANEL DE CONTROL Y ATENCION AL CLIENTE </a>
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
    .card{
        border: none;
    }
     img:hover{
        border: 1px solid black;
    }
</style>
<br> <br>
    <!-- Contact Form-->
    <section class="page-section " id="mensajes">
        <div class="row">
            <div class="col col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
                    <a href="mensajes.php">
                    <img class="card-img-top" src="https://cdn-icons-png.flaticon.com/512/1646/1646781.png" alt="Card image cap">
                    </a>
            </div>
            </div>

            <div class="col col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
                    <a href="editarempleos.php">
                    <img class="card-img-top" src="https://image.flaticon.com/icons/png/512/65/65053.png" alt="Card image cap">
                    </a>
            </div>
            </div>

            <div class="col col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/06/06/00/33/edit-icon-2375785_960_720.png" alt="Card image cap">
            </div>
            </div>
        </div>
    </section>


    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
