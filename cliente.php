<?php include_once "config.php"; ?>

<?php
$conn =  mysqli_connect($servidor, $dbusuario, $dbsenha, $dbnome);
$result_nomes = "SELECT * FROM tbclientes";
$resultado_nomes = mysqli_query($conn, $result_nomes);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=">
    <link rel="stylesheet" type="text/css" href="style.php" />
    <title> Cadastro de Cliente</title>
</head>
<body>
    <div class="box">
        <form method="get" name="formbusca" action="busca.php">
        <h1>Clientes Cadastrados</h1>      
        <label>Pesquisar </label>
            <input type="text" name="busca">
            <input type="submit" name=" " value="Buscar">
             
        </form>
    </div>
    <br><br>
    <div class="box">
        <form method="post" name="cliente" action="dados.php">
        
                <h1>CADASTRO DO CLIENTE</h1>
                <label>Nome Completo</label>
                <input id="nome" type="text" name="nome" maxlengt="150" placeholder="Nome Completo" value="<?php echo $nome; ?>"></br>

                <label> Data de Nascimento</label>
                <input id="nascimento" type="date" name="nascimento"> </br>
                <input class="botao" type="submit" name="add" value="CADASTRAR">
               
            </div>  
            <br><br><br> <a href="index.php">VOLTAR</a>   
            
        </form>
</body>

</html>