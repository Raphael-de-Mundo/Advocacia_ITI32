<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="utf-8">
<!-- REFERÊNCIAS -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="shortcut icon" href="images/demo/balanca png.png" />
<script src="Mascara.js"></script>

<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="estilo.css" rel="stylesheet">

</head>
<body>
<?php
include "conexao_bd.php";

$Num_OAB = $_POST["txtNumOAB"];
$Nome_completo = $_POST["txtnomecompleto"];
$Email = $_POST["txtEmail"];
$CPF = $_POST["txtCPF"];

$sql = "INSERT INTO conta(Numero_AOB,Nome_completo,Email,CPF)";
$sql .= "VALUES ('$Num_OAB','$Nome_completo','$Email','$CPF')";

if (executarComando($sql))
{
    echo"<h1>Conta criada com sucesso</h1>";
}
else
{
    echo "<h1>Não foi possível criar a conta</h1>";
}
?>   
</body>
</html>
