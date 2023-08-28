<?php
session_start();
$nome = $_SESSION['user_name'];
if (!isset($_SESSION["user_id"])) {
    header("Location:index.php?erro=2");
}
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>INFO</title>
</head>

<body>
    
    
</body>

</html>