<style>
    dialog {
        width: 600px;
        height: 400px;
        margin: auto auto;
        border-radius: 40px;
    }

    .ftperfilmodal {
        width: 80px;
        height: 80px;
        border-radius: 100%;
        border: 5px solid black;
        overflow: hidden;
        margin: 80px auto 10px auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    dialog>p {
        text-align: center;
        margin-bottom: 10px;
    }

    dialog>button {
        position: absolute;
        bottom: 20px;
        right: 20px;
    }

    .imgModal {
        width: 50px;
    }

    .formperfil {
        text-align: center;
    }
</style>

<dialog>
    <div class="ftperfilmodal" onclick="abrirModal()">
        <img src="img/camera.svg" id="fotoPerfil" alt="profile" class="imgModal">
    </div>
    <p>Trocar Foto de Perfil</p>
    <div class="formperfil">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo" required>
            <br><br>
            <input type="submit" name="enviar">
        </form>
    </div>

    <button onclick="fecharModal()">Fechar</button>
</dialog>

<script>
    var dialog = document.querySelector('dialog')

    function abrirModal() {
        dialog.showModal()
    }

    function fecharModal() {
        dialog.close()
    }
</script>

<?php
if (isset($_POST["enviar"])) {
    if ($_FILES['arquivo']['name']) {
        $arquivo_temporario = $_FILES["arquivo"]["tmp_name"];
        $arquivo = basename($_FILES['arquivo']['name']);
        $extensao = strrchr($arquivo, ".");
        $extensao = strtolower($extensao);
        $novoNome = md5(microtime()).$extensao;
        $destino = 'imagens/'. $novoNome;

        $img = $img;
        if (file_exists($img)) {
            unlink($img);
        } else {
            print 'arquivo não existe';
        }

        
        if (move_uploaded_file($arquivo_temporario, $destino)) {
            include_once('conexao.php');
            $con = conecta_mysql();
            
            $stmt = $con->prepare("UPDATE usuarios SET img = ? WHERE user_id = ?");
            $stmt->bind_param("si", $destino, $id);
            $resultado = $stmt->execute();

            if ($resultado) {
                echo "<script>alert('Imagem adicionada')</script>";
                echo "<script>window.location = 'home.php';</script>";
                $_SESSION['foto_perfil'] = $destino;
                exit;
            } else {
                echo "<script>alert('Imagem não adicionada')</script>";
            }
        } else {
            echo "Erro no upload da imagem";
        }
    } else {
        echo "Nenhuma imagem selecionada";
    }
}

?>