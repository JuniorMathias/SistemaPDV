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
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Cadastro de Cliente</title>
    <style>form {
    width: 60%;
} </style>

</head>

<body>

    <form method="get" name="formbusca" action="busca.php">
        <label>Pesquisa</label>
        <input type="text" name="busca">
        <input type="submit" name=" " value="ok">
    </form>
    <br><br>

    <form method="post" name="cliente" action="dados.php">
        <div class="field">
            <h1>CADASTRO DO CLIENTE</h1>
            <label>Nome Completo</label>
            <input id="nome" type="text" name="nome" maxlengt="150" placeholder="Nome Completo"
            value="<?php echo $nome ;?>"></br>

            <label> Data de Nascimento</label>
            <input id="nascimento" type="date" name="nascimento"> </br>


            <input class="botao" type="submit" name="add" value="ENVIAR">
        </div>
        <?php include_once "busca.php"; ?>
    </form>
    <a href="index.php">INICIO</a>



</body>

</html>