const btnlogin = document.querySelector(".btnlogin");
const span1 = document.querySelector('.span1');
const span2 = document.querySelector('.span2');
const divwelcome = document.querySelector('.divwelcome');
const inicial = document.querySelector('.inicialpage');
const diventrar = document.querySelector('.entrar');
const form1 = document.querySelector('.form1');
const form2 = document.querySelector('.form2');

const cliqueaqui = document.querySelector('.cliqueaqui')

// btnlogin.addEventListener('click', () => {
//     console.log("Botão clicado"); // Verifique se esse log é exibido
//     span1.style.animation = 'span1 5s normal forwards';
//     span2.style.animation = 'span2 5s normal forwards';
//     divwelcome.style.animation = 'welcome 5s normal forwards';

//     setInterval(() => {
//         btnlogin.style.display = 'none';
//         inicial.style.display = 'none';
//         entrar.style.display = 'block';
//         form1.style.display = 'block';
//         form2.style.display = 'none';

//     }, 500)
// });

function entrar(){
    console.log("Botão clicado"); // Verifique se esse log é exibido
    span1.style.animation = 'span1 5s normal forwards';
    span2.style.animation = 'span2 5s normal forwards';
    divwelcome.style.animation = 'welcome 5s normal forwards';

    setInterval(troca1(), 500)
}
function cadastrar() {
    console.log("Botão clicado"); // Verifique se esse log é exibido
    span1.style.animation = 'span1 5s normal forwards';
    span2.style.animation = 'span2 5s normal forwards';
    divwelcome.style.animation = 'welcome 5s normal forwards';

    setInterval(troca2(),500)
}
function troca1() {
    btnlogin.style.display = 'none';
    inicial.style.display = 'none';
    diventrar.style.display = 'block';
    form1.style.display = 'block';
    form2.style.display = 'none';

}

function troca2() {
    btnlogin.style.display = 'none';
    inicial.style.display = 'none';
    diventrar.style.display = 'block';
    form1.style.display = 'none';
    form2.style.display = 'block';
}