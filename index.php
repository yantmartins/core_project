<?php
require './App/Entity/Colaboradores.php';

if(isset($_POST['cadastrar'])){
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];

    //Verificando o  ARRAY - FILES
    //print_r($_FILES);
    $arquivo = $_FILES['foto'];
    if($arquivo['error']) die ("Falha ao enviar a foto");
    $pasta = './uploads/fotos/';
    $nome_foto = $arquivo['name'];
    $novo_nome = uniqid();
    $extensao = strtolower(pathinfo($nome_foto, PATHINFO_EXTENSION));

    if ($extensao != 'png' && $extensao != 'jpg') die ("Extensão do arquivo inválida");
    $caminho = $pasta . $novo_nome . '.' .$extensao;
    $foto = move_uploaded_file($arquivo['tmp_name'], $caminho);

    echo $caminho;
    echo "<br>".$foto;
    // print_r($nome_foto);
    // echo '<br>';
    // echo $novo_nome;
    // echo '<br>';
    // echo 'EXTENSÃO DO ARQUIVO: ' .$extensao;


    $objColab = new Colabora();
    $objColab->nome = $nome;
    $objColab->email = $email;
    $objColab->fone = $fone;
    $objColab->foto = $caminho;

    print_r($objColab);
    $res = $objColab->cadastrar();
    if($res){
        echo '<script> alert("Cadastrado com sucesso!")</script>';
    }else{
        echo '<script> alert("ERROR")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de colaboradores</h1>
    <form method="POST" enctype='multipart/form-data'>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
        <br>
        <input type="text" id="email" name="email" placeholder="Digite seu email">
        <br>
        <input type="text" id="fone" name="fone" placeholder="Digite seu fone">
        <br>
        <input type="file" id="foto" name="foto">
        <br>
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
</body>
</html>