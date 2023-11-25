<?php

$id = $_SESSION['user_id'];
include_once('includes/conexao.php');

$con = conecta_mysql();
$sql = "SELECT * FROM usuarios ORDER BY user_xp DESC LIMIT 15;";
$posicao = 0;
$resultado = mysqli_query($con, $sql);
if ($resultado) {
    $users = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $users[] = $linha;
    }
    foreach ($users as $user) {
        $user_id[$user['user_id']] = $user['user_id'];
        $user_name[$user['user_id']] = $user['user_name'];
        $user_email[$user['user_id']] = $user['user_email'];
        $user_id[$user['user_id']] = $user['user_id'];
        $user_xp[$user['user_id']] = $user['user_xp'];
        $user_image[$user['user_id']] = $user['img'];
        $posicao++;
        $user_position[$user['user_id']] = $posicao;
 

        
    }
    print "<p class='ranking'>Ranking:</p>";
    foreach ($users as $user) {
        if ($user_xp[$user['user_id']] != 0) {

            
            print "
            <div class='player'>
                <div class='myPosition'>
                    <div class='profile-position'>
                        <div class='position1'>
                            <div class='ftperfil'>
                                <img src='img/profile.svg' class='imgprofile' id='fotoPerfil{$user['user_id']}'>
                            </div>
                            <p>{$user_name[$user['user_id']]}</p>
                        </div>
                        <div class='position2'>
                            <p class='rp'><strong>#{$user_position[$user['user_id']]}</strong></p>
                        </div>
                    </div>
                    <div class='position'>
                        <div class='container-bar'>
                            <img src='img/medal.svg' alt='medal'>
                            <div class='lvl-placar'>
                                <script>
                                    var prog = calcularProgressoXP({$user_xp[$user['user_id']]}); 
                                    document.write(prog.nivel);
                                </script>
                            </div>
                            <div class='barra-placar'>
                                <div class='progresso-placar' id='progresso{$user['user_id']}'></div>
                            </div>
                        </div>
                        <script>
                            var varprogresso{$user['user_id']} = document.querySelector('#progresso{$user['user_id']}');
                            var prog{$user['user_id']} = calcularProgressoXP({$user_xp[$user['user_id']]}); 
                            varprogresso{$user['user_id']}.style.width = prog{$user['user_id']}.progresso + '%';
                            
                            var imgphp = '{$user_image[$user['user_id']]}'
                            imgphp = imgphp.replace(/^\.\.\//, '');
                            
                            var fotoPerfil = document.querySelector('#fotoPerfil{$user['user_id']}');
                            if (imgphp !== '') {
                                fotoPerfil.setAttribute('src', imgphp);
                            }
                        </script>
                    </div>
                    <div class='position3'>
                        <p class='rp'><span>Pontos:</span> <span id='rp'>{$user_xp[$user['user_id']]}</span></p>
                    </div>
                </div>
            </div>
                            ";
                        }
    }
}
