<?php
require '../App/Entity/Produto.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $array_error = array();

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ? $_POST['email'] : $array_error[] = 'ERRO NO E-MAIL';

    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_NUMBER_INT);
    
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    $promo = filter_input(INPUT_POST, 'promo', FILTER_VALIDATE_BOOLEAN) ? $_POST['promo'] : 'ERRO NO BOOLEAN';

    if(count($array_error) > 0){
        $array_error['status'] = 200;
        $response = $array_error;
        echo json_decode($response);
    } else{
        $obj = new Produto();
        $obj->nome = $nome;
        $obj->descricao = $descricao;
        $obj->email = $email;
        $obj->tipo = $tipo;
        $obj->preco = $preco;
        $obj->promo = $promo;
    
        $res = $obj->cadastrar();
        $array_error['status'] = 200;

        $response = $array_error;
        echo json_decode($response);
    }
}
?>  

