<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=">
    <link rel="stylesheet" type="text/css" href="../style.php" />
    <title> Produtos</title>
    </style>

</head>

<body>
   
    <form method="post" name="cliente" action="dbInsertProduct.php">
    <div class="box">
            <h1>ADICIONAR PRODUTOS</h1>
            <label>Nome</label>
            <input id="name" type="text" name="nproduto" maxlengt="150" placeholder="Nome Produto"></br>

            <label>Preço</label>
            <input id="price" type="text" name="preco" maxlengt="150" placeholder="Preço"></br>

            <label>Descrição</label>
            <input id="description" type="text" name="descricao" maxlengt="150" placeholder="Descrição"></br>


            <input class="botao" type="submit" name="add" value="Adicionar"><br>
            <a href="../cliente.php">Área de Cadastro</a>
        </div>
      
    </form>
    
   
</body>

</html>