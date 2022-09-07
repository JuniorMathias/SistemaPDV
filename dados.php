<?php include_once"config.php";?>

<?php
$nome = $_POST['nome'];
$dataNascimento = $_POST['nascimento'];


$sql = "INSERT INTO tbclientes(nome,dataNascimento) VALUES ('$nome ', '$dataNascimento')" ; 

if (mysqli_query($conn, $sql)){
    header("Location: cliente.php");
    
}else{
    echo " Deu erro " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>