<?php include_once "config.php"; ?>

<?php
$id = $_GET['id'];
$sql = "DELETE FROM tbclientes WHERE id='$id' ";

if (mysqli_query($conn, $sql)) {
    header("Location: cliente.php");
}else{
    echo 'Algo está errado';
}
?>