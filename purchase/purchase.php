<?php include_once "../config.php"; ?>
<?php
$date = date("Y-m-d");
$idProd = $_GET['id'];
$idCliente = $_GET['idCliente'];
$sql = "INSERT INTO tbPurchase(date) VALUES ('$date')";
mysqli_query($conn, $sql);

$idInserido = mysqli_insert_id($conn);

$sql1 = "INSERT INTO tbPurcharseItem(idPurchase,idProduct,idClient,date) VALUES ($idInserido, $idProd , $idCliente,'$date')";

mysqli_query($conn, $sql1);
?>
<?php
$conn =  mysqli_connect($servidor, $dbusuario, $dbsenha, $dbnome);
$result_nomes = "SELECT B.nome,C.name,C.price FROM tbPurcharseItem A LEFT JOIN tbclientes B ON A.idClient= B.id 
LEFT JOIN tbproducts C ON A.idProduct= C.id WHERE A.idClient=" . $idCliente;

$resultado_nomes = mysqli_query($conn, $result_nomes);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=">
    <link rel="stylesheet" type="text/css" href="../style.php" />
    <title> Nota Fiscal</title>
    <style>

    </style>

</head>

<body>
    <div class="box">

        <h1>SUA NOTA FISCAL</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Data da Compra</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                ?>
                <?php while ($user_data = mysqli_fetch_assoc($resultado_nomes)) { ?>

                    <?php
                    $total = $total + $user_data['price'];
                    ?>
                    <tr>
                        <td> <?php echo $user_data['nome']; ?> </td>
                        <td> <?php echo $user_data['name']; ?> </td>
                        <td> <?php echo $user_data['price']; ?> </td>
                        <td> <?php echo $date; ?> </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td>TOTAL</td>
                    <td><?php echo $total ?></td>
                </tr>
            </tbody>
        </table><br>
        <a href="formPurchase.php?id=<?php echo $idCliente ?> " type="submit" value="Comprar Mais"> Comprar Mais</a>
    </div>


</body>

</html>