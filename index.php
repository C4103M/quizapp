<?php
if (isset($_GET["erro"])) {
    $erro = $_GET["erro"];
    if ($erro == 1) {
        echo "<script> alert('Faça o login novamente!'); </script>";
        print "";
    }
    if ($erro == 2) {
        echo "<script> alert('Faça o login novamente!'); </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <title>Login</title>
</head>

<body>
    <main>
        <section class="divwelcome">
            <section class="boasvindas">
                <div class="inicialpage">

                    <i class="imgbrain"><img src="./img/brain2.svg" alt=""></i>
                    <p class="txtboasvindas">
                    Bem-vindo ao nosso emocionante Quiz de Informática! Aqui, exploraremos desde programação até cibersegurança. 
                    Esteja preparado para desafios que expandirão seu domínio sobre o universo digital. 
                    Vamos começar essa jornada de conhecimento juntos! <span class="cliqueaqui" onclick="cadastrar()">Clique aqui</span> para criar sua contagratuitamente!
                    </p>
            </section>
            <div class="butonAnimar">
                <button class="btnlogin" type="submit" onclick="entrar()">Entrar</button>
            </div>
            </div>

            <div class="entrar">
                <div class="form1">

                    <span class="t1">Login</span>
                    <form action="" id="formLogin" method="post">
                        <div class="item">
                            <i><img src="./img/email.svg" alt=""></i>
                            <input type="email" placeholder="Email:" name="email_entrar" required>
                        </div>
                        <div class="item">
                            <i><img src="./img/cadeado.svg" alt=""></i>
                            <input type="password" placeholder="Senha:" name="senha_entrar" required>
                        </div>

                        <div class="item">
                            <p class="cadparagrafo">Não possui uma conta?<br> <span class="cliqueaqui" onclick="troca2()">Cadastre-se</span></p>
                            <button type="submit" id="ButonLogin" class="btn-enviar">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="form2">
                    <span class="t1">Cadastrar</span>
                    <form action="" id="formLogin" method="post">
                        <div class="item">
                            <i><img src="./img/altername.svg" alt=""></i>
                            <input type="text" placeholder="Nome de Usuário:" name="nome" required>
                        </div>
                        <div class="item">
                            <i><img src="./img/email.svg" alt=""></i>
                            <input type="email" placeholder="Email:" name="email" required>
                        </div>
                        <div class="item">
                            <i><img src="./img/cadeado.svg" alt=""></i>
                            <input type="password" placeholder="Senha:" name="senha" required>
                        </div>
                        <div class="item">
                            <i><img src="./img/cadeado.svg" alt=""></i>
                            <input type="text" placeholder="Confirmar Senha:">
                        </div>
                        <div class="item">
                            <p class="cadparagrafo">Já possui conta?<br> <span class="cliqueaqui" onclick="troca1()">Entrar</span></p>
                            <button type="submit" id="ButonLogin">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div class="divspan">
            <span class="span1">Quiz</span><br>
            <span class="span2">Info</span>
        </div>




    </main>









    <?php
    include('includes/login.php');
    ?>
    <script src="./js/login.js"></script>
</body>

</html>