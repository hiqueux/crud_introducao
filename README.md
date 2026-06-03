# Nome do Projeto

> *crud_introducao*

---

## Objetivo da Aplicação

Este projeto foi desenvolvido com a finalidade de praticar os conceitos básicos de PHP e compreender a integração entre uma aplicação web e um banco de dados MySQL. Além disso, buscou-se aplicar conceitos de autenticação, manipulação de dados e gerenciamento de usuários.

---

## Tecnologias Utilizadas

Durante o desenvolvimento do sistema, foram utilizadas as seguintes tecnologias:

* **HTML** para a estruturação das páginas web;
* **PHP** para a implementação das funcionalidades do lado do servidor;
* **MySQL** para armazenamento, consulta e gerenciamento dos dados;
* **CSS** para a estilização da interface do sistema.

---

## Estrutura Básica dos Arquivos

A aplicação foi organizada em diretórios que separam as responsabilidades de cada componente do sistema:

```text
ATIVIDADE-TESTE-BANCO-PHP/
├── assets/
│   └── images/
│       └── lixeira_icon.png
├── infra/
│   └── db/
│       ├── connect.php     # Conexão com o banco de dados
│       └── script.sql      # Script de criação do banco e da tabela
├── public/
│   ├── component/
│   │   └── table.php       # Componente responsável pela listagem de usuários
│   ├── home.php            # Página principal do sistema
│   └── logout.php          # Encerramento da sessão do usuário
├── index.php               # Tela de login
└── README.md               # Documentação do projeto
```

---

## Funcionamento do Código

O sistema segue um fluxo simples de autenticação e gerenciamento de usuários:

1. O usuário realiza o login utilizando suas credenciais;
2. Após a autenticação, é redirecionado para a página principal;
3. Na página principal, é possível cadastrar novos usuários;
4. Os usuários cadastrados são exibidos em uma tabela;
5. O usuário pode encerrar sua sessão através da opção de logout.

---

## Principais Dificuldades

Durante a análise e o desenvolvimento do projeto, alguns desafios foram encontrados:

1. Identificar e corrigir erros de sintaxe em comandos SQL;
2. Integrar corretamente os formulários HTML com os scripts PHP;
3. Garantir que os dados fossem exibidos corretamente após consultas ao banco de dados;
4. Organizar a comunicação entre as páginas e componentes do sistema.

---

## Principais Aprendizados

O desenvolvimento e a análise da aplicação permitiram aprofundar conhecimentos importantes, como:

* Estrutura e lógica de programação em PHP;
* Conexão e manipulação de bancos de dados utilizando MySQL;
* Utilização de sessões para controle de acesso;
* Integração entre front-end e back-end;
* Organização de arquivos e separação de responsabilidades em projetos web.
