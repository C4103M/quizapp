function clickCard(element){
    const card = document.getElementById(`e${element}`)
    // console.log(card);
    card.setAttribute('style', 'scale:0.95')
}
function soltCard(element){
    const card = document.getElementById(`e${element}`)
    console.log(card);
    card.setAttribute('style', 'scale:1.0')
    if (element == 1){
        window.location.href = 'quiz.php'
    }
    if (element == 2){
        window.location.href = 'placar.php'
    }
    if (element == 3){
        window.location.href = 'info.php'
    }
    if (element == 4){
        window.location.href = 'config.php'
    }
    if (element == 6) {
        window.location.href = 'config/logout.php'
    }
}
function enterMouse(element) {
    const card = document.getElementById(`e${element}`)
    // console.log(card);
    card.setAttribute('style', 'scale:1.05')
}
function sairCard(element){
    const card = document.getElementById(`e${element}`)
    // console.log(card);
    card.setAttribute('style', 'scale:1.0')   
}


let clique = 0;
function easterEgg() {
    const fala = document.querySelector(".benvindojovem");
    clique++;
    if(clique == 5) {
        fala.innerHTML = "Nós somos jóvens 🎶🎵";
    } else if (clique == 10) {
        fala.innerHTML = "Salsifufu";
    } else if (clique == 15) {
        fala.innerHTML = "Seta Jóvem, seta";
    } else if (clique == 20) {
        fala.innerHTML = "Seja bem Vindo Jóvem!";
        clique = 0
    }
    

}