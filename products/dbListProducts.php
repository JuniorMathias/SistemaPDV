<?php include_once"../config.php"; ?>
<?php
$busca =$_GET['busca'];
$result_nomes = "SELECT * FROM tbproducts WHERE name like '%$busca%'";
$resultado = mysqli_query($conn, $result_nomes);
while($linha = mysqli_fetch_array($resultado)){
    echo $nome = $linha['name'];
    echo "<a href='clienteedit.php? id=" . $linha['id']. "'> Editar </a> | 
    <a href='deletar.php? id=" . $linha['id']. "'> Deletar </a>";
    echo '<br>';
}
?>