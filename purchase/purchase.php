<?php include_once"config.php";?>

<?php
$date = date("Y/m/d");
$idProd = $_POST['id'];
$idCliente = $_POST['idCliente'];


$sql = "INSERT INTO tbPurchase(date,clientId,iproductId) VALUES ('$date','$idProd ', '$idCliente')" ; 

if (mysqli_query($conn, $sql)){
    header("Location: .php");
    
}else{
    echo " Deu erro " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>