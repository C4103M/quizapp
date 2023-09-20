<?php
session_start();
$nome = $_SESSION['user_name'];
if (!isset($_SESSION["user_id"])) {
    header("Location:index.php?erro=2");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/config.css">
    <title>Configurações</title>
</head>

<body>
    <?php
    include('./includes/header.php');
    ?>
    <main>
        <div class="item" id="item1" onmousedown="clickCard(1)" onmouseup="soltCard(1)" onmouseenter="enterMouse(1)"onmouseout="sairCard(1)">
            <img src="img/altername.svg" alt="" class="icons">
            <img src="img/dark-mode/altername.svg" alt="" class="icons2">
            <p>Alterar Nome de Usuário</p>
        </div>
        <div class="item" id="item2" onmousedown="clickCard(2)" onmouseup="soltCard(2)" onmouseenter="enterMouse(2)"onmouseout="sairCard(2)">
            <img src="img/alteremail.svg" alt="" class="icons">
            <img src="img/dark-mode/alteremail.svg" alt="" class="icons2">
            <p>Alterar Email</p>
        </div>
        <div class="item" id="item3" onmousedown="clickCard(3)" onmouseup="soltCard(3)" onmouseenter="enterMouse(3)"onmouseout="sairCard(3)">
            <img src="img/altersenha.svg" alt="" class="icons">
            <img src="img/dark-mode/altersenha.svg" alt="" class="icons2">
            <p>Alterar Senha</p>
        </div>
        <div class="item" id="item4" onmousedown="clickCard(4)" onmouseup="soltCard(4)" onmouseenter="enterMouse(4)"onmouseout="sairCard(4)" onclick="abrirModal()">
            <img src="img/alterfoto.svg" alt="" class="icons">
            <img src="img/dark-mode/alterfoto.svg" alt="" class="icons2">
            <p>Alterar Foto de perfil</p>
        </div>
        <div class="item" id="item5" onmousedown="clickCard(5)" onmouseup="soltCard(5)" onmouseenter="enterMouse(5)"onmouseout="sairCard(5)">
            <img src="img/delete.svg" alt="" class="icons">
            <img src="img/dark-mode/delete.svg" alt="" class="icons2">
            <p>Deletar conta</p>
        </div>
        <div class="item admin" id="item6" onmousedown="clickCard(6)" onmouseup="soltCard(6)" onmouseenter="enterMouse(6)" onmouseout="sairCard(6)">
            <img src="img/delete.svg" alt="" class="icons">
            <img src="img/dark-mode/delete.svg" alt="" class="icons2">
            <p>Criar Quiz</p>
        </div>

    </main>
    <script>
        const divAdmin = document.querySelector('.admin')
    </script>
    <?php
    include('includes/modal.php');

    $privilegios = $_SESSION['permission'];
    if ($privilegios == 'admin') {
        print "<script> divAdmin.style.display = 'block' </script>";
    } else {
        print "<script> divAdmin.style.display = 'none' </script>";

    }


    ?>




    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script src="js/darkmode.js"></script>
    <script src="js/img.js"></script>
    <script src="js/config.js"></script>
</body>

</html>