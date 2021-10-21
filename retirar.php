<?php

include("conexao.php");


$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$idade = $_GET['idade'];
$cpf = $_GET['cpf'];
$telefone = $_GET['telefone'];
$endereco = $_GET['endereco'];
$email = $_GET['email'];
 

$result = mysqli_query($mysqli, "DELETE FROM cliente WHERE Nome=$nome, sobrenome=$sobrenome, Idade=$idade, cpf=$cpf, telefone=$telefone, endereco=$endereco, email=$email ");


header("Location: CRUD_cliente.php");
?>