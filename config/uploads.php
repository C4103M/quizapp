<?php
session_start();
$nome = $_SESSION['user_name'];
$id = $_SESSION['user_id'];
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
    <link rel="stylesheet" href="style.css">
    <title>Uploads</title>
</head>
<body>    
    <div class="conteudo">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo" >
            <br><br>
            <input type="submit" name="enviar">
        </form>
    </div>
    <?php
        if (isset($_POST["enviar"])){
            if($_FILES['arquivo']['name']){
                 // Guardando o local temporario do arquivo em uma vaiavel
                $arquivo_temporario = $_FILES["arquivo"]["tmp_name"];
                $arquivo = basename($_FILES['arquivo']['name']);
                $extensao = strrchr($arquivo, ".");
                $extensao = strtolower($extensao);
                print $novoNome = md5(microtime()).$extensao;
                print "<br>";
                $destino = '../imagens/'. $novoNome;
                if (move_uploaded_file($arquivo_temporario, $destino)){ 
                    $imagem = $destino;
                    echo "<img src='$imagem' />";
                    include_once('../includes/conexao.php');
                    $con = conecta_mysql();
                    $sql = "UPDATE usuarios SET img = '$destino' WHERE user_id = $id";
                    $resultado = mysqli_query($con, $sql);
                    if ($resultado) {
                        print("<script>alert('Imagem adicionada')</script>");
                    } else {
                        print("<script>alert('Imagem não adicionada')</script>");

                    }



            
                }else{
                    echo "Erro no upload da imagem";
                } 
            }else{
                echo "Nenhuma imagem selecionada";
            }
        }
    ?>
    <script src="script.js"></script>
</body>
</html>                                                                 