<?php
session_start();


if(!isset($_SESSION['esta_logado']) OR !($_SESSION['esta_logado'] == true) ){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="social">

    <a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

    <img src="18920128_283811942081143_1199280153322285858_n.jpg" alt="" width="200" height="200">
    <h3>Olá,você esta logado!!:3</h3>
</div>


</body>
</html>