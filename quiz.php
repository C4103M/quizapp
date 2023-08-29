<?php
session_start();
$nome = $_SESSION['user_name'];
$img = $_SESSION['foto_perfil'];
if (!isset($_SESSION["user_id"])) {
    header("Location:index.php?erro=2");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div>
            <div class="titulo">
                Quiz Info
            </div>  
            <div class="container-bar" style="width:250px;">
                <img src="img/star.svg" alt="star">
                <div class="lvl"></div>
                <div class="barra">
                    <div class="progresso"></div>
                </div>
            </div>
        </div>
        <div class="profile">
            <img src="img/profile.svg" id="fotoPerfil" alt="profile">
            <p style="text-align: center;"><?php print $nome; ?></p>
        </div>

    </header><br><br>
    <section>
        <div class="inicialText">
            <p style="text-align: center;"> <strong>Bem Vindos(as) ao Quiz Info +</strong></p><br>
            <p>
                • Você será apresentado a uma série de perguntas de múltipla escolha, cada uma com quatro opções. <br>
            </p><br>
            <p>
                • Selecione a resposta correta dentro do tempo limite para acumular pontos. <br>
            </p><br>
            <p>
                • Respostas corretas aumentam sua pontuação, enquanto respostas erradas não resultam em penalidades. 
            </p><br>
        </div>
        <div class="exibir">
            <form>
                <p><span class="nq">1 - </span><span class="enunciado"></span></p><br>
                <p class="m"><input type="radio" name="resposta" value="a"> A - <span class="la"></span></p>
                <p class="m"><input type="radio" name="resposta" value="b"> B - <span class="lb"></span></p>
                <p class="m"><input type="radio" name="resposta" value="c"> C - <span class="lc"></span></p>
                <p class="m"><input type="radio" name="resposta" value="d"> D - <span class="ld"></span></p>
                <input type="button" onclick="validar()" id="btn2" value="Validar">
            </form>
        </div>
        <button onclick="iniciar()" id="btn">Iniciar Quiz</button>
    </section>
    <?php
    $exp = $_SESSION['user_xp'];
    print "<p id='exphp' style='display:none'>$exp</p>";
    print "<p id='imgphp' style='display:none;'>$img</p>";
    ?>

    <script src="js/script.js"></script>
    <script src="js/img.js"></script>
</body>

</html>