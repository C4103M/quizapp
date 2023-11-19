<?php
session_start();
include_once("conexao.php");

$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);

if (!empty($pagina)) {
    $user_id = $_SESSION['user_id'];
    
    $con = conecta_mysql();
    $sql = "UPDATE usuarios SET user_xp = user_xp + 1 WHERE user_id = $user_id;";
    if (mysqli_query($con, $sql)) {
        $sql2 = "SELECT user_xp FROM usuarios WHERE user_id = $user_id";
        $result = mysqli_query($con, $sql2);
        if ($result){
            echo $_SESSION['user_xp'] = mysqli_fetch_assoc($result)['user_xp'];
            // echo mysqli_fetch_assoc($result)['user_xp'];
        }
    } else {
        echo '2';
    }

}
