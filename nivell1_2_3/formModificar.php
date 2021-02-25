<?php
    require_once 'conexion.php';

    $conexion1 = new Conexion();
    $conectar1 = $conexion1->conectar();
    $id = $_GET['id'];

    $query = "SELECT compra_nombre, compra_precio, compra_cantidad FROM compra WHERE compra_id='$id'";
    $result = mysqli_query($conectar1, $query);
    $compra = mysqli_fetch_row($result);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<div class="container mt-5">

    <h3 class="mb-4 text-center">Modificar Producto</h3>
    <form action="modificar.php" method="post" class="d-block">
    <input type="text" hidden="" name="id" value="<?php echo $id ?>">
        <div class="mb-3 col-8 mx-auto">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $compra[0] ?>">
        </div>
        
        <div class="mb-4 d-flex justify-content-center">
            <div class="col-4">
                <label for="precio" class="form-label">Precio unidad</label>
                <input type="text" class="form-control" name="precio" value="<?php echo $compra[1] ?>">
            </div>
            <div class="col-4">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidad" value="<?php echo $compra[2] ?>">
            </div>
        </div>

        <button type="submit" class="btn btn-primary col-8 d-block mx-auto">Submit</button>
    </form>

</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>