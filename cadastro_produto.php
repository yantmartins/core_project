<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

   
            <div id="ibge">
                <button id="categoria" class="btn_cad">Cadastrar Produtos</button>
                <br><br>
            </div>
    </div>
    
    <form id="formulario" action="./actions/cad_prod.php" method="POST" enctype='multipart/form-data'>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome">
        <br>
        <input type="text" id="descricao" name="descricao" placeholder="Digite a descricao">
        <br>
        <input type="text" id="email" name="email" placeholder="Digite seu email">
        <br>
        <input type="text" id="tipo" name="tipo" placeholder="Digite o tipo">
        <br>
        <input type="number" id="preco" name="preco" placeholder="Digite o preco">
        <br>
        <input type="text" id="promo" name="promo" placeholder="Promo">
        <br>

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
    

    <!-- <script src="./js/quintou.js"></script> -->
</body>
</html>