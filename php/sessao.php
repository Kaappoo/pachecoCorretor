<?php
include 'conexao.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM corretor WHERE login = '$username' AND senha = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ../pages/clientes.php"); 
} else {
    echo "Login falhou. Verifique suas credenciais.";
}

$conn->close();
?>