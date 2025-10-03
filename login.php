<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: reservado.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<header>
  <h1>Área Reservada</h1>
</header>

<main>
  <form method="post" action="validar.php">
    <label>Utilizador:</label><br>
    <input type="text" name="user"><br><br>

    <label>Palavra-passe:</label><br>
    <input type="password" name="pass"><br><br>

    <input type="submit" value="Entrar">
  </form>
</main>
</body>
</html>
