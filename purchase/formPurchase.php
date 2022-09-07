<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> COMPRAS </title>
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
            <h1>COMPRAS</h1>
            <label>DATA</label>
            <input id="name" type="text" name="date" maxlengt="150" placeholder="Data Produto"></br>

            <label>Preço</label>
            <input id="price" type="text" name="clientId" maxlengt="150" placeholder="Cliente Id"></br>

            <label>Descrição</label>
            <input id="description" type="text" name="productId" maxlengt="150" placeholder="Pro"></br>


            <input class="botao" type="submit" name="add" value="Enviar">
        </div>
    </form>



</body>

</html>