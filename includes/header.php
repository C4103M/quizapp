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
        <img src="img/medal.svg" alt="medalha" id="medalha" class="">
        <div class="div-progresso">
            <div class="lvl"> <span style="font-size: 0.9rem;"> Nivel</span> </div>
            <div class="barra">
                <div class="progresso"></div>
            </div>
        </div>
    </div>


</header>
<script>
    let logout = document.querySelector('.div-poweroff');

    

    
</script>