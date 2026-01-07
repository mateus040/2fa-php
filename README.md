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

