<?php
$nome = $_COOKIE['user_name'];
$id = $_COOKIE['user_id'];
$img = $_COOKIE['foto_perfil'];
if (!isset($_COOKIE["user_id"])) {
    header("Location:index.php?erro=2");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/brain.svg">
    <title>Document</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
        }

        main {
            margin: 50px 0;
        }

        main img {
            position: absolute;
            z-index: -1;
        }

        main div {
            margin: 30px;
        }

        div p {
            color: #f3f3f3;
        }

        form button {
            background-color: #1982C4;
        }
        @media (max-width: 425px) {
            main img {
                width: 300px;
                
            }
            main div {
            margin: 20px;
        }
            
        }
    </style>
</head>

<body>
    <main>
        <img src="../img/balao2.svg" alt="">
        <div>

            <form action="" method="post">
                <p>Olá <?php print $nome; ?>, Qual Será o seu novo email?</p>
                <input type="text" name="email" id="email" required>
                <p>Confirme sua senha</p>
                <input type="password" name="senha" id="senha" required>
                <button type="submit">Trocar Email</button>
            </form>
        </div>
    </main>
    <?php
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        include('../includes/conexao.php');
        $con = conecta_mysql();
        $sql1 = "SELECT * FROM usuarios WHERE user_id = $id";
        $sql2 = "UPDATE usuarios SET user_email = '$email' WHERE user_id = $id";
        $resultado_sql = mysqli_query($con, $sql1);
        if ($resultado_sql) {
            $dados_usuario = mysqli_fetch_assoc($resultado_sql);
                if ($dados_usuario['user_password'] == $senha) {
                    $resultado = mysqli_query($con, $sql2);
                    if($resultado) {
                        $_COOKIE['user_email'] = $email;
                        $nome = $_COOKIE['user_email'];
                        print "<script>alert('Email alterado com sucesso')</script>";
                    }
                }
        }
    }
    ?>

</body>

</html>