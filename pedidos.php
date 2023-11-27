<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $data = $_POST['dia'];

    require 'banco.php';

    $sql = "INSERT INTO orcamentos (nome, email, cidade, telefone, estado, endereco, dia) VALUES (:nome, :email, :cidade, :telefone, :estado, :endereco, :dia)";

    $consulta = $conexao->prepare($sql);
    $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
    $consulta->bindParam(':email', $email, PDO::PARAM_STR);
    $consulta->bindParam(':cidade', $cidade, PDO::PARAM_STR);
    $consulta->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $consulta->bindParam(':estado', $estado, PDO::PARAM_STR);
    $consulta->bindParam(':endereco', $endereco, PDO::PARAM_STR);
    $consulta->bindParam(':dia', $data, PDO::PARAM_STR);

    $consulta->execute();
    $linhas = $consulta->rowCount();

    echo $linhas;
?>

