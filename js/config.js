function clickCard(element){
    const card = document.getElementById(`item${element}`)
    card.setAttribute('style', 'scale:0.9')
}

function soltCard(element){
    const card = document.getElementById(`item${element}`)
    card.setAttribute('style', 'scale:1.0')

    if (element == 1){
        location.href = "config/altnome.php"
    }
    if (element == 2){
        location.href = "config/altemail.php"
    }
    if (element == 3){
        location.href = "config/altsenha.php"
    }
    if (element == 5){
        location.href = "./config/delete.php"
    }
    if (element == 6){
        location.href = "./addquestao.php"
    }
    if (element == 7){
        location.href = "./config/logout.php"
    }

    
}

function enterMouse(element) {
    const card = document.getElementById(`item${element}`)
    card.setAttribute('style', 'scale:1.1')
}

function sairCard(element){
    const card = document.getElementById(`item${element}`)
    card.setAttribute('style', 'scale:1.0')
    
}

