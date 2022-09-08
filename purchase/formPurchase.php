<?php include_once "../config.php"; ?>

<?php

$conn1 =  mysqli_connect($servidor, $dbusuario, $dbsenha, $dbnome);
$result_nomes1 = "SELECT * FROM tbclientes WHERE id=" . $_GET['id'];
$resultado_nomes1 = mysqli_query($conn1, $result_nomes1);
$user_data1 = mysqli_fetch_assoc($resultado_nomes1);

?>

<?php
$conn =  mysqli_connect($servidor, $dbusuario, $dbsenha, $dbnome);
$result_nomes = "SELECT * FROM tbproducts";

$resultado_nomes = mysqli_query($conn, $result_nomes);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=">
    <link rel="stylesheet" type="text/css" href="../style.php" />
    <title> COMPRAS </title>

</head>

<body>
<div class="box"><label>Seja Muito Bem Vindo(a) <?php echo $user_data1['nome']; ?></label></div>
<div class="box">
    <h1>LISTA DE PRODUTOS</h1> <br><br>

    

    <form method="post" name="" action="dbInsertPurchase.php">
        <table id="tb">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user_data = mysqli_fetch_assoc($resultado_nomes)) { ?>

                    <tr>
                        <td> <?php echo $user_data['name']; ?> </td>
                        <td> <?php echo $user_data['price']; ?> </td>
                        <td> <?php echo $user_data['description']; ?> </td>
                        <td>
                       <?php  echo "<a href='purchase.php? id=" . $user_data['id']. " & idCliente=".$_GET['id']."'> Comprar  </a>  "; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </form>
                    <a href="../cliente.php">Voltar Área Cliente</a>

                    </div>
</body>

</html>
