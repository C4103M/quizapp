document.addEventListener("DOMContentLoaded", function () {
    var imgphp = document.querySelector("#imgphp").textContent;
    imgphp = imgphp.replace(/^\.\.\//, "");
    const fotoPerfil = document.querySelector("#fotoPerfil");
    console.log(imgphp);
    if (imgphp !== "") {
        fotoPerfil.setAttribute("src", imgphp);
    } else {
        abrir()
    }
    var modal = document.querySelector('#modal')
});

function abrir() {
    modal.showModal();
}
function fechar() {
    modal.close();
}