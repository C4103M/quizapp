const checkbox = document.querySelector("#check");
const html = document.querySelector("html");
const cookie = Cookies.get('mode');
var imagens = document.querySelectorAll('.icons');
var imagens2 = document.querySelectorAll('.icons2');


if (cookie == 'dark-mode') {
    html.classList.add("dark-mode");
    checkbox.checked = true
}
function changeMode() {
    html.classList.toggle("dark-mode");
    
    if (html.classList.contains('dark-mode')) {
        Cookies.set('mode', 'dark-mode', { expires: 7 });

    } else {
        Cookies.set('mode', 'white-mode', { expires: 7 });
        
    }
} 