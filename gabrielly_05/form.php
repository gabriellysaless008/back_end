<?php

include_once 'config.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        
        $nome = trim( $_POST['nome'] );
        $idade = $_POST['idade'];

            if( empty( $nome ) || empty ( $idade ) || !is_numeric( $idade ) ){
                echo "Dados inválidos";
                exit;

            }else{
                $idade = (int)$idade;


                $stmt = $conexao->prepare( "INSERT INTO usuarios ( nome, idade ) VALUES (?,?)" );
                $stmt->bind_param("si", $nome, $idade);

                    if( $stmt->execute( ) ){
                        echo "Cadastro realizado com sucesso!";

                    }else{
                        echo "Erro ao cadastrar: " . $stmt->error;
                    }

                    $stmt->close();
            }
                
}else{
        echo "Erro ao cadastrar";
}


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
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>