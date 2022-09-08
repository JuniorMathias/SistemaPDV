<?php include_once "config.php"; ?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=">
    <link rel="stylesheet" type="text/css" href="style.php" />
    <title> Cadastro de Cliente</title>
</head>
<body>

    <br><br>
    <div class="box">
        <form method="post" name="cliente" action="dados.php">
        
                <h1>ÁREA DE CADASTRO</h1>
                <label>Nome Completo</label>
                <input id="nome" type="text" name="nome" maxlengt="150" placeholder="Nome Completo" value="<?php echo $nome; ?>"></br>

                <label> Data de Nascimento</label>
                <input id="nascimento" type="date" name="nascimento"> </br>
                <input class="botao" type="submit" name="add" value="CADASTRAR"><br>
              
               
            </div> 

            <div class="box"> <h1>CLIENTES CADASTRADOS</h1> <?php include_once "busca.php"; ?> </div> 
            <br><br><br> <a href="index.php">INICIO</a>   
             <a href="products/formProduct.php">CADASTRAR PRODUTOS</a> 
            
        </form>
</body>

</html>
