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


const divalt_A = document.querySelector('#divalternativaA');
const divalt_B = document.querySelector('#divalternativaB');
const divalt_C = document.querySelector('#divalternativaC');
const divalt_D = document.querySelector('#divalternativaD');

let elementoSelecionado = null;

let altmarcada = document.querySelector('input[name="resposta"]:checked');

const opc = document.querySelector('.opc')
const balao3 = document.querySelector('.balao3')

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
    
    const questaoSorteada = await sortear();

    opc.style.display = 'none';
    balao3.style.width = '600px'
    
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
function validar() {
    const opcaoSelecionada = document.querySelector('input[name="resposta"]:checked').value;
    console.log(opcaoSelecionada);
    if (opcaoSelecionada == questaoSorteada.resposta_correta) {
        addxp(1).then(qtdXp => {
            let funProgresso = calcularProgressoXP(qtdXp)
            varprogresso.style.width = funProgresso.progresso + '%'
            lvl.innerHTML = funProgresso.nivel;
        })
        iniciar();
    } else {
        exibir.innerHTML = "<p class='p1'>Você errou 😭<p/>"
    }
}



const sortear = async () => {
    let jsonData = await consultaQuestoes(1);

    const numQuestoes = jsonData.questoes.qtd;

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




function clicked(alternativa) {
    if (elementoSelecionado === alternativa) {
        // Se o elemento já estiver selecionado, volte ao padrão (background white)
        alternativa.style.background = 'var(--main-elementos)';
        elementoSelecionado = null;
    } else {
        // Se outro elemento estiver selecionado, volte ao padrão (background white)
        if (elementoSelecionado) {
            elementoSelecionado.style.background = 'var(--main-elementos)';
        }
        // Defina o novo elemento como selecionado e altere seu background para verde
        elementoSelecionado = alternativa;
        alternativa.style.background = 'green';
        
        
        if (elementoSelecionado.id === 'divalternativaA') {
            let radioBtn = document.getElementById('a');
            console.log('a');
            if (radioBtn) {
                radioBtn.checked = true;
            }
        } else if (elementoSelecionado.id === 'divalternativaB') {
            let radioBtn = document.getElementById('b');
            console.log('b');
            
            if (radioBtn) {
                radioBtn.checked = true;
            }
            
        } else if (elementoSelecionado.id === 'divalternativaC') {
            let radioBtn = document.getElementById('c');
            console.log('c');
            
            if (radioBtn) {
                radioBtn.checked = true;
            }
        } else if (elementoSelecionado.id === 'divalternativaD') {
            let radioBtn = document.getElementById('d');
            console.log('d');
            
            if (radioBtn) {
                radioBtn.checked = true;
            }
        }
    }
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

const botao3 = document.querySelector('#btn3')
let contregra = 1

const botao = document.querySelector("#btn1");
const botao2 = document.querySelector("#btn2");

function proximaregra() {
    contregra++;
    if (contregra == 2) {
        nq.innerHTML = 'Selecione a resposta correta dentro do tempo limite para acumular pontos.'
        
    } else if (contregra == 3){
        nq.innerHTML = 'Respostas corretas resultam em pontuação, enquanto respostas incorretas não resultam em penalidades.'
    } else if (contregra == 4){
        nq.innerHTML = 'Vamos lá?'
        
    } else if (contregra == 5) {
        nq.innerHTML = 'Sobre qual assunto você deseja estudar? '
        opc.style.display = 'block'
        botao.style.display = 'block'
        botao3.style.display = 'none'
    }
}