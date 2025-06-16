<?php
// Configuração do banco de dados
include 'conexao.php';


// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obter os dados do formulário
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $filme = mysqli_real_escape_string($conn, $_POST['filme']);
    $idioma = mysqli_real_escape_string($conn, $_POST['idioma']);
    $horario = mysqli_real_escape_string($conn, $_POST['horario']);
    $sessao = mysqli_real_escape_string($conn, $_POST['sessao']);
    $preco = mysqli_real_escape_string($conn, $_POST['preco']);
    $cadeira = mysqli_real_escape_string($conn, $_POST['cadeira']);
    
    // Criptografar a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO cinemax (`filme`, `horario`, `cadeira`, `tipo_de_sessao`, `idioma`, `Nome`, `preco`, `email`, `senha`) 
    VALUES ('$filme', '$horario', '$cadeira', '$sessao', '$idioma', '$nome', $preco, '$email', '$senha')";





    if (mysqli_query($conn, $sql)) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuário: " . mysqli_error($conn);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);
}
?>
