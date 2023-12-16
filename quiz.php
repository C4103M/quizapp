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
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="icon" href="./img/brain.svg">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/quiz.css">
</head>

<body>
    <?php
    include('./includes/header.php')
        ?>


    <main>
        <section>
            <figure class="carlaobranco">
                <img src="./img/carlaoembranco.gif" id="carlao" alt="">
                <div class="p-pergunta">
                    <div class="divpergunta">
                        <p>
                            <span class="nq">Você será apresentado a uma série de questões de multipla escolha.</span><span class="enunciado"></span>
                        </p>
                        <br>
                    </div>
                </div>
            </figure>
        </section>
        <section class="pai-btn">
            <div class="exibir">
                <form>
                    <div class="divalternativa" id="divalternativaA" name="a">
                        <p class="m"><input type="radio" name="resposta" value="a" id="a" style="display:none;"> A -
                            <span class="la"></span>
                        </p>
                    </div>
                    <div class="divalternativa" id="divalternativaB">
                        <p class="m"><input type="radio" name="resposta" value="b" id="b" style="display:none;"> B -
                            <span class="lb"></span>
                        </p>
                    </div>
                    <div class="divalternativa" id="divalternativaC">
                        <p class="m"><input type="radio" name="resposta" value="c" id="c" style="display:none;"> C -
                            <span class="lc"></span>
                        </p>
                    </div>
                    <div class="divalternativa" id="divalternativaD">
                        <p class="m"><input type="radio" name="resposta" value="d" id="d" style="display:none;"> D -
                            <span class="ld"></span>
                        </p>
                    </div>
                    <button type="button" onclick="validar()" id="btn2" ><p id="val">Validar</p></button>
                </form>
            </div>
            <div class="btn-reiniciar">
                <button onclick="reiniciar()">Reiniciar</button>
                <button onclick="reiniciarArea()">Area Conhecimento</button>
            </div>
            <div class="opc">
                <figure class="balao2">
                    <img src="./img/balao2.svg" alt="" class="balon">
                </figure>
                <form action="">
                    <div class="opc1">
                        <input type="checkbox" name="check1" id="check1" value="programacao">
                        <label for="check1">Programação</label>
                    </div>
                    <div class="opc1">
                        <input type="checkbox" name="check2" id="check2" value="banco_de_dados">
                        <label for="check2">Banco de dados</label>
                    </div>
                    <div class="opc1">
                        <input type="checkbox" name="check3" id="check3" value="hardware">
                        <label for="check3">Hardware</label>
                    </div>
                    <div class="opc1">
                        <input type="checkbox" name="check4" id="check4" value="sistemas_operacionais">
                        <label for="check4">Sistemas Operacionais</label>
                    </div>
                    <div class="opc1">
                        <input type="checkbox" name="check5" id="check5" value="estilizacao">
                        <label for="check5">Estilização</label>
                    </div>
                </form>
            </div>
            <button onclick="proximaregra()" class="btn" id="btn3">Próximo</button>
            <button onclick="iniciar()" id="btn1" class="btn" type="button">Iniciar Quiz</button>
        </section>
    </main>
    <?php
    $exp = $_SESSION['user_xp'];
    print "<p id='exphp' style='display:none'>$exp</p>";
    print "<p id='imgphp' style='display:none;'>$img</p>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script src="js/darkmode.js"></script>
    <script src="js/quiz.js"></script>
    <script src="js/calcnvl.js"></script>
    <script src="js/img.js"></script>
</body>

</html> 