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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Configurações</title>
</head>

<body>
    <header>
        <img src="img/seta.svg" alt="" id="item6" onmousedown="clickCard(6)" onmouseup="soltCard(6)" onmouseenter="enterMouse(6)" onmouseout="sairCard(6)">
    </header>
    <main class="itens">
        <div class="item" id="item1" onmousedown="clickCard(1)" onmouseup="soltCard(1)" onmouseenter="enterMouse(1)" onmouseout="sairCard(1)">
            <p>Alterar Nome de Usuário</p>
            <img src="img/altername.svg" alt="">
        </div>
        <div class="item" id="item2" onmousedown="clickCard(2)" onmouseup="soltCard(2)" onmouseenter="enterMouse(2)" onmouseout="sairCard(2)">
            <p>Alterar Email</p>
            <img src="img/alteremail.svg" alt="">
        </div>
        <div class="item" id="item3" onmousedown="clickCard(3)" onmouseup="soltCard(3)" onmouseenter="enterMouse(3)" onmouseout="sairCard(3)">
            <p>Alterar Senha</p>
            <img src="img/altersenha.svg" alt="">
        </div>
        <div class="item" id="item4" onmousedown="clickCard(4)" onmouseup="soltCard(4)" onmouseenter="enterMouse(4)" onmouseout="sairCard(4)" onclick="abrirModal()">
            <p>Alterar Foto de perfil</p>
            <img src="img/profile.svg" alt="">
        </div>
        <div class="item" id="item5" onmousedown="clickCard(5)" onmouseup="soltCard(5)" onmouseenter="enterMouse(5)" onmouseout="sairCard(5)">
            <p>Deletar conta</p>
            <img src="img/delete.svg" alt="" >
        </div>

    </main>
    <script>
        let isMouseDown = false;
        let startX;
        let scrollLeft;

        $(".itens").mousedown(function(e) {
            e.preventDefault();
            isMouseDown = true;
            startX = e.pageX - $(this).offset().left;
            scrollLeft = $(this).scrollLeft();
            $(this).css("cursor", "grabbing");
        });

        $(window).mouseup(function() {
            isMouseDown = false;
            $(".itens").css("cursor", "grab");
        });

        $(".itens").mousemove(function(e) {
            if (!isMouseDown) return;
            e.preventDefault();
            const x = e.pageX - $(".itens").offset().left;
            const walk = (x - startX) * 2; // Aumente ou diminua o valor '2' para controlar a velocidade do scroll horizontal
            $(".itens").scrollLeft(scrollLeft - walk);
        });
    </script>
    <?php
    include('includes/modal.php');
    ?>

    <script src="js/config.js"></script>
</body>

</html>