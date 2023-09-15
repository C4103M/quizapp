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
    <link rel="stylesheet" href="css/quiz.css">
</head>

<body>
    <header>
        <div class="grid1">
            <div class="div-foto">
                <div class="profile">
                    <div class="ftperfil" onclick="abrirModal()">
                        <img src="img/profile.svg" id="fotoPerfil" alt="profile">
                    </div>
                    <p style="text-align: center; font-size:18pt;"></p>
                </div>
                <div class="titulo">
                    <?php print $nome; ?>
                </div>
            </div>
            <img src="img/medal.svg" alt="medalha" id="medalha">
            <div class="div-progresso">
                <div class="lvl"> <span style="font-size: 0.9rem;"> Nivel</span> </div>
                <div class="barra">
                    <div class="progresso"></div>
                </div>
            </div>
        </div>
    </header>


    <main>
        <section>
            <figure class="carlaobranco">
                <img src="./img/carlaoembranco.png" alt="">
                <div class="p-pergunta">
                    <div class="divpergunta">
                        <p><span class="nq">Você será apresentado a uma série de questões de multipla escolha. </span><span class="enunciado"></span></p><br>
                    </div>
                </div>
            </figure>
        </section>
        <section class="pai-btn">
            <div class="exibir">
                <form>
                    <div class="divalternativa" id="divalternativaA" name="a">
                        <p class="m"><input type="radio" name="resposta" value="a" id="a" style="display:none;"> A - <span class="la"></span></p>
                    </div>
                    <div class="divalternativa" id="divalternativaB">
                        <p class="m"><input type="radio" name="resposta" value="b" id="b" style="display:none;"> B - <span class="lb"></span></p>
                    </div>
                    <div class="divalternativa" id="divalternativaC">
                        <p class="m"><input type="radio" name="resposta" value="c" id="c" style="display:none;"> C - <span class="lc"></span></p>
                    </div>
                    <div class="divalternativa" id="divalternativaD">
                        <p class="m"><input type="radio" name="resposta" value="d" id="d" style="display:none;"> D - <span class="ld"></span></p>
                    </div>
                    <input type="button" onclick="validar()" id="btn2" value="Validar">
                </form>
            </div>
            <button onclick="proximaregra()" class="btn" id="btn3">Próximo</button>
            <button onclick="iniciar()" id="btn1" class="btn">Iniciar Quiz</button>
        </section>
    </main>
    <?php
    $exp = $_SESSION['user_xp'];
    print "<p id='exphp' style='display:none'>$exp</p>";
    print "<p id='imgphp' style='display:none;'>$img</p>";
    ?>

    <script src="js/quiz.js"></script>
    <script src="js/calcnvl.js"></script>
    <script src="js/img.js"></script>
</body>

</html>