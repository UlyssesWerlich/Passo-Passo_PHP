# Passo-Passo_PHP

## 001 - Olá mundo com HTML

Tendo baixado o pacote do PHP e criado a variável de ambiente, é necessário renomear o arquivo "php.ini-development" (para ambiente de desenvolvimento) ou o "php.ini-product" (para ambiente de produção) para "php.ini", validando assim as configurações presentes no arquivo. Feito isso, o PHP já está pronto para o uso.

Nesse primeiro passo, temos o arquivo index.html e README.md. 

Para rodar o servidor, bastar enviar pelo terminal o comando "php -S localhost:8080" no diretório do teu projeto.

Com isso, basta digitar no navegador a url http://localhost:8000/ que o arquivo index vai estar disponível. É possível acessar também o README.md digitando http://localhost:8000/README.md.

É possível rodar no servidor qualquer pasta do teu computador.

## 002 - Olá mundo com PHP

Para rodar um arquivo com código PHP, basta criar um arquivo com a extensão .php, e inserir o código dentro das tags <?php [insíra seu código aqui] ?>.

Se acessar a url http://localhost:8000/, vai ver que o retorno é o texto inserido no comando echo.

Importante: se na url não estiver especificado ou não for encontrado o arquivo desejado, o PHP redireciona automaticamente para o arquivo com o nome "index".

## 003 - Gerando a estrutura HTML com o comando echo. Criando a primeira variável no PHP.

Temos aqui a primeira declaração de variável no PHP. Toda variável PHP começa com um cifrão "$". A variável pode ser facilmente inserida dentro de um texto.

Podemos concatenar um texto no outro por meio de um ponto, conforme abaixo:

$var2 = "Texto: " . $var1;

Usamos aqui o comando echo para enviar a estrutura HTML, mas existe outro jeito de fazer isso, no próximo passo.

## 004 - Gerando a estrutura HTML com as tags PHP.

Aqui temos o jeito correto de como gerar o HTML por meio de um arquivo PHP.

As tags <?php ?> servem para delimitar qual trecho do arquivo vai ser executado pelo PHP, e qual trecho vai ser simplesmente retornado ao cliente. Essas marcações facilitam o trabalho do desenvolvimento da página, dividindo aquilo que é o código PHP e o conteúdo HTML.

Se a intenção é somente exibir o conteúdo de uma variável, é possível também usar as tags <?= ?>, deixando o script mais enxuto.

Vimos também a execução de funções própria do PHP, a primeira função para definir o timezone, e outra para gerar uma data.

## 005 - Inserindo arquivos CSS no projeto.

Podemos inserir arquivos como CSS, Javascript, imagens e outros e referencia-los dentro do HTML de forma simples com o PHP.

## 006 - Fazendo o redirecionamento para outra página.

É possível e simples fazer o redirecionamento entre páginas, basta referenciar o arquivo de destino no link. Para voltar ao index, referenciar com barra "/" é o suficiente.

## 007 - Usando o include

Como vimos anteriormente, o head esta duplicado tanto na página index quanto na second-page. Para facilitar na organização e manutenção das páginas, além de reaproveitar um mesmo trecho de código, podemos fazer uso do include().

Para usar-lo deve inserir o destino do bloco no qual vai ser incluido. Tem algumas formas de fazer isso:

- Por navegação
include("./views/includes/head.php");
include("../views/includes/footer.php");

- Inserindo o caminho a partir da raiz
include("views/includes/footer.php");

## 008 - Melhorando o reaproveitamento com variáveis nos blocos incluídos.

É possível declarar uma varíavel no arquivo base e essa variável ser acessível também no bloco incluído. Esse recurso permite o reaproveitamento em situações em que o que alterna no bloco é somente o título ou um texto específico.

## 009 - Enviando requisição por meio de POST

Para enviar atributos por meio de formulários (método POST), o PHP disponibiliza a variável $_POST. Essa é uma das diversas variáveis que a linguagem disponibiliza para controle e gerenciamento das requisições. 

A variável $_POST é um array com chaves identificadoras, e o atributo vindo do HTML é acessível desta forma:
- $_POST['nome do atributo']

## 010 - Selecionando o bloco a ser exibido

No PHP é possível decidir se o bloco deve ser exibido ou não. Ao usar o comando IF (também serve para outros comandos), e usar a tag de fechamento do PHP "?>", o conteudo HTML fica condicionado àquele IF. Se a condição for verdadeira, o conteúdo HTML é exibido, caso contrario, não é exibido.

