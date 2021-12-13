<?php

    $cons_usuario="root";
    $cons_contra="";
    $cons_base_datos="empleos";
    $cons_equipo="localhost";
    
    $obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);

    if(!$obj_conexion)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
        echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
    }


    $nombre = $_POST['nombre'];
    $horas = $_POST['horas'];
    $experiencia = $_POST['experiencia'];

    $sql = "INSERT INTO datos VALUES('$nombre', '$horas', '$experiencia')";

    $var_resultado = $obj_conexion->query($sql);

    if(!$var_resultado){
        echo"Hubo algun error";

    }else{
        echo "<script>location.href ='panel.php';</script>";
    }


?>