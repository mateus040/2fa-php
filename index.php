<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use OTPHP\TOTP;

if (!isset($_SESSION['2fa_secret'])) {

  // Criando instância TOTP (algoritmo de geração de códigos temporários usado pelo Google Authenticator)
  $totp = TOTP::create();

  // Nome da aplicação (Nome que aparecerá no Google Authenticator)
  $totp->setIssuer('Usuário');

  // Identificador do usuário (Pode ser o email ou um username, que no caso irá aparecer também no Google Authenticator)
  $totp->setLabel('usuario@email.com');

  // Armazena o secret gerado na sessão, no qual é a chave compartilhada entre o servidor e o Google Authenticator
  $_SESSION['2fa_secret'] = $totp->getSecret();

  // Gera a URI no formato "otpauth://", utilizada para gerar o QR Code
  $_SESSION['2fa_uri'] = $totp->getProvisioningUri();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>2FA Demo</title>
</head>

<body>
  <h2>1️⃣ Escaneie o QR Code</h2>

  <img
    src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=<?= urlencode($_SESSION['2fa_uri']) ?>"
    alt="QR Code">

  <h2>2️⃣ Digite o código do Google Authenticator</h2>

  <form method="post" action="verify.php">
    <input type="text" name="code" placeholder="Código 6 dígitos" required>
    <button type="submit">Verificar</button>
  </form>
</body>

</html>