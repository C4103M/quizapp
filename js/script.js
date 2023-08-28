const conteudo = document.getElementById("conteudo");
const exibir = document.querySelector(".exibir");
let jsonData;
let questaoSorteada; 
let questoesSorteadas = [];

const enunciado = document.querySelector(".enunciado");
const nq = document.querySelector(".nq");
const la = document.querySelector(".la");
const lb = document.querySelector(".lb");
const lc = document.querySelector(".lc");
const ld = document.querySelector(".ld");

const pBemVindos = document.querySelector(".inicialText")


const botao = document.querySelector("#btn");
const botao2 = document.querySelector("#btn2");

const barra = document.querySelector(".barra");
const varprogresso = document.querySelector(".progresso");

const exphp = document.querySelector('#exphp').textContent; 
const lvl = document.querySelector('.lvl')
let nv = calcularProgressoXP(exphp);
console.log(nv);
varprogresso.style.width = nv.progresso + '%';
lvl.innerHTML = nv.nivel;

var numQuestao = 1;

fetch("./JSON/questoes.JSON")
    .then((response) => response.json())
    .then((data) => {
        jsonData = data;
    })
    .catch((error) => {
        console.error("Erro ao buscar o JSON:", error);
    });


function iniciar() {

    const questaoSorteada = sortear();
    
    pBemVindos.style.display = 'none';

    exibir.style.display = "block";
    enunciado.innerHTML = questaoSorteada.pergunta;
    nq.innerHTML = numQuestao + ' - '
    la.innerHTML = questaoSorteada.alternativa_a;
    lb.innerHTML = questaoSorteada.alternativa_b;
    lc.innerHTML = questaoSorteada.alternativa_c;
    ld.innerHTML = questaoSorteada.alternativa_d;

    botao.style.display = 'none'
    botao2.style.display = 'block'

    numQuestao++;
    
}
function validar(){
    const opcaoSelecionada = document.querySelector('input[name="resposta"]:checked').value;
    if (opcaoSelecionada == questaoSorteada.resposta_correta){
        addxp(1).then(qtdXp =>{
            let funProgresso = calcularProgressoXP(qtdXp)
            varprogresso.style.width = funProgresso.progresso + '%'
            lvl.innerHTML = funProgresso.nivel;
        })
        iniciar();
    } else {
        exibir.innerHTML = "<p class='p1'>Você errou 😭<p/>"
    }
}

const addxp = async (pagina) => {
    const add = await fetch("./includes/addxp.php?pagina=" + pagina);
    const qtdXp = await add.text()
    if (!isNaN(qtdXp)){
        return qtdXp;
    } else {
        alert('XP não adicionado')
    }
}

function sortear() {
    const numQuestoes = 10;

    // Se todas as questões já foram sorteadas, reinicia a lista de questões sorteadas
    if (questoesSorteadas.length === numQuestoes) {
        questoesSorteadas = [];
    }

    let indiceSorteado;
    do {
        indiceSorteado = Math.floor(Math.random() * numQuestoes);
    } while (questoesSorteadas.includes(indiceSorteado));

    questoesSorteadas.push(indiceSorteado);

    questaoSorteada = jsonData.questoes[`questao${indiceSorteado + 1}`];
    return questaoSorteada;
}

function calcularProgressoXP(experiencia) {
    // Defina a quantidade de XP necessária para o nível 1 e o aumento por nível.
    const xpNivel1 = 0;
    const xpAumentoNiveis = [
        10, 10, 10, 10, 10, 15, 15, 15, 15, 15, 20, 20, 20, 20, 20,
    ];

    // Inicializa o nível e a experiência mínima e máxima para o nível atual.
    let nivel = 1;
    let xpNivelAtualMin = xpNivel1;
    let xpNivelAtualMax = xpNivel1 + xpAumentoNiveis[0];

    // Enquanto a experiência for suficiente para passar para o próximo nível, avance para o próximo nível.
    while (experiencia >= xpNivelAtualMax) {
        nivel++;
        xpNivelAtualMin = xpNivelAtualMax;
        xpNivelAtualMax +=
            xpAumentoNiveis[Math.min(nivel - 1, xpAumentoNiveis.length - 1)];
    }

    // Calcula a porcentagem de progresso para o nível atual.
    const progressoXP =
        ((experiencia - xpNivelAtualMin) /
            (xpNivelAtualMax - xpNivelAtualMin)) *
        100;

    // Retorna o nível e a porcentagem de progresso como um objeto.
    return {
        nivel: nivel,
        progresso: progressoXP,
    };


    /*
    Até o nível 5, a quantidade de pontos para subir de nível é de 10 pontos. A partir do nível 5, 
    a quantidade de experiência necessária para passar de nível 
    deverá ser de15 pontos de diferença do nível anterior, e a partir do nível 10, 
    essa diferença deverá ser de 20 pontos de experiência
    */
}

// console.log(calcularProgressoXP(84))
