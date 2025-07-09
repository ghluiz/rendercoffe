<?php
require 'connection.php';
//isso aq ta pegando o que vc digita no form e passando pra uma variável

$nome = $_POST['userNome'];
$cpf = $_POST['userCPF'];
$senha = $_POST['userSenha'];
$senhacon = $_POST['userSenhaCon'];

// ta definindo uma string SQL para inserir um novo registro na minha tabela
$sql = "INSERT INTO usuarios (nome, cpf, senha) VALUES (?, ?, ?)";
$stmt = $conectar->prepare($sql);//isso ta preparando a consulta sql pra execução, o stmt é de statement

//isso aq vai verificar se a consulta falhou, se falhou o die encerra a execuçao
if ($stmt === false) {
    die('Erro na preparação da consulta: ' . $conectar->error);
}

// esse ssssss é de string
$stmt->bind_param("sss", $nome, $cpf, $senha);
//isso aqui vai associar as variaveis do php aos placeholders da consulta



if (empty($cpf) || empty($nome) ||empty($senha)) {
    echo "<script>alert('Todos os campos são obrigatórios!'); window.history.back();</script>";
    exit;//se algum campo nao tiver nada vai rodar um alert em javascript, esse "window.history.back()" é pra voltar dps do alert
}
 elseif( ($senha) !== ($senhacon)){
    echo "<script>alert('As senha não estão iguais!'); window.history.back();</script>";
    exit;//se algum campo nao tiver nada vai rodar um alert em javascript, esse "window.history.back()" é pra voltar dps do alert

 }
 elseif ($stmt->execute()) {// se tudo tiver preenchido, tenta executar a consulta
    echo "<script>alert('Cadastro realizado com sucesso!'); window.history.back();</script>";//alert se o cadastro deu certo
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

// fechar a declaração
$stmt->close();
?>