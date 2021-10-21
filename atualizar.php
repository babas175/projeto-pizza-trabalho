<?php
// including the database connection file
include_once("conexao.php");

if(isset($_POST['atualizar']))
{	
	
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
	$sobrenome = mysqli_real_escape_string($mysqli, $_POST['sobrenome']);
    $idade = mysqli_real_escape_string($mysqli, $_POST['idade']);
    $cpf = mysqli_real_escape_string($mysqli, $_POST['cpf']);	
    $telefone = mysqli_real_escape_string($mysqli, $_POST['telefone']);
    $endereco = mysqli_real_escape_string($mysqli, $_POST['endereco']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
	
	// checking vazio
	if(empty($nome) || empty($sobrenome) || empty($idade) || empty($cpf) || empty($telefone) || empty($endereco) || empty($email)) {	
			
		if(empty($nome)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($sobrenome)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($idade)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($cpf)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($telefone)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($endereco)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}					
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE cliente SET sobrenome='$sobrenome',email='$email',Idade='$idade',cpf='$cpf',telefone='$telefone',endereco='$endereco',email='$email' WHERE id=$nome");
		
		header("Location: CRUD_cliente.html");
	}
}