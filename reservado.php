<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Área Exclusiva</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
  <h1>Bem-vindo à área exclusiva!</h1>
</header>

<main>
  <p>Conteúdo secreto apenas para utilizadores autenticados!</p>
  <a href="logout.php">Terminar sessão</a>
</main>
</body>
</html>
