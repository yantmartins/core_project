<?php
require '../App/Entity/Categoria.php';

if(isset($_POST['descricao']) && isset($_POST['cor']) && isset($_POST['icone'])){

    $descricao = $_POST['descricao'];
    $cor = $_POST['cor'];
    $icone = $_POST['icone'];

    $objCat = new Categoria();
    $objCat->descricao = $descricao;
    $objCat->cor = $cor;
    $objCat->icone = $icone;
    // $objColab->foto = $caminho;

    $res = $objCat->cadastrar();
    if($res){

        $response = ["status" => "OK"];
        echo json_encode($response);
    }else{
        $response = ["status" => "ERROR"];
        echo json_encode($response);
    }

}
?>  

