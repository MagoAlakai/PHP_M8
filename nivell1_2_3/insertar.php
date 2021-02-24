<?php
    require_once 'conexion.php';
    require_once 'form.php';

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $conexion = new Conexion();
    $insertar = $conexion->conectar();

    $sql = "INSERT INTO compra(`compra_nombre`, `compra_precio`, `compra_cantidad`) VALUES ('$nombre', $precio, $cantidad)";
    $insert = mysqli_query($insertar, $sql);

    if($insert){
        header('Refresh: 3; URL=index.php');
        echo '<p class="mt-4 container col-7 alert alert-success agileits text-center" role="alert">El producto se ha registrado correctamente!</p>';
    }else{
        echo 'Error de conexión: '.mysqli_error($insertar);
    }
?>
