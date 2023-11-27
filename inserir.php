<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    require 'banco.php';

    $sql = "INSERT INTO modal (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";

    $consulta = $conexao->prepare($sql);
    $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
    $consulta->bindParam(':email', $email, PDO::PARAM_STR);
    $consulta->bindParam(':mensagem', $mensagem, PDO::PARAM_STR);
    $consulta->execute();
    $linhas = $consulta->rowCount();

    echo $linhas;
?>
