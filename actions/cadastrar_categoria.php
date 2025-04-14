<?php
require '../App/Entity/Categoria.php';

// if(isset($_POST['cadastrar_categoria'])){
    
    // $descricao = $_POST['descricao'];
    // $cor = $_POST['cor'];
    // $icone = $_POST['icone'];

    $descricao = "123 TESTANDO";
    $cor = "123 TESTANDO";
    $icone ="123 TESTANDO";


    //Verificando o  ARRAY - FILES
    //print_r($_FILES);
    // $arquivo = $_FILES['foto'];
    // if($arquivo['error']) die ("Falha ao enviar a foto");
    // $pasta = './uploads/fotos/';
    // $nome_foto = $arquivo['name'];
    // $novo_nome = uniqid();
    // $extensao = strtolower(pathinfo($nome_foto, PATHINFO_EXTENSION));

    // if ($extensao != 'png' && $extensao != 'jpg' && $extensao != 'jfif') die ("Extensão do arquivo inválida");
    // $caminho = $pasta . $novo_nome . '.' .$extensao;
    // $foto = move_uploaded_file($arquivo['tmp_name'], $caminho);

    // echo $caminho;
    // echo "<br>".$foto;
    // print_r($nome_foto);
    // echo '<br>';
    // echo $novo_nome;
    // echo '<br>';
    // echo 'EXTENSÃO DO ARQUIVO: ' .$extensao;

    $objCat = new Categoria();
    $objCat->descricao = $desricao;
    $objCat->cor = $cor;
    $objCat->fone = $icone;
    // $objColab->foto = $caminho;

    // print_r($objCat);
    $res = $objCat->cadastrar();
    if($res){

        $response = array("status" => "OK");
        echo json_encode($response);
    }else{
        $response = array("status" => "ERROR");
        echo json_encode($response);
    }
