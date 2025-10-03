<?php
session_start();

// Definição fixa (podes mudar)
$user = "admin";
$pass = "1234";

if ($_POST['user'] === $user && $_POST['pass'] === $pass) {
    $_SESSION['user'] = $user;
    header("Location: reservado.php");
} else {
    echo "<p>Login falhou. <a href='login.php'>Tenta novamente</a></p>";
}
?>
