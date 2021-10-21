<?php
// Conexao
require_once 'conexao.php';
session_start();
// Botao enviar 
if(isset($_POST['consultar'])):
    $erros = array();
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);

    if(empty($nome) or empty($email)):
        $erros[] = "<li> O campo email / senha precisa ser preenchido <li>";
    else:
        $sql= "SELECT * FROM cliente WHERE Nome='$nome' AND email ='$email' ";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0):
        $sql= "SELECT * FROM cliente WHERE Nome='$nome' AND email ='$email' ";
        $resultado = mysqli_query($conexao, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    $_SESSION['logado']= true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: CRUD_cliente.html');
               
                else:
                    $erros[] ="<li> Nome e email nao conferem </li>";
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