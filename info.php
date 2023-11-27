<?php
session_start();
$nome = $_SESSION['user_name'];
$img = $_SESSION['foto_perfil'];
if (!isset($_SESSION["logado"])) {
    header("Location:index.php?erro=2");
}
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="stylesheet" href="./css/info.css">
    <link rel="icon" href="./img/brain.svg">
    <title>Informações</title>
</head>

<body>
    <?php include("includes/header.php"); ?>
    <main>
        <p>Olá amigo! Esse é o Quiz Info +. Esse projeto foi criado para fomentar o aprendizado à conteúdos de informática, e esperamos que faça bom uso dele. 
            Para qualquer sugestão, bug encontrado, ou interesse comercial, entre em contado com o email a seguir: ces2@aluno.ifnmg.edu.br , ou pelo formulário a baixo: 
        </p>
        <form action="https://formsubmit.co/ces2@aluno.ifnmg.edu.br" method="POST">
            <label for="name">Nome:</label>
            <input type="text" name="Nome" id="name" required>
            <label for="email">Email:</label>
            <input type="email" name="Email" id="email" required>
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" required></textarea>
            <button type="submit">Enviar</button>

            <input type="hidden" name="_next" value="./localhost/quizapp/config/obrigado.html">
        </form>
    </main>
    <?php
    include('includes/modal.php');
    $exp = $_SESSION['user_xp'];
    print "<p id='exphp' style='display:none'>$exp</p>";
    print "<p id='imgphp' style='display:none;'>$img</p>";
    ?>
    <script src="js/calcnvl.js"></script>
    <script src="js/img.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script src="./js/darkmode.js"></script>
</body>

</html>