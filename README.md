# 2FA/MFA com aplicativos geradores de código em PHP

Esta aplicação consiste em uma **demonstração simples de autenticação em dois fatores (2FA)** utilizando **PHP** e o padrão **TOTP (Time-based One-Time Password)**, compatível com aplicativos como:

- Google Authenticator
- Microsoft Authenticator
- FreeOTP
_(entre outros...)_

O objetivo da aplicação é **mostrar o funcionamento do 2FA na prática**, por enquanto sem banco de dados, sem login e frameworks (podendo ser implementado futuramente).

---

## 📌 O que o projeto faz

- Gera um **secret TOTP**
- Exibe um **QR Code** para ser escaneado no app autenticador
- Valida o **código de 6 dígitos** gerado pelo aplicativo
- Usa **sessão PHP** para armazenar temporariamente os dados

Tudo isso seguindo o padrão **RFC 6238**, utilizado em sistemas reais de produção.

---

## 🧰 Tecnologias utilizadas
- PHP
- Biblioteca [`spomky-labs/otphp`](https://github.com/Spomky-Labs/otphp)

---

## 🚀 Execução do projeto

**1. Clonar o repositório**
```bash
https://github.com/mateus040/2fa-php.git
```

**2. Instalar depêndencias**
```bash
composer i
```

**3. Inicie o servidor**
```bash
php -S localhost:8000
```

**4. Acesse o navegador**
```bash
http://localhost:8000
```

**5. Escanei o QR CODE com um dos apps autenticadores citados mais acima**

**6. Digite o código de 6 dígitos gerado no aplicativo e veja o resultado da validação**

---

## 💰 Custos

Para utilizar o aplicativos autenticadores, não há nenhum custo, com isso, podendo ser testado tanto de forma local e em produção sem complicações e sem o risco de haver algum custo pelo uso
