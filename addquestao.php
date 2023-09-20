<style>
    main {
        /* width: 100vw; */
        /* height: 100vh; */
        display: flex;
        justify-content: center;
    }

    .txt1 {}

    .label-pergunta {
        margin: 50px 0;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .label-pergunta {
        margin: 0 0 20px 0;
    }

    button {
        width: 150px;
        border-radius: 30px;
        padding: 5px;
        margin-top: 20px;
        position: absolute;
        right: 0;
        /* bottom: -50; */
        border: none;
    }
</style>
<main>
    <form action="">
        <div class="pergunta">

            <label for="pergunta" class="label-pergunta">Qual pergunta deseja adicionar?</label>
            <textarea name="pergunta" id="txt1" cols="50" rows="5"></textarea>

            <label for="alternativa_a" class="label-pergunta">Alternativa A</label>
            <textarea name="alternativa_a" id="txt1" cols="50" rows="5"></textarea>

            <label for="alternativa_b" class="label-pergunta">Alternativa B</label>
            <textarea name="alternativa_b" id="txt1" cols="50" rows="5"></textarea>

            <label for="alternativa_c" class="label-pergunta">Alternativa C</label>
            <textarea name="alternativa_c" id="txt1" cols="50" rows="5"></textarea>

            <label for="alternativa_d" class="label-pergunta">Alternativa D</label>
            <textarea name="alternativa_d" id="txt1" cols="50" rows="5"></textarea>

            <label for="area-conhecimento" class="label-pergunta">Area de conhecimento</label>
            <select name="area-conhecimento" id="cards">
                <option value="A">Programação</option>
                <option value="B">Hardware</option>
                <option value="C">Sistemas Operacionais</option>
                <option value="D">Estilização</option>
                <option value="D">Banco de dados</option>
            </select>

            <label for="cards" class="label-pergunta">Alternativa correta</label>
            <select name="cards" id="cards">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>
        <div class="proxima">

        </div>
    </form>
    <button onclick="duplicarDiv()">adicionar</button>
</main>

<script>
    const divpergunta = document.querySelector('.pergunta');
    const formpai = document.querySelector('.proxima');



    function duplicarDiv() {
        console.log(divpergunta);
        var cloneDiv = divpergunta.cloneNode(true);
        formpai.appendChild(cloneDiv)
    } 
</script>