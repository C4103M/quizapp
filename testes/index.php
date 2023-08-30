<?php 
if(isset($_GET["erro"])){
	$erro = $_GET["erro"];
	if($erro==1){
		echo "<script> alert('Faça o login novamente!'); </script>";
		print"";
	}
	if($erro==2){
		echo "<script> alert('Faça o login novamente!'); </script>";
	}
} 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Login</title>
</head>
<body>
    <header>
        <span class="span1">Quiz</span><br>
        <span class="span2">Info</span>
    </header>
    <section>
        <span class="t1">Login</span>
        <form action="" id="formLogin" >
            <div>
                <i><img src="../img/email.svg" alt=""></i>
                <input type="text" placeholder="Email:">
            </div>
            <div>
                <i><img src="../img/cadeado.svg" alt=""></i>
                <input type="password" placeholder="Senha:">
            </div>
        </form>
    </section>






    <?php 
    include('includes/login.php');
    ?>
    <script src="login.js"></script>
</body>

</html>