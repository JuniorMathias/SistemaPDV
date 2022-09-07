<?php include_once "config.php"; ?>
<?php
$conn =  mysqli_connect($servidor, $dbusuario, $dbsenha, $dbnome);
$result_nomes = "SELECT count(A.idClient) AS qtd, B.nome, SUM(C.price) AS prices FROM tbPurcharseItem A LEFT JOIN tbclientes B ON A.idClient= B.id 
LEFT JOIN tbproducts C ON A.idProduct= C.id GROUP BY (A.idClient)ORDER BY count(A.idClient) desc";

$result_mes = "SELECT count(A.idClient) AS qtd, B.nome, SUM(C.price) AS prices FROM tbPurcharseItem A LEFT JOIN tbclientes B ON
 A.idClient= B.id LEFT JOIN tbproducts C ON A.idProduct= C.id  WHERE A.date = '" .date("Y-".$_GET['mes']."-d")." ' GROUP BY (A.idClient)ORDER BY count(A.idClient) desc";

if (isset($_GET['mes'])) {
    $resultado_nomes = mysqli_query($conn, $result_mes);
} else {
    $resultado_nomes = mysqli_query($conn, $result_nomes);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> Cadastro de Cliente</title>
    <style>
        form {
            width: 60%;
        }
    </style>
</head>

<body>

    <form method="get" name="cliente" action="index.php">

        <select name="mes">
            <option value="00">Escolha o mês</option>
            <option value="01">Janeiro</option>
            <option value="02">Fevereiro</option>
            <option value="03">Março</option>
            <option value="04">Abril</option>
            <option value="05">Maio</option>
            <option value="06">Junho</option>
            <option value="07">Julho</option>
            <option value="08">Agosto</option>
            <option value="09">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CLIENTE |</th>
                    <th scope="col">QUANTIDADE |</th>
                    <th scope="col">GASTOS MENSAL</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user_data = mysqli_fetch_assoc($resultado_nomes)) { ?>

                    <tr>
                        <td> <?php echo $user_data['nome']; ?> </td>
                        <td> <?php echo $user_data['qtd']; ?> </td>
                        <td> <?php echo $user_data['prices']; ?> </td>

                    </tr>
                <?php } ?>
            </tbody>
            <input type="submit" value="Pesquisar">

    </form>
    <a href="cliente.php">Área de Cadastro</a>
</body>

</html>