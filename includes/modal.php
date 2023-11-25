<style>
    dialog {
        width: 95%;
        height: 95%;
        margin: auto auto;
        border-radius: 40px;
        border: none;
        background-color: var(--main-background);

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

    dialog>p {
        text-align: center;
        margin-bottom: 10px;
    }

    dialog>button {
        position: absolute;
        top: 30px;
        right: 20px;
        background-color: transparent;
        border: none;
    }

    #enviar {
        background-color: transparent;
        border: none;
        width: 100px;
    }

    #enviar img {
        width: 100%;
    }

    .imgModal {
        width: 100%;
    }

    #chooseFile {
        font-size: 1rem;
        border: none;
    }

    .formperfil {
        text-align: center;
    }

    @media (max-width: 425px) {
        dialog {
            width: 300px;
            height: 400px;
        }

        .ftperfilmodal {
            width: 100px;
            height: 100px;
        }
    }
</style>

<dialog>
    <figure class="poweroff">
        <label class="switch">
            <input type="checkbox" id="check" onchange="changeMode()">
            <span class="slider">
                <img src="./img/sun.svg" alt="sun" class="sun">
                <img src="./img/moon.svg" alt="" class="moon">
            </span>
        </label>
        <div class="div-poweroff" onclick="sair()">
            <img src="./img/poweroff.svg" alt="">
        </div>
    </figure>
    <div class="ftperfilmodal">
        <img src="<?php print $img; ?>" id="fotoPerfil" alt="profile" class="imgModal">
    </div>
    <p>Trocar Foto de Perfil</p>
    <div class="formperfil">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo" id="chooseFile" required>
            <br><br>
            <button type="submit" name="enviar" id="enviar"><img src="./img/enviar.svg" alt=""></button>
        </form>
    </div>

    <button onclick="fecharModal()"><img src="./img/fechar.svg" alt=""></button>
</dialog>

<script>
    var dialog = document.querySelector('dialog')

    function abrirModal() {
        dialog.showModal()
    }

    function fecharModal() {
        dialog.close()
    }
    function sair() {
        window.location.href = "./config/logout.php";
    }
</script>

<?php
if (isset($_POST["enviar"])) {
    if ($_FILES['arquivo']['name']) {
        $arquivo_temporario = $_FILES["arquivo"]["tmp_name"];
        $arquivo = basename($_FILES['arquivo']['name']);
        $extensao = strrchr($arquivo, ".");
        $extensao = strtolower($extensao);
        $novoNome = md5(microtime()) . $extensao;
        $destino = 'imagens/' . $novoNome;

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