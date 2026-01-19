<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}
?>

<h1>Conteúdo protegido</h1>
<a href="logout.php">Sair</a>
