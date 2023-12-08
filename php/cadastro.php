<?php
include 'conexao.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $renda = $_POST["renda"];
    $endereco = $_POST["endereco"];

    $sql = "INSERT INTO cliente (nome, numeroTelefone, rendabruta, endereco) VALUES ('$nome', '$telefone', '$renda', '$endereco')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }
  
    
} else {
    header("Location: /pages/formulario.php");
    exit();
}
?>