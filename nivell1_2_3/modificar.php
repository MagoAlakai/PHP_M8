<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<?php
    require_once 'conexion.php';
    
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $id = $_POST['id'];

    $conexion2 = new Conexion();
    $conectar2 = $conexion2->conectar();

    $sql = "UPDATE compra SET compra_nombre='$nombre', compra_precio=$precio, compra_cantidad=$cantidad WHERE compra_id='$id'";
    $modificar = mysqli_query($conectar2, $sql);

    if($modificar){
        header('Refresh: 3; URL=index.php');
        echo '<p class="mt-4 container col-7 alert alert-success agileits text-center" role="alert">El producto se ha modificado correctamente!</p>';
        mysqli_close($conectar2);
    }else{
        echo 'Error de conexión: '.mysqli_error($modificar);
    }
?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>