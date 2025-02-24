<?php
require './App/Entity/Colaboradores.php';

$colabs = new Colabora();
$colaboradores = $colabs->buscar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #foto_perfil{
            width: 30%;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <h1>Colaboradores</h1>

    <table border="1" collapse="collapse">
        <tr>
            <td>ID</td>
            <td>Foto</td>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Fone</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>

        <?php
            foreach($colaboradores as $colaborador){
            echo '
            <tr>
                <td> '. $colaborador->id_colab .' </td>
                <td> <img id="foto_perfil" src="' . $colaborador->foto . '"> </td>
                <td> '. $colaborador->nome .' </td>
                <td> '. $colaborador->email .' </td>
                <td> '. $colaborador->fone .' </td>
                <td> <a href="./editar_colab.php?id=" '. $colaborador->id_colab . '"> Editar </a> </td>
                <td> <a href="./excluir_colab.php?id=" '. $colaborador->id_colab . '"> Excluir </a> </td>
            </tr>
            ';
            }
        ?>
    </table>
</body>
</html>