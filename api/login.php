<?php
session_start();
require 'connection.php';
$cpf = $_POST['CPFLog'];//define as variavel de acordo com oq foi inserido no form
$senha = $_POST['senhaLog'];

$sql = "SELECT nome, cpf, senha, imagem_perfil FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'";
$result = $conectar->query($sql);

if ($result->num_rows === 1) { //ve o numero de resultados  é 1, o que indica que um usuário com o email fornecido foi encontrado
    $row = $result->fetch_assoc();
    
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['cpf'] = $cpf; // salva o CPF na sessão
        header("Location:paginaprincipal.php");//redireciona pra pagina de sucesso
        exit();//encerra a execuçao do script do pjp
    }else {
    echo "<script>alert('CPF ou senha incorretos!'); window.history.back();</script>";
}
?>


















?>