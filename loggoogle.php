<?php
    //autoload composer
    require __DIR__.'/vendor/autoload.php';

    //dependencias
    use Google\Client as GoogleClient;
    use App\Session\User as SessionUser;

    //VALIDACAO PRIUMARIA DO COOKIE
    //verifica os campos obrigatorios
    if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token'])){

        echo 'bct';
    }

    //pegandpo o cookie
    $cookie = $_COOKIE['g_csrf_token'] ?? '';

    if ($_POST['g_csrf_token'] != $cookie){
        header('index.php');
        echo '<script> window.alert("fez bosta") </script>';
    }

    //VALIDACIO SECUNDARIA DO TOKEN
    $client = new GoogleClient(['client_id' => '495909918319-nbvuo7i9thrudepf5rtqmee18s3nnqif.apps.googleusercontent.com']);

    //OBTEM OS DADOS DO USUARIO
    $payload = $client->verifyIdToken($_POST['credential']);
    if (isset($payload['email'])) {
        
        echo "<pre>";
        print_r($payload);
        echo "</pre>";
        // SessionUser::login($payload['name'],$payload['email']);
        
    }

    print_r($cookie);


?>