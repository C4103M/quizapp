const checkbox = document.querySelector("#check");
const html = document.querySelector("html");
const cookie = Cookies.get('mode');
var imagens = document.querySelectorAll('.icons');
var imagens2 = document.querySelectorAll('.icons2');

console.log(imagens)

if (cookie == 'dark-mode') {
    html.classList.add("dark-mode");
    checkbox.checked = true
    // imagens.style.display = 'none'
    imagens.forEach((img) => {
        console.log(img)
        img.setAttribute('style', 'display:none;')
    })
    imagens2.forEach((img) => {
        console.log(img)
        img.setAttribute('style', 'display:block;')
    })
}
function changeMode() {
    html.classList.toggle("dark-mode");
    
    if (html.classList.contains('dark-mode')) {
        Cookies.set('mode', 'dark-mode', { expires: 7 });
        imagens.forEach((img) => {
            console.log(img)
            img.setAttribute('style', 'display:none;')
        })
        imagens2.forEach((img) => {
            console.log(img)
            img.setAttribute('style', 'display:block;')
        })

    } else {
        Cookies.set('mode', 'white-mode', { expires: 7 });
        imagens2.forEach((img) => {
            console.log(img)
            img.setAttribute('style', 'display:none;')
        })
        imagens.forEach((img) => {
            console.log(img)
            img.setAttribute('style', 'display:block;')
        })
    }
} 