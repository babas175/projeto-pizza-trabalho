<?php
// Conexao
require_once 'conexao.php';
session_start();
// Botao enviar 
if(isset($_POST['entrar'])):
    $erros = array();
    $Id_administrador = mysqli_escape_string($conexao, $_POST['Id_administrador']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);

    if(empty($Id_administrador) or empty($senha)):
        $erros[] = "<li> O campo email / senha precisa ser preenchido <li>";
    else:
        $sql= "SELECT * FROM usuario_adm WHERE Id_administrador='$Id_administrador' AND senha ='$senha' ";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0):
        $sql= "SELECT * FROM usuario_adm WHERE Id_administrador='$Id_administrador' AND senha ='$senha' ";
        $resultado = mysqli_query($conexao, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    $_SESSION['logado']= true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: CRUD_cliente.html');
               
                else:
                    $erros[] ="<li> Usuario e senha nao conferem </li>";
                endif;

        else:
            $erros[] ="<li> Usuario inexistente </li>";
        endif;

    endif;

endif;



if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
endif;

?>