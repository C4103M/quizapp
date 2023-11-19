<?php
session_start();
$nome = $_SESSION['user_name'];
$id = $_SESSION['user_id'];
$img = $_SESSION['foto_perfil'];
if (!isset($_SESSION["user_id"])) {
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
                <label for="confirmacao">Tem certeza que deseja excluir sua conta? (Digite sim)</label><br><br>
                <input type="text" id="confirmacao" name="confirmacao">
                <button type="submit">Deletar conta</button>
            </form>
        </div>
    </main>

    <?php

    
    if (isset($_POST['confirmacao']) && $_POST['confirmacao'] == 'sim') {
        include('..//includes/conexao.php');
        $con = conecta_mysql();
        $sql = "DELETE FROM `usuarios` WHERE user_id = $id";
        $resultado = mysqli_query($con, $sql);
        if ($resultado) {
            if ($img) {
                $imgdel = unlink("..//$img");
            }
            print "<script>alert('Conta Deletada com Sucesso!')</script>";



            header("Location:..//index.php");
        } else {
            print "<script>alert('Erro interno no servidor. Relate ao nosso suporte.')</script>";
        }
    }
    ?>


</body>
</html>
