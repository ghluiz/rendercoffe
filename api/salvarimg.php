<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli("mysql-sistemacafe.alwaysdata.net", "408159", "pdvcafeteria", "sistemacafe_pdv");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['novaImagem']) && $_FILES['novaImagem']['error'] === 0) {
    $imagem = file_get_contents($_FILES['novaImagem']['tmp_name']);
    $base64 = base64_encode($imagem);
    $stmt = $conn->prepare("UPDATE usuarios SET imagem_perfil = ? WHERE id = 1");
    $stmt->bind_param("s", $base64);
    $stmt->execute();
    $stmt->close();

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$imagemSrc = 'imagens/perfil-padrao.png';
$result = $conn->query("SELECT imagem_perfil FROM usuarios WHERE id = 1");
if ($result && $dados = $result->fetch_assoc()) {
    if (!empty($dados['imagem_perfil'])) {
        $imagemSrc = 'data:image/jpeg;base64,' . $dados['imagem_perfil'];
    }
}
$conn->close();
?>