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
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Colaboradores</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Fone</td>
        </tr>

        <?php
            foreach($colaboradores as $colaborador){
            echo '
            <tr>
                <td> '. $colaborador->id_colab .' </td>
                <td> '. $colaborador->nome .' </td>
                <td> '. $colaborador->email .' </td>
                <td> '. $colaborador->fone .' </td>
            </tr>
            ';
            }
        ?>
    </table>
</body>
</html>