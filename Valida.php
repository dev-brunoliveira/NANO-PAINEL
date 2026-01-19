<?php
session_start();

/* Captura os dados */
$usuario = isset($_POST['usuario']) ? strtolower(trim($_POST['usuario'])) : '';
$senha   = isset($_POST['senha'])   ? strtolower(trim($_POST['senha']))   : '';

/* Credenciais corretas */
$usuarioCorreto = 'admin';
$senhaCorreta   = '123';

/* Validação */
if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
    $_SESSION['logado']  = true;
    $_SESSION['usuario'] = $usuario;

    header('Location: Pagina.html');
    exit;
} else {
    echo "<script>
        alert('Usuário ou senha inválidos');
        window.location.href = 'Login.html';
    </script>";
}
