<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
</head>
<body>
    <form action="./index.php" method="POST">
        <p>Fazer Login</p>
        <p>
            <input type="text" placeholder="Seu email" >
        </p>
        <p>
            <input type="password" placeholder="Sua senha">
        </p>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>

<?php
include './Classes/Login.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$login = new Login();
$login->setEmail($email);
$login->setSenha($senha);
$login->Logar();

?>