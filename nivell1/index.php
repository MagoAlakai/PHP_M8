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

<?php
require_once 'tabla.php';
require_once 'conexion.php';


//Consulta Select desde PHP
$consulta = new Conexion();
$query = mysqli_query($consulta->conectar(), "SELECT * FROM compra");

//Variable para el total
$total_producto = 0;
$total_global = 0;

echo '<div class="container mt-5">';
echo '<h3 class="mb-4 text-center">Table de Compras</h3>';
echo '<table class="table table-hover table-responsive justify-content-center">';
echo '<tr><th class="text-center">#</th><th class="text-center">Nombre</th><th class="text-center">Cantidad</th><th class="text-center">Precio</th><th class="text-center">Total</th></tr>';

while($compra = mysqli_fetch_assoc($query)){
    echo '<tr>';
    echo '<td class="text-center">';
    echo $compra['compra_id'];
    echo '</td>';
    echo '<td class="text-center">';
    echo $compra['compra_nombre'];
    echo '</td>';
    echo '<td class="text-center">';
    echo $compra['compra_cantidad'];
    echo '</td>';
    echo '<td class="text-center">';
    echo $compra['compra_precio'].'€';
    echo '</td>';
    $total_producto= ($compra['compra_precio'] * $compra['compra_cantidad']);
    echo '<td class="text-center">';
    echo "$total_producto".' €';
    echo '</td>';
    echo '</tr>';
    $total_global += $total_producto;
};

echo '<td colspan="4" class="text-center">';
echo '<strong>TOTAL</strong>';
echo '</td>';
echo '<td class="text-center">';
echo "<strong>$total_global".' €</strong>';
echo '</td>';
echo '</table>';
echo '</div>';


?>
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
