# Eletroninfo API

Este projeto tem como objetivo uma estrutura MVC padrão.

## 📌 Versão 1.0

- **Módulo 01** – MVC

## 🚀 Tecnologias Utilizadas

`PHP 8.3` `MySQL` `MVC`

## 👨‍💻 Desenvolvedor

**Joab T. Alencar**  
🔗 [joabtorres.com.br](https://www.joabtorres.com.br)

© 2025

---

## ⚙️ Setup do Projeto

1. Crie um banco de dados MySQL e importe o arquivo `/_documentacao/... .sql`.
2. Acesse o arquivo de configuração localizado em `/config.php`.
3. Configure as constantes conforme seu ambiente local:

```php
// Banco de Dados
define("DB_HOST", "localhost");
define("DB_NAME", "db_eletroinfo");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// URL Base
define("BASE_URL", "http://localhost/mvc/");
define("TITLE_SITE", "titulo mvc");
```
---

## 📁 Estrutura de Diretórios

```
/
├── _documentacao/         # Documentação do projeto
│   └── banco.sql  # Script do banco de dados
├── app/
│   ├── controllers/       # Controladores da aplicação
│   ├── core/              # Núcleo do padrão MVC
│   └── models/            # Modelos e conexão com o banco
├── public_html/           # Views do MVC (Interface pública)
├── uploads/               # Diretório para arquivos enviados
├── config.php             # Arquivo de configuração
├── .htaccess              # Configuração de reescrita de URL
└── index.php              # Inicializador do projeto
```
---

## 🗄️ Banco de Dados

Versão 1.0 – 11 de junho de 2025

<img src="_documentacao/banco.png" alt="Modelo do Banco de Dados"/>

---

## 🌐 Rotas da Aplicação

As rotas estão definidas no arquivo `ApiController.php`, localizado na pasta `/app/controllers/`. Cada rota é representada por um método dentro da classe `ApiController`.

| Método                        | Descrição                            | Rota                                                |
|------------------------------|----------------------------------------|-----------------------------------------------------|
| `HomeController@index()`      | Página inicial               | `{BASE_URL}` ou `{BASE_URL}/home/index`             |