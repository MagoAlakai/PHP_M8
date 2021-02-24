<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="row mt-5 mb-4 justify-content-center">
    <h3 class="col-8 mb-3 text-center">Tabla de Compras</h3>
    <form class="col-2 mb-2" action="form.php">
        <button type="submit" class="btn btn-primary">Añadir producto</button>
    </form>
</div>


<?php
require_once 'tabla.php';
require_once 'conexion.php';

//Instanciar class tabla
$tabla = new Tabla();

//Llamar al metodo en class tabla para mostrarla
$tabla->mostrar_tabla($query);

?>
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>