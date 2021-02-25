<?php
require_once 'conexion.php';
require_once 'index.php';

//Consulta Select desde PHP
$consulta = new Conexion();
$query = mysqli_query($consulta->conectar(), "SELECT * FROM compra");

class Tabla{

    public $total_producto;
    public $total_global;

    public function header_tabla(){
        echo '<div class="container">';
        echo '<table class="table table-hover table-responsive justify-content-center">';
        echo '<tr><th class="text-center">#</th><th class="text-center">Nombre</th><th class="text-center">Cantidad</th><th class="text-center">Precio</th><th class="text-center">Total</th><th class="text-center">Acciones</th></tr>';
    }

    public function body_tabla($query){
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
            echo '<td class="text-center">';
            echo '<a href="formModificar.php?id='.$compra['compra_id'].'">';
            echo '<button class="btn btn-info m-2"><img style="width:15px" src="./img/edit-regular.svg"></button>';
            echo '</a>';
            echo '<a href="eliminar.php?id='.$compra['compra_id'].'">';
            echo '<button class="btn btn-danger m-2"><img style="width:15px"  src="./img/trash-alt-regular.svg"></button>';
            echo '</a>';
            echo '</td>';
            echo '</tr>';
            $this->total_global += $this->total_producto;
        }
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

    public function mostrar_tabla($query){

        $this->header_tabla();

        $this->body_tabla($query);

        $this->final_tabla();
    }
}

?>


