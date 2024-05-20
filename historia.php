<?php

// Inicia a sessão (se já não estiver iniciada)
session_start();

// Inclui o arquivo da barra de navegação
include 'barra_navegacao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História</title>
    <!-- Incluir CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS personalizado -->
    <style>
        .content {
            text-align: center;
            padding: 50px 0;
        }
    </style>
</head>
<body>

    <!-- Cabeçalho -->
    <header class="jumbotron">
    <div class="container">
        <h1>História</h1>
        <p>História</p>
    </div>
    </header>

    <!-- Conteúdo principal -->
    <div class="container content">
        <h2>Seção Principal</h2>
        <p>Este é o conteúdo principal do seu site. Você pode adicionar mais seções aqui.</p>
        
    </div>

    <!-- Rodapé -->
    <?php include 'rodape.php'; ?>

    <!-- Incluir JavaScript do Bootstrap (se necessário) -->
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
