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
    <link rel="stylesheet" href="css/placar.css">
    <script src="js/pontua.js"></script>
    <link rel="icon" href="./img/brain.svg">
    <title>Placar</title>
</head>

<body>
    <?php
    include('./includes/header.php');
    include("includes/pontuacao.php");
    $exp = $_SESSION['user_xp'];
    print "<p id='exphp' style='display:none'>$exp</p>";
    print "<p id='imgphp' style='display:none;'>$img</p>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script src="./includes/modal.php"></script>
    <script src="js/calcnvl.js"></script>
    <script src="./js/darkmode.js"></script>
    <script src="js/img.js"></script>

</body>

</html>  