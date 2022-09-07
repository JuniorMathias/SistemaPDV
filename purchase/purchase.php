<?php include_once "../config.php"; ?>

<?php
$date = date("Y/m/d");
$idProd = $_GET['id'];
$idCliente = $_GET['idCliente'];
$sql = "INSERT INTO tbPurchase(date) VALUES ('$date')";

mysqli_query($conn, $sql);

$idInserido = mysqli_insert_id($conn);

$sql1 = "INSERT INTO tbPurcharseItem(idPurchase,idProduct,idClient) VALUES ($idInserido, $idProd , $idCliente )";

mysqli_query($conn, $sql1);
?>
<?php
$conn =  mysqli_connect($servidor, $dbusuario, $dbsenha, $dbnome);
$result_nomes = "SELECT B.nome,C.name FROM tbPurcharseItem A LEFT JOIN tbclientes B ON A.idClient= B.id 
LEFT JOIN tbproducts C ON A.idProduct= C.id ";

$resultado_nomes = mysqli_query($conn, $result_nomes);

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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Cliente</th>
                <th scope="col">Produto</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($user_data = mysqli_fetch_assoc($resultado_nomes)) { ?>
                <tr>
                    <td> <?php echo $user_data['nome']; ?> </td>
                    <td> <?php echo $user_data['name']; ?> </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>



</body>

</html>