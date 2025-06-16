<?php

session_start();
if (!isset($_SESSION['Id_user'])) {
    header("Location: login.html");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid gray;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color:rgb(100, 100, 100);
            color: #f2f2f2;
        }

        

        /* Estilos para o botão */
        .logout-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #d32f2f;
            color: white;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: #9a1c1c;
        }

        /* Centralizando o botão */
        .button-container {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h2>

    <table>
        <tr>
            <th>Informação</th>
            <th>Detalhe</th>
        </tr>
        <tr>
            <td>Id do Cliente</td>
            <td><?php echo $_SESSION['Id_user']; ?></td>
        </tr>
        <tr>
            <td>Filme</td>
            <td><?php echo $_SESSION['filme']; ?></td>
        </tr>
        <tr>
            <td>Idioma</td>
            <td><?php echo $_SESSION['idioma']; ?></td>
        </tr>
        <tr>
            <td>Sessão</td>
            <td><?php echo $_SESSION['tipo_de_sessao']; ?></td>
        </tr>
        <tr>
            <td>Horário de Exibição</td>
            <td><?php echo $_SESSION['horario']; ?></td>
        </tr>
        <tr>
            <td>Cadeira</td>
            <td><?php echo $_SESSION['cadeira']; ?></td>
        </tr>
        <tr>
            <td>Valor a ser Pago</td>
            <td><?php echo $_SESSION['preco']; ?></td>
        </tr>
    </table>

    <!-- Container para centralizar o botão -->
    <div class="button-container">
        <a href="index.html" class="logout-button">Sair</a>
    </div>
</body>
</html>
