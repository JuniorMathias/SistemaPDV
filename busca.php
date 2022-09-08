<?php include_once"config.php"; ?>

<?php
$conn =  mysqli_connect($servidor, $dbusuario, $dbsenha, $dbnome);
$busca =$_GET['busca'];
$result_nomes = "SELECT * FROM tbclientes WHERE nome like '%$busca%'";
$resultado = mysqli_query($conn, $result_nomes)or die("<script type='text/javascript'>alert('Erro ao tentar fazer a consulta');javascript:window.location='consulta.php';</script>");;
while($linha = mysqli_fetch_array($resultado)){
    echo $nome = $linha['nome'];
    echo "
   
    <a href='purchase/formPurchase.php? id=" . $linha['id']. "'> Comprar </a>
    <a href='deletar.php? id=" . $linha['id']. "'> Deletar </a>";
    echo '<br>';

}
?>
<?php


