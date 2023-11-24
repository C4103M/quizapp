const cliqueaqui = document.querySelector('.cliqueaqui')
const divwelcome = document.querySelector('.divwelcome');
const inicial = document.querySelector('.inicialpage');
const btnlogin = document.querySelector(".btnlogin");
const diventrar = document.querySelector('.entrar');

const span1 = document.querySelector('.span1');
const span2 = document.querySelector('.span2');
const form1 = document.querySelector('.form1');
const form2 = document.querySelector('.form2');

function entrar(){
    span1.style.animation = 'span1 1s normal forwards';
    span2.style.animation = 'span2 1s normal forwards';
    divwelcome.style.animation = 'welcome 1s normal forwards';
    cliqueaqui.style.display = 'none';

    setInterval(troca1(), 500)
}
function cadastrar() {
    span1.style.animation = 'span1 1s normal forwards';
    span2.style.animation = 'span2 1s normal forwards';
    divwelcome.style.animation = 'welcome 1s normal forwards';
    cliqueaqui.style.display = 'none';

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