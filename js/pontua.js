
// const barra = document.querySelector(".barra");
// // const varprogresso = document.querySelector(".progresso");

// const exphp = document.querySelector('#exphp').textContent;
// const lvl = document.querySelector('.lvl')
// let nv = calcularProgressoXP(exphp);
// console.log(nv);
// varprogresso.style.width = nv.progresso + '%';















function calcularProgressoXP(experiencia) {
    // Defina a quantidade de XP necessária para o nível 1 e o aumento por nível.
    const xpNivel1 = 0;
    const xpAumentoNiveis = [
        10, 10, 10, 10, 10, 15, 15, 15, 15, 15, 20, 20, 20, 20, 20,
    ];

    // Inicializa o nível e a experiência mínima e máxima para o nível atual.
    let nivel = 1;
    let xpNivelAtualMin = xpNivel1;
    let xpNivelAtualMax = xpNivel1 + xpAumentoNiveis[0];

    // Enquanto a experiência for suficiente para passar para o próximo nível, avance para o próximo nível.
    while (experiencia >= xpNivelAtualMax) {
        nivel++;
        xpNivelAtualMin = xpNivelAtualMax;
        xpNivelAtualMax +=
            xpAumentoNiveis[Math.min(nivel - 1, xpAumentoNiveis.length - 1)];
    }

    // Calcula a porcentagem de progresso para o nível atual.
    const progressoXP =
        ((experiencia - xpNivelAtualMin) /
            (xpNivelAtualMax - xpNivelAtualMin)) *
        100;

    // Retorna o nível e a porcentagem de progresso como um objeto.
    return {
        nivel: nivel,
        progresso: progressoXP,
    };


    /*
    Até o nível 5, a quantidade de pontos para subir de nível é de 10 pontos. A partir do nível 5, 
    a quantidade de experiência necessária para passar de nível 
    deverá ser de15 pontos de diferença do nível anterior, e a partir do nível 10, 
    essa diferença deverá ser de 20 pontos de experiência
    */
}


