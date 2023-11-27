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

const carlaoimg = document.querySelector('#carlao');
const btnReiniciar = document.querySelector('.btn-reiniciar');


const pBemVindos = document.querySelector(".inicialText")


const divalt_A = document.querySelector('#divalternativaA');
const divalt_B = document.querySelector('#divalternativaB');
const divalt_C = document.querySelector('#divalternativaC');
const divalt_D = document.querySelector('#divalternativaD');

let elementoSelecionado = null;

let altmarcada = document.querySelector('input[name="resposta"]:checked');

const opc = document.querySelector('.opc')

var numQuestao = 1;

const consultaQuestoes = async (pagina) => {
    const consulta = await fetch("./includes/consultaquestoes.php?pagina=" + pagina);
    var jsonStr = await consulta.text();
    var jsonData = await JSON.parse(jsonStr)
    return jsonData
}

const addxp = async (pagina) => {
    const add = await fetch("./includes/addxp.php?pagina=" + pagina);
    const qtdXp = await add.text()
    if (!isNaN(qtdXp)) {
        return qtdXp;
    } else {
        alert('XP não adicionado')
    }
}


const iniciar = async () => {

    btnReiniciar.style.display = 'none';

    let checkbox1 = document.getElementById('check1');
    let checkbox2 = document.getElementById('check2');
    let checkbox3 = document.getElementById('check3');
    let checkbox4 = document.getElementById('check4');
    let checkbox5 = document.getElementById('check5');

    if (checkbox1.checked  || checkbox2.checked || checkbox3.checked || checkbox4.checked || checkbox5.checked) {

        const questaoSorteada = await sortear();

        opc.style.display = 'none';

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




}
function validar() {
    const opcaoSelecionada = document.querySelector('input[name="resposta"]:checked').value;
    if (opcaoSelecionada == questaoSorteada.resposta_correta) {
        addxp(1).then(qtdXp => {
            let funProgresso = calcularProgressoXP(qtdXp)
            varprogresso.style.width = funProgresso.progresso + '%'
            lvl.innerHTML = funProgresso.nivel;
        })
        iniciar();
    } else {
        if (opcaoSelecionada == 'a') {
            divalt_A.style.background = 'red';
        } else if (opcaoSelecionada == 'b') {
            divalt_B.style.background = 'red';
        } else if (opcaoSelecionada == 'c') {
            divalt_C.style.background = 'red';
        } else if (opcaoSelecionada == 'd') {
            divalt_D.style.background = 'red';
        }
        if (questaoSorteada.resposta_correta == 'a') {
            divalt_A.style.background = 'green';
        } else if (questaoSorteada.resposta_correta == 'b') {
            divalt_B.style.background = 'green';
        } else if (questaoSorteada.resposta_correta == 'c') {
            divalt_C.style.background = 'green';
        } else if (questaoSorteada.resposta_correta == 'd') {
            divalt_D.style.background = 'green';
        }
        looser();

    }
}



const sortear = async () => {
    let jsonData = await consultaQuestoes(1);

    let numQuestoes = jsonData.questoes.qtd;

    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    let marcados = [];

    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            marcados.push(checkboxes[i].value);
        }
    }

    // Converter as questões em uma matriz
    const questoesArray = Object.keys(jsonData.questoes).map(key => jsonData.questoes[key]);

    // Filtrar questões pela área de conhecimento marcada
    const questoesFiltradas = questoesArray.filter(questao => marcados.includes(questao.area_conhecimento));

    // Se todas as questões da área selecionada já foram sorteadas, reinicia a lista de questões sorteadas
    if (questoesSorteadas.length === questoesFiltradas.length) {
        questoesSorteadas = [];
    }

    let indiceSorteado;

    do {
        indiceSorteado = Math.floor(Math.random() * questoesFiltradas.length);
    } while (questoesSorteadas.includes(indiceSorteado));

    questoesSorteadas.push(indiceSorteado);

    questaoSorteada = questoesFiltradas[indiceSorteado];
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




// Adicione o evento de clique aos elementos
divalt_A.addEventListener('click', function () {
    clicked(divalt_A);
});

divalt_B.addEventListener('click', function () {
    clicked(divalt_B);
});

divalt_C.addEventListener('click', function () {
    clicked(divalt_C);
});

divalt_D.addEventListener('click', function () {
    clicked(divalt_D);
});
function clicked(alternativa) {
    if (elementoSelecionado === alternativa) {
        // Se o elemento já estiver selecionado, volte ao padrão (background elementos)
        alternativa.style.background = 'var(--main-elementos)';
        elementoSelecionado = null;
    } else {
        // Se outro elemento estiver selecionado, volte ao padrão (background elementos)
        if (elementoSelecionado) {
            elementoSelecionado.style.background = 'var(--main-elementos)';
        }
        // Defina o novo elemento como selecionado e altere seu background para verde
        elementoSelecionado = alternativa;
        alternativa.style.background = 'green';


        if (elementoSelecionado.id === 'divalternativaA') {
            let radioBtn = document.getElementById('a');
            if (radioBtn) {
                radioBtn.checked = true;
            }
        } else if (elementoSelecionado.id === 'divalternativaB') {
            let radioBtn = document.getElementById('b');

            if (radioBtn) {
                radioBtn.checked = true;
            }

        } else if (elementoSelecionado.id === 'divalternativaC') {
            let radioBtn = document.getElementById('c');

            if (radioBtn) {
                radioBtn.checked = true;
            }
        } else if (elementoSelecionado.id === 'divalternativaD') {
            let radioBtn = document.getElementById('d');

            if (radioBtn) {
                radioBtn.checked = true;
            }
        }
    }
}


const botao3 = document.querySelector('#btn3')
let contregra = 1

const botao = document.querySelector("#btn1");
const botao2 = document.querySelector("#btn2");

function proximaregra() {
    contregra++;
    if (contregra == 2) {
        nq.innerHTML = 'Selecione a resposta correta dentro do tempo limite para acumular pontos.'

    } else if (contregra == 3) {
        nq.innerHTML = 'Respostas corretas resultam em pontuação, enquanto respostas incorretas não resultam em penalidades.'
    } else if (contregra == 4) {
        nq.innerHTML = 'Vamos lá?'

    } else if (contregra == 5) {
        nq.innerHTML = 'Sobre qual assunto você deseja estudar? '
        opc.style.display = 'block'
        botao.style.display = 'block'
        botao3.style.display = 'none'
    }
}



function looser() {
    botao2.style.display = 'none'


    carlaoimg.src = "./img/carlaochoro.gif";
    nq.innerHTML = "";

    enunciado.innerHTML = "ASSIM NÃO JÓVEM!!!!!!!!!!!!!!!!!";

    btnReiniciar.style.display = 'flex';
}

function reiniciar () {
    carlaoimg.src = './img/carlaoembranco.gif';

    numQuestao = 1;

    
    divalt_A.style.background = 'var(--main-elementos)';
    divalt_B.style.background = 'var(--main-elementos)';
    divalt_C.style.background = 'var(--main-elementos)';
    divalt_D.style.background = 'var(--main-elementos)';




    iniciar();
    
} 

function reiniciarArea () {
    carlaoimg.src = './img/carlaoembranco.gif';

    exibir.style.display = 'none';
    btnReiniciar.style.display = 'none';

    nq.innerHTML = 'Sobre qual assunto você deseja estudar? '
    opc.style.display = 'block'
    botao.style.display = 'block'
    botao3.style.display = 'none'
}