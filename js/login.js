const hide1 = document.querySelector(".hide");
const hide2 = document.querySelector(".hide2");

const exibir = document.querySelector(".exibir");
const enunciado = document.querySelector(".enunciado");
const botao = document.querySelector("#btn");
const nq = document.querySelector(".nq");
const la = document.querySelector(".la");
const lb = document.querySelector(".lb");
const lc = document.querySelector(".lc");
const ld = document.querySelector(".ld");

function cadastrar() {
    hide1.style.display = "none";
    hide2.style.display = "block";
}
function entrar() {
    hide1.style.display = "block";
    hide2.style.display = "none";
}
document.querySelector("#entre").addEventListener("mouseover", () => {
    document.querySelector("#entre").style.cursor = "pointer";
});


