<?php 
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="projeto-pizza";


    $conexao=mysqli_connect($servidor,$usuario, $senha, $dbname);
    if(!$conexao){
        die("Houve um error: ".mysqli_connect_error());
    }
?>