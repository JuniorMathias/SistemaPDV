<?php include_once "../config.php"; ?>
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
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title> COMPRAS </title>
    <style>form {
    width: 60%;
} </style>

</head>

<body>

    <h1>LISTA DE PRODUTOS</h1>    <br><br>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Descrição</th>
      
    </tr>
  </thead>
  <tbody>
    <?php while($user_data = mysqli_fetch_assoc($resultado_nomes)){ ?>
   <tr>
    <td> <?php echo $user_data['name'];?>  </td>
    <td> <?php echo $user_data['price'];?>  </td>
    <td> <?php echo $user_data['description'];?>  </td>
    <td>
    <input type="submit" name=" " value="COMPRAR">
    </td>
   </tr>
   <?php } ?>
  </tbody>
  
</table>
    
    </form>



</body>

</html>