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

## 011 - Informando campos faltantes com operação ternária

Aqui temos um caso simples de uso de operação ternária para retornar ao usuário os campos que faltam da requisição.

## 012 - Gerando uma tabela no HTML com arrays e o comando foreach

Da mesma forma com o IF, podemos fazer a replicação de um conteúdo HTML com o comando for/foreach. 

Primeiro declaramos um Array com as informações que serão inseridas na tabela e, para facilitar o trabalho, usamos as chaves de identificação "chave => valor". Com essas chaves, em vez de navegar pelo array com $array[0], interagimos por meio das chaves, ficando assim: $array['chave'];

## 013 - Consultando dados com filtro de arrays e Parametros de URL

Além do envio de parâmetros por formulários, também podemos mandar parâmentos por URL. Esses parâmetros são acessados por meio da variável $_GET, e funciona da mesma maneira que a variável $_POST.

Importante dizer que os nomes _GET e _POST não tem necessáriamente haver com os metódos GET e POST do HTTP. É possível enviar parâmetros tanto por formulário quanto url numa mesma requisição.

Aqui também vemos o uso da função filter, como no Java ou Javascript. Também existem outras funções como o map e o reduce, o que muda é somente a sintaxe.

## 014 - Gerando links dinâmicos

Nesse exemplo podemos ver que é possível gerar links dinâmicos para a nossa página de consulta.

## 015 - Fazendo a primeira inserção no banco de dados MySQL

Para fazer a primeira conexão com o banco de dados MySQL, não precisamos baixar extensão alguma, o PHP já vem com ela integrada.

Para acessar o banco de dados, primeiro temos que acessar o arquivo php.ini e descomentar (remover o caractere ";" do inicio da linha) a extensão da conexão mySQL. O PHP tem duas extensões para o MySQL, o mysqli e o pdo_mysql. Vamos usar a extensão pdo_mysql.

Podemos observar que alem do MySQL, tem conexão para outros bancos de dados, como o PostgreSQL e o Sqlite.

Para gerar a conexão, temos que gerar um objeto do tipo PDO, enviando como atributo as informações necessárias para a conexão, como nas linhas abaixo:

$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$pdo = new PDO("mysql:host=localhost;dbname=pessoas","root","COxinha2020@", $dsn_Options);

A variável $dsn_Options indica qual vai ser o comportamento do PHP se o comando MySQL falhar, se a falha vai ser ocultada, notifica em console ou vai ser lançada uma exceção.

Tendo o objeto PDO instanciado, usamos o método prepare() com a query pronta. Depois disso, usamos o execute(), enviando assim o comando para o banco de dados.

Importante que no MySQL já tenham sido criados o banco de dados e a tabela antes de qualquer operação no PHP.

## 016 - Criando o arquivo de serviço e melhorando a inserção de dados com bindParam()

Fizemos anteriormente nossa conexão com o banco de dados, e podemos melhorar bastante coisa ainda nela.

Primeiro criamos um arquivo exclusivo para gerar a conexão. Assim reaproveita a conexão em todo momento que o sistema precisar.

Também criamos um arquivo de serviço, onde vai guardar as funções de CRUD do sistema. Isso é importante para a divisão de responsabilidades, separando o que é view e o que é função de CRUD.

Outro ponto é o uso da função bindParam() para inserir os valores dentro da query. Isso impede a inserção de comandos do banco por meio das variáveis, garantindo assim mais segurança.

Alem do bindParam, existe a função bindValue(). A diferença dos dois é que o bindParam guarda o ponteiro da variável, enquanto o bindValue guarda o valor da variável em si.

## 017 - Listando do MySQL usando o método fetchAll()

Fizemos aqui a função de listar as pessoas do MySQL. O processo é parecido com o a função de salvar, tirando pelo último método, o fetchAll(). 

O fetchAll gera uma lista a partir do resultado da query. Outro comando conhecido é o fetch(), porém diferente do fetchAll, o fetch retorna uma linha da tabela por vez.

Podemos também definir que tipo de retorno queremos da consulta, se a lista vai ser de arrays, arrays com chaves, objetos com ou sem classe definida. Nesse caso, decidimos que o retorno vai ser um objeto anônimo.

O acesso aos valores mudam entre um array e objeto, como podemos ver na view lista. Como usamos um objeto, a forma de acesso aos seus atributos é assim:

$objeto->atributo

O mesmo acontece com um método do objeto:

$objeto->metodo()

## 018 - Consultando uma pessoa específica

Aqui fizemos o método de consulta por ID, retornando somente uma pessoa, por meio do método fetch().

