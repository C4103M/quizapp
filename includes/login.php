<?php 
if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"])) {

    // print('funfa');
    include_once("conexao.php");
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha = md5($senha);
    $con = conecta_mysql();
    $sql = "INSERT INTO usuarios (user_name,user_email,user_password) VALUES ('$nome','$email','$senha')";
    if (mysqli_query($con, $sql)) {
        $sql2 = "SELECT * FROM usuarios
    WHERE user_email = '$email'
    AND user_password = '$senha'";
        $resultado_sql = mysqli_query($con, $sql2);
        if ($resultado_sql) {
            $dados_usuario = mysqli_fetch_assoc($resultado_sql);
            if (isset($dados_usuario)) {
                $_SESSION['user_id'] = $dados_usuario["user_id"];
                $_SESSION['user_name'] = $dados_usuario["user_name"];
                $_SESSION['user_email'] = $dados_usuario["user_email"];
                $_SESSION['user_xp'] = $dados_usuario["user_xp"];
                $_SESSION['foto_perfil'] = $dados_usuario["img"];
                $_SESSION['permission'] = $dados_usuario["permission"];
                $_SESSION['logado'] = true;

                // Redireciona para a página home
                header("Location: home.php");
            } else {
                print "<script> alert('Email e senha incorreto'); </script>";
            }
        }

        print "<script>
				alert('Usuário Cadastrado')
				window.location.href= 'home.php';
				</script>";
    } else {
        print "<script>
				alert('Erro ao cadastrar')
				window.location.href= 'index.php';
				</script>";
    }
}

if (isset($_POST['email_entrar'])) {
    $email_entrar = $_POST['email_entrar'];
    $senha_entrar = $_POST['senha_entrar'];
    $senha_entrar = md5($senha_entrar);
    include "conexao.php";
    $con2 = conecta_mysql();
    $sql2 = "SELECT * FROM usuarios
    WHERE user_email = '$email_entrar'
    AND user_password = '$senha_entrar'";
    $resultado_sql = mysqli_query($con2, $sql2);
    if ($resultado_sql) {
        $dados_usuario = mysqli_fetch_assoc($resultado_sql);
        if (isset($dados_usuario)) {
            $_SESSION['user_id'] = $dados_usuario["user_id"];
            $_SESSION['user_name'] = $dados_usuario["user_name"];
            $_SESSION['user_email'] = $dados_usuario["user_email"];
            $_SESSION['user_xp'] = $dados_usuario["user_xp"];
            $_SESSION['foto_perfil'] = $dados_usuario["img"];
            $_SESSION['permission'] = $dados_usuario["permission"];
            $_SESSION['logado'] = true;


            // Redireciona para a página home
            print "<script>window.location.href= 'home.php';</script>";
            exit(); // Certifique-se de sair do script após o redirecionamento
        } else {
            print "<script> alert('Email e senha incorreto'); </script>";
        }
    } else {
        print "<script> alert('Email e senha incorreto'); </script>";
    }
}
