<?php

require '..\conexao_bd.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

// Verifica se o e-mail já está cadastrado
$sql_verifica_email = "SELECT * FROM usuario WHERE email = '$email'";
$resultado_verifica_email = mysqli_query($link, $sql_verifica_email);

if (mysqli_num_rows($resultado_verifica_email) > 0) {
    // Exibe mensagem de erro e impede o cadastro
    echo "O e-mail informado já está cadastrado. Por favor, escolha outro e-mail.";
    header('Location: ..\criar_login.html');
} else {
    // Insere os dados do usuário no banco de dados
    $sql_insere_usuario = "INSERT INTO usuario (nome, email,matricula, senha) VALUES ('$nome', '$email',$matricula, '$senha')";
    mysqli_query($link, $sql_insere_usuario);

    // Exibe mensagem de confirmação
    
    setcookie('mensagem', 'Usuário cadastrado com sucesso', time() + 3600); // o cookie irá expirar após 1 hora
     header('Location:..\login\login.html');
}

// Fecha a conexão com o banco de dados

?>

