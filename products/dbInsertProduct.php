<?php include_once "../config.php"; ?>
<?php
$nomeProduto = $_POST['nproduto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$sql = "INSERT INTO tbproducts(name,description,price) VALUES ('$nomeProduto ', '$descricao' , '$preco' )";
if (mysqli_query($conn, $sql)) {
    header("Location: formProduct.php");
} else {
    $exists = mysqli_query($conn, "select 1 from tbproducts");
    if ($exists == FALSE) {   
     mysqli_query($conn,"CREATE TABLE tbproducts(id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL,price VARCHAR(5) NOT NULL, description VARCHAR(50) NOT NULL)");
     mysqli_query($conn, $sql);
    } else {
        echo " Deu erro " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>