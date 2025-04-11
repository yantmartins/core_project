<?php
require_once './App/DB/Database.php';
require_once './App/Entity/Colaboradores.php';

$colab = new Colabora();
$dados = $colab->buscar_json(); 

echo json_encode([
    "status" => 200,
    "colaboradores" =>$dados], JSON_UNESCAPED_UNICODE);
?>