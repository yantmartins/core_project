<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="minhadiv">
        <h1 id="titulo">Cadastro de colaboradores</h1>
    </div>

    <div class="container">

            <div id="ibge">
                <button id="buscar" class="btn_buscar">Buscar Dados</button>
                <br><br>
            </div>

            <div id="ibge">
                <button id="categoria" class="btn_cad">Cadastrar Categoria</button>
                <br><br>
            </div>
    </div>
    
    

    <form id="formulario" method="POST" enctype='multipart/form-data'>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
        <br>

        <span id="texto"></span>
        <br>
        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">
        <br>
        <input type="text" id="email" name="email" placeholder="Digite seu email">
        <br>
        <input type="text" id="fone" name="fone" placeholder="Digite seu fone">
        <br>
        <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade">
        <br>

        <!-- <input type="file" id="foto" name="foto"> -->
        <!-- <br> -->

        <input type="reset" name="cancelar" id="cancelar" value="Cancelar">
        <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">
    </form>

    <dialog open id="modal" class="oculta">
        <form method="dialog" id="form_modal">
            <section>
                <p> Cadastrado com sucesso!!! </p>
            </section>
            <section>
            <button type="submit">OK</button>
            </section>    
        </form>
    </dialog>
    
    <?php include './modal_categoria.html';?>

    <!-- <script src="./js/script.js"></script> -->
    <!-- <script src="./js/script2.js"></script> -->
    <script src="./js/segundou.js"></script>
</body>
</html>