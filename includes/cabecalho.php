<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Produtos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .container { width: 80%; margin: 0 auto; padding: 20px; }
        .lista { list-style-type: none; padding: 0; }
        .mensagem { padding: 10px; margin: 10px 0; }
        .sucesso { background-color: #dff0d8; color: #3c763d; }
        .erro { background-color: #f2dede; color: #a94442; }
        form { margin-top: 20px; }
        label { display: block; margin-top: 10px; }
        input, textarea, select { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px 15px; background-color: #337ab7; color: white; border: none; }
    </style>
</head>
<body>
<div class="container">
    <header>
        <h1>Sistema de Gerenciamento de Produtos</h1>
        <?php include 'menu.php'; ?>
    </header>