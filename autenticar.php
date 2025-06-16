<?php
session_start();
include 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    

    //echo $email;    echo $senha;

    $sql = "SELECT Id_user, nome, filme, tipo_de_sessao, preco ,cadeira ,horario ,idioma ,senha FROM cinemax WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_assoc($result);
        //senha que retorna do banco
        $senha2=$row['senha'];
        echo $senha;
        echo $senha2;
        
        if ($senha == $senha2) {
            $_SESSION['Id_user'] = $row['Id_user'];
            $_SESSION['filme'] = $row['filme'];
            $_SESSION['idioma'] = $row['idioma'];
            $_SESSION['tipo_de_sessao'] = $row['tipo_de_sessao'];
            $_SESSION['horario'] = $row['horario'];
            $_SESSION['cadeira'] = $row['cadeira'];
            $_SESSION['preco'] = $row['preco'];
            $_SESSION['nome'] = $row['nome'];
            header("Location: restrita.php");
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }


mysqli_close($conn);
?>