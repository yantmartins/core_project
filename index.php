<?php

require './App/Entity/Colaboradores.php';

if(isset($_POST['cadastrar'])){
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];

    $objColab = new Colabora();
    $objColab->nome = $nome;
    $objColab->email = $email;
    $objColab->fone = $fone;

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
    <form method="post">
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
        <br>
        <input type="text" id="email" name="email" placeholder="Digite seu email">
        <br>
        <input type="text" id="fone" name="fone" placeholder="Digite seu fone">
        <br>
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
</body>
</html>