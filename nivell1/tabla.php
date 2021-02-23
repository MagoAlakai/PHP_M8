<?php
// require_once 'conexion.php';

// class Tabla{
//     static public function mostrar_tabla(){
//         $total_producto = 0;
//         $total_global = 0;

//         //Consulta Select desde PHP
//         $consulta = new Conexion();
//         $query = mysqli_query($consulta->conectar(), "SELECT * FROM compra");

//         while($compra = mysqli_fetch_assoc($query)){
//             echo '<tr>';
//             echo '<td class="text-center">';
//             echo $compra['compra_id'];
//             echo '</td>';
//             echo '<td class="text-center">';
//             echo $compra['compra_nombre'];
//             echo '</td>';
//             echo '<td class="text-center">';
//             echo $compra['compra_cantidad'];
//             echo '</td>';
//             echo '<td class="text-center">';
//             echo $compra['compra_precio'].'€';
//             echo '</td>';
//             echo '<td class="text-center">';
//             $total_producto= ($compra['compra_precio'] * $compra['compra_cantidad']);
//             echo "$total_producto".' €';
//             echo '</td>';
//             echo '</tr>';
//             $total_global += $total_producto;
//         };
//     }
// }

?>
