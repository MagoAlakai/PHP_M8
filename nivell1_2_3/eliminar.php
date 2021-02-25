<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<?php
    require_once 'conexion.php';

    $id = $_GET['id'];

    $conexion3 = new Conexion();
    $conectar3 = $conexion3->conectar();

    $sql = "DELETE FROM compra WHERE compra_id='$id'";
    $eliminar = mysqli_query($conectar3, $sql);

    if($eliminar){
        header('Refresh: 3; URL=index.php');
        echo '<p class="mt-4 container col-7 alert alert-success agileits text-center" role="alert">El producto se ha eliminado correctamente!</p>';
        mysqli_close($conectar3);
    }else{
        echo 'Error de conexión: '.mysqli_error($eliminar);
    }
?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>