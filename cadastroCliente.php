<?php

    include("conexao.php");

    $nome =$_POST['nome'];
    $sobrenome =$_POST['sobrenome'];
    $idade =$_POST['idade'];
    $cpf =$_POST['cpf'];
    $telefone =$_POST['telefone'];
    $endereco =$_POST['endereco'];
    $email =$_POST['email'];
    $sexo =$_POST['sexo'];
    $senha =$_POST['senha'];
    $senha2 =$_POST['senha2'];
    $bairro =$_POST['bairro'];
    



    $sql=" INSERT INTO cliente (Nome, sobrenome, Idade, cpf, telefone, endereco, email, sexo, senha, senha2, bairro) 
            VALUES ('$nome', '$sobrenome', '$idade', '$cpf', '$telefone', '$endereco', '$email', '$sexo', '$senha', '$senha2','$bairro')";


    if(mysqli_query($conexao, $sql)){
        echo "Usuario cadastrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error();
    }
    mysqli_close($conexao);


   

?>


