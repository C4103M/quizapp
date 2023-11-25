<?php
session_start();
$nome = $_SESSION['user_name'];
$img = $_SESSION['foto_perfil'];
if (!isset($_SESSION["logado"])) {
    header("Location:index.php?erro=2");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/config.css">
    <link rel="icon" href="./img/brain.svg">
    <title>Configurações</title>
</head>

<body>
    <?php
    include('./includes/header.php');
    ?>
    <main>
        <div class="item" id="item1" onmousedown="clickCard(1)" onmouseup="soltCard(1)" onmouseenter="enterMouse(1)"onmouseout="sairCard(1)">
            <img src="img/lapis-papel.svg" alt="" class="icons">
            <p>Alterar Nome de Usuário</p>
        </div>
        <div class="item" id="item2" onmousedown="clickCard(2)" onmouseup="soltCard(2)" onmouseenter="enterMouse(2)"onmouseout="sairCard(2)">
            <img src="img/envelope.svg" alt="" class="icons">
            <p>Alterar Email</p>
        </div>
        <div class="item" id="item3" onmousedown="clickCard(3)" onmouseup="soltCard(3)" onmouseenter="enterMouse(3)"onmouseout="sairCard(3)">
            <img src="img/cadeado.svg" alt="" class="icons">
            <p>Alterar Senha</p>
        </div>
        <div class="item" id="item4" onmousedown="clickCard(4)" onmouseup="soltCard(4)" onmouseenter="enterMouse(4)"onmouseout="sairCard(4)" onclick="abrirModal()">
            <img src="img/retrato.svg" alt="" class="icons">
            <p>Alterar Foto de perfil</p>
        </div>
        <div class="item admin" id="item6" onmousedown="clickCard(6)" onmouseup="soltCard(6)" onmouseenter="enterMouse(6)" onmouseout="sairCard(6)">
            <img src="img/add.svg" alt="" class="icons">
            <p>Adicionar Questão</p>
        </div>
        <div class="item" id="item7" onmousedown="clickCard(7)" onmouseup="soltCard(7)" onmouseenter="enterMouse(7)" onmouseout="sairCard(7)">
            <img src="img/morcegos.svg" alt="" class="icons">
            <p>Alterar Tema</p>
        </div>
        <div class="item" id="item8" onmousedown="clickCard(8)" onmouseup="soltCard(8)" onmouseenter="enterMouse(8)"onmouseout="sairCard(8)">
            <img src="img/porta-saida.svg" alt="" class="icons">
            <p>Sair</p>
        </div>
        <div class="item" id="item5" onmousedown="clickCard(5)" onmouseup="soltCard(5)" onmouseenter="enterMouse(5)"onmouseout="sairCard(5)">
            <img src="img/trash.svg" alt="" class="icons">
            <p>Deletar conta</p>
        </div> 

    </main>
    <script>
        const divAdmin = document.querySelector('.admin')
    </script>
    <?php
    include('includes/modal.php');
    $exp = $_SESSION['user_xp'];
    print "<p id='exphp' style='display:none'>$exp</p>";
    print "<p id='imgphp' style='display:none;'>$img</p>";

    $privilegios = $_SESSION['permission'];
    if ($privilegios == 'admin') {
        print "<script> divAdmin.style.display = 'flex' </script>";
    } else {
        print "<script> divAdmin.style.display = 'none' </script>";
 
    }


    ?>




    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script src="js/darkmode.js"></script>
    <script src="js/img.js"></script>
    <script src="js/calcnvl.js"></script>
    <script src="js/config.js"></script>
</body>

</html>