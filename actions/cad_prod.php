<?php
require '../App/Entity/Produto.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_NUMBER_INT);
    
    $descricao = $_POST['descricao'];
    $array_error = array();
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); ? $_POST['email'] : "ERROR"
    

    

    echo $email;
    exit;
    $tipo = $_POST['tipo'];
    $preco = $_POST['preco'];
    $promo = $_POST['promo'];

    $obj = new Produto();
    $obj->nome = $nome;
    $obj->descricao = $descricao;
    $obj->email = $email;
    $obj->tipo = $tipo;
    $obj->preco = $preco;
    $obj->promo = $promo;

    $res = $obj->cadastrar();
    if($res){

        echo '<script> alert("FOI") </script>';
        // $response = ["status" => "OK"];
        // echo json_encode($response);
    }else{
        echo '<script> alert("ERROOOOO") </script>';
        // $response = ["status" => "ERROR"];
        // echo json_encode($response);
    }

}
?>  

