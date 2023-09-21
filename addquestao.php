<?php
session_start();
$nome = $_SESSION['user_name'];
if (!isset($_SESSION["user_id"]) or $_SESSION['permission'] != 'admin') {
    header("Location:index.php?erro=2");
}
?>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    :root {
        --main-background: #F8F8FF;
        --main-cor-texto: #222222;
        --main-border: #222222;
        --main-elementos: #1982C4;
        --main-neutro: #d9d9d9;
    }

    .dark-mode:root {
        --main-background: #222;
        --main-cor-texto: #F3F3F3;
        --main-border: #000;
        --main-elementos: #363636;
        --main-neutro: #d9d9d9;


    }

    main {
        /* width: 100vw; */
        /* height: 100vh; */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    textarea {
        background-color: var(--main-neutro);
        border: none;
        border-radius: 5px;
        margin: 5px;
    }

    .label-pergunta {
        margin: 50px 0;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .label-pergunta {
        margin: 20px 0;
    }

    .btn1 {
        width: 250px;
        height: 60px;
        border-radius: 15px;
        border: none;
        background-color: var(--main-elementos);
        margin: 20px 0;
        font-size: 12pt;

    }

    .btn2 {
        width: 60px;
        height: 60px;
        border-radius: 100%;
        padding: 5px;
        margin: 20px 0;
        border: none;
        background-color: blue;
    }

    #more {
        width: 40px;
    }

    .labes {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .finalform {
        display: flex;
        justify-content: space-between;
    }

    select {
        width: 180px;
    }
</style>
<main>
    <form action="" method="POST">
        <div class="pai">
            <div class="pergunta">
                <label for="pergunta1" class="label-pergunta">Pergunta 1</label>
                <textarea name="pergunta[]" id="pergunta1" cols="50" rows="5"></textarea>

                <label for="alternativa_a1" class="label-pergunta">Alternativa A</label>
                <textarea name="alternativa_a[]" id="alternativa_a1" cols="50" rows="5"></textarea>

                <label for="alternativa_b1" class="label-pergunta">Alternativa B</label>
                <textarea name="alternativa_b[]" id="alternativa_b1" cols="50" rows="5"></textarea>

                <label for="alternativa_c1" class="label-pergunta">Alternativa C</label>
                <textarea name="alternativa_c[]" id="alternativa_c1" cols="50" rows="5"></textarea>

                <label for="alternativa_d1" class="label-pergunta">Alternativa D</label>
                <textarea name="alternativa_d[]" id="alternativa_d1" cols="50" rows="5"></textarea>

                <div class="labes">
                    <div>
                        <label for="area-conhecimento1" class="label-pergunta">Área de conhecimento</label>
                        <select name="area_conhecimento[]" id="area-conhecimento1">
                            <option value="programacao">Programação</option>
                            <option value="hardware">Hardware</option>
                            <option value="sistemas_operacionais">Sistemas Operacionais</option>
                            <option value="estilizacao">Estilização</option>
                            <option value="banco_de_dados">Banco de dados</option>
                        </select>
                    </div>
                    <div>
                        <label for="alternativa_correta1" class="label-pergunta">Alternativa correta</label>
                        <select name="alternativa_correta[]" id="alternativa_correta1">
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="finalform">
            <button type="submit" class="btn1" name="enviar">Cadastrar perguntas</button>
            <button onclick="duplicarDiv()" type="button" class="btn2"><i><img src="./img/more.svg" alt=""
                        id="more"></i></button>
        </div>
    </form>
</main>


<script>
    const divpergunta = document.querySelector('.pergunta');
    const formpai = document.querySelector('.pai');
    function duplicarDiv() {
        console.log(divpergunta);
        var cloneDiv = divpergunta.cloneNode(true);
        formpai.appendChild(cloneDiv)
    } 
</script>

<?php
if (isset($_POST['enviar'])) {
    include('./includes/conexao.php');
    $conn = conecta_mysql();
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $perguntas = $_POST["pergunta"];
    $alternativas_a = $_POST["alternativa_a"];
    $alternativas_b = $_POST["alternativa_b"];
    $alternativas_c = $_POST["alternativa_c"];
    $alternativas_d = $_POST["alternativa_d"];
    $areas_conhecimento = $_POST["area_conhecimento"];
    $alternativas_corretas = $_POST["alternativa_correta"];



    for ($i = 0; $i < count($perguntas); $i++) {
        $pergunta = $perguntas[$i];
        $alternativa_a = $alternativas_a[$i];
        $alternativa_b = $alternativas_b[$i];
        $alternativa_c = $alternativas_c[$i];
        $alternativa_d = $alternativas_d[$i];
        $area_conhecimento = $areas_conhecimento[$i];
        $alternativa_correta = $alternativas_corretas[$i];

        // Execute a inserção no banco de dados
        $sql = "INSERT INTO questoes (pergunta, alternativa_a, alternativa_b, alternativa_c, alternativa_d, resposta_correta, area_conhecimento) 
                VALUES ('$pergunta', '$alternativa_a', '$alternativa_b', '$alternativa_c', '$alternativa_d', '$alternativa_correta','$area_conhecimento')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Pergunta inserida com sucesso!')</script>";
        } else {
            echo "Erro ao inserir pergunta: " . $conn->error;
        }
    }

    $conn->close();

}
?>