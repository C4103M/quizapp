function clickCard(element){
    const card = document.getElementById(`item${element}`)
    console.log(card);
    card.setAttribute('style', 'scale:0.9')
}

function soltCard(element){
    const card = document.getElementById(`item${element}`)
    console.log(card);
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
        location.href = "config/delete.php"
    }
    if (element == 6){
        location.href = "home.php"
    }

    
}

function enterMouse(element) {
    const card = document.getElementById(`item${element}`)
    console.log(card);
    card.setAttribute('style', 'scale:1.1')
}

function sairCard(element){
    const card = document.getElementById(`item${element}`)
    console.log(card);
    card.setAttribute('style', 'scale:1.0')
    
}

