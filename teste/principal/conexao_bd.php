<?php
// Conecta ao banco de dados
$servername = "localhost";
$username = "root";
$password = "061221";
$dbname = "projeto";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conectado com sucesso!";
?>
