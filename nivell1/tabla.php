<?php
require_once 'conexion.php';

class Tabla{

    public $total_producto;
    public $total_global;

    public function header_tabla(){
        echo '<div class="container mt-5">';
        echo '<h3 class="mb-4 text-center">Table de Compras</h3>';
        echo '<table class="table table-hover table-responsive justify-content-center">';
        echo '<tr><th class="text-center">#</th><th class="text-center">Nombre</th><th class="text-center">Cantidad</th><th class="text-center">Precio</th><th class="text-center">Total</th></tr>';
    }
    
    public function mostrar_tabla($query){

        $this->header_tabla();

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
            $this->total_producto= ($compra['compra_precio'] * $compra['compra_cantidad']);
            echo '<td class="text-center">';
            echo "$this->total_producto".' €';
            echo '</td>';
            echo '</tr>';
            $this->total_global += $this->total_producto;
        }

        $this->final_tabla();
    }

    public function final_tabla(){
        echo '<td colspan="4" class="text-center">';
        echo '<strong>TOTAL</strong>';
        echo '</td>';
        echo '<td class="text-center">';
        echo '<strong>'.$this->total_global.' €</strong>';
        echo '</td>';
        echo '</table>';
        echo '</div>';
    }
}

?>


