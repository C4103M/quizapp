<?php
session_start();
$nome = $_SESSION['user_name'];
$img = $_SESSION['foto_perfil'];
$id = $_SESSION['user_id'];
if (!isset($_SESSION["user_id"])) {
    header("Location:index.php?erro=2");
}
$event1 = 'onmousedown="clickCard(1)" onmouseup="soltCard(1)" onmouseenter="enterMouse(1)" onmouseout="sairCard(1)"';
$event2 = 'onmousedown="clickCard(2)" onmouseup="soltCard(2)" onmouseenter="enterMouse(2)" onmouseout="sairCard(2)"';
$event3 = 'onmousedown="clickCard(3)" onmouseup="soltCard(3)" onmouseenter="enterMouse(3)" onmouseout="sairCard(3)"';
$event4 = 'onmousedown="clickCard(4)" onmouseup="soltCard(4)" onmouseenter="enterMouse(4)" onmouseout="sairCard(4)"';
$event5 = 'onmousedown="clickCard(5)" onmouseup="soltCard(5)" onmouseenter="enterMouse(5)" onmouseout="sairCard(5)"';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>

<body>
    <?php
    include('./includes/header.php')
    ?>
    <main>
        <section class="grid-left">
            <div class="grid2" id="e1" <?php print $event1; ?>>
                <figure>
                    <img src="img/brain.svg" alt="brain" class="icons" <?php print $event1; ?>>
                    <img src="img/dark-mode/brain.svg" alt="brain" class="icons2" <?php print $event1; ?>>
                </figure>
                <p class="gridp" <?php print $event1; ?>>Iniciar Quiz</p>
            </div>
            <div class="grid3" id="e2" <?php print $event2; ?>>
                <figure>
                    <img src="img/dashboard.svg" alt="dashboard" class="icons" <?php print $event2; ?>>
                    <img src="img/dark-mode/dashboard.svg" alt="dashboard" class="icons2" <?php print $event2; ?>>
                </figure>
                <p class="gridp" <?php print $event2; ?>>Ranking</p>
            </div>
            <div class="grid4" id="e3" <?php print $event3; ?>>
                <figure>
                    <img src="img/info.svg" alt="info" class="icons" <?php print $event3; ?>>
                    <img src="img/dark-mode/info.svg" alt="info" class="icons2" <?php print $event3; ?>>
                </figure>
                <p class="gridp" <?php print $event3; ?>>Informações</p>

            </div>
            <div class="grid5" id="e4" <?php print $event4; ?>>
                <figure>
                    <img src="img/settings.svg" alt="settings" class="icons" <?php print $event4; ?>>
                    <img src="img/dark-mode/settings.svg" alt="settings" class="icons2" <?php print $event4; ?>>
                </figure>
                <p class="gridp" <?php print $event4; ?>>Configurações</p>
            </div>
        </section>
        <section class="sessao2">
            <figure class="ic-ca">
                <img src="./img/carlao.png" id="carlao" alt="">
            </figure>
        </section>
    </main>


    <?php
    include('includes/modal.php');
    $exp = $_SESSION['user_xp'];
    print "<p id='exphp' style='display:none'>$exp</p>";
    print "<p id='imgphp' style='display:none;'>$img</p>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script src="js/darkmode.js"></script>
    <script src="js/home.js"></script>
    <script src="js/calcnvl.js"></script>
    <script src="js/img.js"></script>
</body>

</html>