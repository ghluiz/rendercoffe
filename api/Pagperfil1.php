<?php
session_start();

if (!isset($_SESSION['nome']) || !isset($_SESSION['cpf'])) {
    header("Location: login.php");
    exit();
}

$nome = $_SESSION['nome'];
$cpf = $_SESSION['cpf'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas informações </title>
    <link rel="stylesheet" href="pagsperfis.css">
</head>
<body> 
    <div class="grid">
        <header class="header">
            <nav id="nav">
                <img src="" alt="">
                <h1 class = "titulo"> Meu Perfil</h1>
            </nav>
            <div class="botoes">
                <a href="Pagperfil1.html" class="botao-header"> Minhas informações</a>
                <a href="Pagperfil2.html" class="botao-header"> Histórico de vendas</a>
                <a href="Pagperfil3.html" class="botao-header">Gestão de estoque</a>
            </div>
        </header>
        <div class="perfil-box">
            <div class="foto-perfil" id="fotoPerfil">
                <form method="POST" enctype="multipart/form-data" id="formImagem">
                    <label for="novaImagem" style="display: block; width: 150px; height: 150px; border-radius: 50%; overflow: hidden; border: 3px solid #666; cursor: pointer;">
                        <img src="<?= $imagemSrc ?>" alt="Foto de perfil" style="width: 100%; height: 100%; object-fit: cover;">
                    </label>
                    <input type="file" name="novaImagem" id="novaImagem" accept="image/*" style="display: none;" onchange="document.getElementById('formImagem').submit();">
                </form>
            </div>

            <div class="info-horizontal">
                <div class="caixa-info" id="nomeUsuario"><?php echo $nome; ?></div>
                <div class="caixa-info" id="cpfUsuario"><?php echo $cpf; ?></div>
            </div>
        </div>
    </div>
   <script src="ativo.js"></script>
   <script src="inputfoto.js"></script>
</body>
</html>