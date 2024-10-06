<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Orçamento</title>
</head>
<body>
<?php
include "conexao_bd.php";

$CPF=$_POST["txtCPF"];
$Nome_completo=$_POST["txtnomecompleto"];
$Email=$_POST["txtEmail"];
$Telefone=$_POST["txtelefone"];
$Turno=$_POST["txturno"];
$Vara_processual=$_POST["txtvara"];
$Descricao=$_POST["txtdescricao"];

$sql="INSERT INTO orcamento(CPF,Nome_completo,Email,Telefone,Turno_contato,Vara_processual,Descricao)";
$sql.="VALUES ('$CPF','$Nome_completo','$Email','$Telefone','$Turno','$Vara_processual','$Descricao')";

if (executarComando($sql))
{
    echo"<h1>Orçamento lançado com sucesso</h1>";
}
else
{
    echo "<h1>Não foi possível lançar o orçamento</h1>";
}
?>  
</body>
</html>