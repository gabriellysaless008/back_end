<?php

require_once '';


?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoas</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
     <form action="" method="POST">
        <h2 style="text-align: center; color: #333;">Formulário de Cadastro</h2>
        
    
        <label>Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label>Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>