<?php
require './App/Entity/Colaboradores.php';

if(isset($_GET['id_colab'])){
    
    $id = $_GET['id_colab'];
    $obj = new Colabora();

    $colab = $obj ->buscar_por_id($id)

    $result = $colab->excluir();
    if($result){
        header('location:  ./listar.php');
    }else{
        echo '<script> alert("ERROOOO) </script>';
    }
}



?>
