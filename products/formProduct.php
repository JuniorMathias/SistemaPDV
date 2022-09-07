<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Produtos</title>
    <style>form {
    width: 60%;
} </style>

</head>

<body>

    <form method="get" name="formbusca" action="dbListProducts.php">
        <label>Pesquisa</label>
        <input type="text" name="busca">
        <input type="submit" name=" " value="ok">
    </form>
    <br><br>

    <form method="post" name="cliente" action="dbInsertProduct.php">
        <div class="field">
            <h1>PRODUTO</h1>
            <label>Nome</label>
            <input id="name" type="text" name="nproduto" maxlengt="150" placeholder="Nome Produto"></br>

            <label>Preço</label>
            <input id="price" type="text" name="preco" maxlengt="150" placeholder="Preço"></br>

            <label>Descrição</label>
            <input id="description" type="text" name="descricao" maxlengt="150" placeholder="Descrição"></br>


            <input class="botao" type="submit" name="add" value="comprar">
        </div>
    </form>



</body>

</html>