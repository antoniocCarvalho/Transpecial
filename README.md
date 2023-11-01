![Logo](https://github.com/antoniocCarvalho/Transpecial/blob/main/img/logoUrbes.png)

## Transpecial

## Versão: 2.0
## Status do Projeto: em Desenvolvimento 🚨  

 🔹 Descrição do projeto 

Transpecial é um programa inovador de transporte criado para atender às necessidades de pessoas que fazem uso de transporte especial.

 🔹 Funcionalidades
 
 * **Agendamentos de viagens**

 * **Consultas de viagens via ID**
 * **Roterizador de viagens**


 🔹 Distribuição
https://github.com/antoniocCarvalho/Transpecial

 🔹 Pré-requisitos

 1. Instalar o Visual Studio Code (caso não possua)
- Acesse o site oficial do Visual Studio Code em https://code.visualstudio.com/.
- Clique no botão "Download" para baixar o instalador do VS Code.
- Execute o instalador e siga as instruções para concluir a instalação

2. Configuração das extensões para execução de HTML, CSS e JavaScript no Visual Studio Code:
- Abra o Visual Studio Code.
- Na barra lateral esquerda, clique no ícone de extensões.
- Na caixa de pesquisa, digite "HTML" e pressione Enter.
- Serão exibidas várias extensões relacionadas a HTML. Selecione uma extensão popular e confiável, como "HTML Preview" ou "Live Server", e clique em "Instalar".
- Repita o mesmo processo para as extensões relacionadas a CSS e JavaScript que julgar necessário.
- Certifique-se de instalar extensões que possibilitem a execução e a visualização do código HTML, CSS e JavaScript no navegador.

3. Instalar o XAMPP:
- Acesse o site oficial do XAMPP em https://www.apachefriends.org/.
- Clique no botão "Download" para baixar o instalador do XAMPP.
- Execute o instalador e siga as instruções para concluir a instalação.

 🔹 Como rodar a aplicação

1. Abra o Visual Studio Code: Após instalar o Visual Studio Code, abra a IDE em seu computador.

2. Abra o projeto: No Visual Studio Code, vá em "File" (Arquivo) e selecione "Open Folder" (Abrir Pasta). Navegue até o diretório do projeto. No caso do projeto "Transpecial", o diretório raiz deve estar localizado em "C:\xampp\htdocs\transpecial-main". Se você instalou o XAMPP no disco local C, siga esse caminho para encontrar a pasta raiz do projeto.

3. Configuração do servidor local:
- Abra o painel de controle do XAMPP.
- Inicie os serviços do Apache e MySQL para criar um ambiente de desenvolvimento local.

4. Importe o arquivo SQL:
- Abra o seu navegador e digite "http://localhost/phpmyadmin" na barra de endereço. Isso abrirá a interface do phpMyAdmin.
- Faça login no phpMyAdmin utilizando as credenciais do seu servidor MySQL local, se necessário.
- Crie um novo banco de dados: Na página inicial do phpMyAdmin, clique em "Novo" no menu lateral esquerdo.
- Digite o nome do banco de dados como "TransPecial".
- Selecione a codificação padrão ("utf8mb4_unicode_ci").
- Clique em "Criar" para criar o novo banco de dados.
- Após criar o banco de dados, clique no nome dele no menu lateral esquerdo para selecioná-lo.
- Na página do banco de dados, clique na guia "Importar" na parte superior.
- Clique no botão "Escolher arquivo" e navegue até o local onde o arquivo "TransPecial.sql" está armazenado em seu computador.
- Selecione o arquivo "TransPecial.sql".
- Verifique se o formato de importação está definido como "SQL".
- Clique em "Importar" para importar o arquivo SQL para o banco de dados.

5. Estabelecendo a conexão:
- Abra o arquivo "connect.php" no projeto usando o Visual Studio Code.
- Verifique se as informações de conexão estão corretas, como o nome do servidor, usuário e senha do banco de dados. Se necessário, altere-os para corresponder às suas configurações locais do MySQL.

6. Abrir o projeto no servidor local:
- No navegador de sua preferência, digite o seguinte endereço na barra de endereços: "http://localhost/transpecial-main/index.php". 
- Pressione Enter.

 🔹 Testes realizados

 🔹 Banco de Dados
 Estamos usando o mysql um banco relacional, que é usado para armazenar usuarios, administradores e as viagens 

 🔹 Linguagens, dependências e libs utilizadas

  <img align="center" alt="HTML" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg">
  <img align="center" alt="CSS" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg">
  <img align="center" alt="Js" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-plain.svg">
  <img align="center" alt="php" height="30" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg">

🔹 Novas Recursos

🔹 Resolvendo problemas

🔹 Recursos inseridos 
1-  "https://brasilapi.com.br/api/cep/v1/"  uma api que faz uma requisição de um CEP específico e retorna dados, como estado, cidade e rua 
2- api do google foi utilizada para realizar a rota da viagem de forma automática, inserindo-a na tela

🔹 Desenvolvedores/Contribuintes
 * **Anderson Pereira**
  * **Antonio Carvalho**
  * **Axel Alves**
  * **Ingrid Kemily**

🔹 Informações Extras

## Licença
The MIT License (MIT)

## Copyright ©️ 2023 - Transpecial
