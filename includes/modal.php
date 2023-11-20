<style>
    dialog {
        width: 80%;
        height: 70%;
        margin: auto auto;
        border-radius: 20px;
    }

    .ftperfilmodal {
        width: 280px;
        height: 280px;
        border-radius: 100%;
        border: 5px solid black;
        overflow: hidden;
        margin: 80px auto 10px auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .altFoto>p {
        text-align: center;
        margin-bottom: 10px;
    }

    dialog>button {
        position: absolute;
        bottom: 20px;
        right: 20px;
    }

    .imgModal {
        width: 100%;
    }

    .formperfil {
        text-align: center;
    }
    .altFoto {
        width: 50%;
        border: 1px solid black;

    }
    @media (max-width: 425px) {
        
        .ftperfilmodal {
            width: 100px;
            height: 100px;
        }
    }
</style>

<dialog>
    <section class="altFoto">

        <div class="ftperfilmodal" >
            <img src="<?php print $img;?>" id="fotoPerfil" alt="profile" class="imgModal">
        </div>
        <p>Trocar Foto de Perfil</p>
        <div class="formperfil">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="arquivo" required>
                <br><br>
                <input type="submit" name="enviar">
            </form>
        </div>
    </section>

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
                $_COOKIE['foto_perfil'] = $destino;
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