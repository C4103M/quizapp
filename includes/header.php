<link rel="stylesheet" href="./css/header.css">
<header>
    <div class="grid1">
        <div class="div-foto">
            <div class="profile">
                <div class="ftperfil" onclick="abrirModal()">
                    <img src="img/profile.svg" id="fotoPerfil" alt="profile">
                </div>
                <p style="text-align: center; font-size:18pt;"></p>
            </div>
            <div class="titulo">
                <?php print $nome; ?>
            </div>
        </div>
        <img src="img/medal.svg" alt="medalha" id="medalha" class="icons">
        <img src="img/dark-mode/medal.svg" alt="medalha" id="medalha" class="icons2">
        <div class="div-progresso">
            <div class="lvl"> <span style="font-size: 0.9rem;"> Nivel</span> </div>
            <div class="barra">
                <div class="progresso"></div>
            </div>
        </div>
    </div>
    <figure class="poweroff">
        <label class="switch">
            <input type="checkbox" id="check" onchange="changeMode()">
            <span class="slider">
                <img src="./img/sun.svg" alt="sun" class="sun">
                <img src="./img/moon.svg" alt="" class="moon">
            </span>
        </label>
        <div class="div-poweroff">
            <img src="./img/off.svg" alt="">
        </div>
        <div class="div-seta">
            <img src="./img/seta.svg" alt="" class="icons">
            <img src="./img/dark-mode/seta.svg" alt="" class="icons2">
        </div>
    </figure>

</header>
<script>
    let logout = document.querySelector('.div-poweroff');

    let seta = document.querySelector('.div-seta');
    seta.addEventListener('click', () => {
        window.location.href = "./home.php";
    })

    logout.addEventListener('click', () => {
        window.location.href = "./config/logout.php";
    })

    var pagina = window.location.href;
    var nomePagina = pagina.split('/').pop();

    if (nomePagina == 'home.php') {
        seta.style.display = 'none'
    } else {
        seta.style.display = 'block'
        logout.style.display = 'none'

    }


</script>