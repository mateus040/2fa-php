<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use OTPHP\TOTP;

if (!isset($_SESSION['2fa_secret'])) {
    die('Sessão inválida');
}

$code = $_POST['code'] ?? '';

$totp = TOTP::create($_SESSION['2fa_secret']);

$isValid = $totp->verify($code, null, 1);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php if ($isValid): ?>
        <h2 style="color: green;">✅ Código válido</h2>
    <?php else: ?>
        <h2 style="color: red;">❌ Código inválido</h2>
    <?php endif; ?>

    <a href="index.php">Voltar</a>
</body>
</html>
