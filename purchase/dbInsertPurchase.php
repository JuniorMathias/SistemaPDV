<?php include_once "../config.php"; ?>

<?php
$date = $_POST['date'];
$clientId = $_POST['clientId'];
$productId = $_POST['productId'];

$queryInsert = "INSERT INTO tbPurchase(date,clientId,productId) VALUES ('$date ', '$clientId' , '$productId')";

if (mysqli_query($conn, $queryInsert)) {
  //  header("Location: formProduct.php");
} else {
    $exists = mysqli_query($conn, "select 1 from tbPurchase");
    if ($exists == FALSE) {   
        mysqli_query($conn,"CREATE TABLE tbPurchase(id INT AUTO_INCREMENT PRIMARY KEY,date TIMESTAMP NOT NULL,clientId INT NOT NULL, productId INT NOT NULL)");
        mysqli_query($conn, $queryInsert);
    } else {
        echo " Deu erro " . $queryInsert . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);



?>