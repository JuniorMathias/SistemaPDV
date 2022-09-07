<?php include_once"config.php"; ?>
<?php
$busca =$_GET['busca'];
$result_nomes = "SELECT * FROM tbclientes WHERE nome like '%$busca%'";
$resultado = mysqli_query($conn, $result_nomes);
while($linha = mysqli_fetch_array($resultado)){
    echo $nome = $linha['nome'];
    echo "
    <a href='purchase/formPurchase.php? id=" . $linha['id']. "'> Comprar </a> | 
    <a href='cliente.php? id=" . $linha['id']. "'> Editar </a> | 
    <a href='deletar.php? id=" . $linha['id']. "'> Deletar </a>";
    echo '<br>';
}
?>