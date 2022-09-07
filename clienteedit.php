
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Cadastro de Cliente</title>

</head>

<body>

    <form method="get" name="formbusca" action="busca.php">
        <label>Pesquisa</label>
        <input type="text" name="busca">
        <input type="submit" name=" " value="ok">
    </form>
    <br><br>

    <form method="post" name="cliente" action="atualizar.php">
        <div class="field">
            <h1>ÁREA CLIENTE</h1>
            <label>Nome Completo</label>
            <input id="nome" type="text" name="nome" maxlengt="150" placeholder="Nome Completo"
            value="<?php echo $nome ;?>"></br>

            <label> Data de Nascimento</label>
            <input id="nascimento" type="date" name="nascimento"value="<?php echo $dataNascimento ;?>"> </br>

            <input class="botao" type="submit" name="add" value="Salvar">
        </div>
        <table class="table">
              

    </form>



</body>

</html>