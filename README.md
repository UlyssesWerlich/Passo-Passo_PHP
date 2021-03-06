# Passo a Passo - PHP

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

## 019 - Excluindo uma pessoa e fazendo redirecionamento. Enviando mensagens por sessão.

Para gerar a ação de exclusão, fizemos algo um pouco diferente. Em vez de criar e retornar uma página para exclusão, redirecionamos para a página de lista por meio da função head(). A view excluir serve apenas para acionar a função de excluir.

O lado ruim de usar o head é que a função gera uma nova requisição, apagando as variáveis até então instanciadas, o que impossibilita o envio de mensagens por meio delas.

Umas das opção é enviar a mensagem (ou uma chave que referencia essa mensagem) por meio da URL, sendo acessível pelo array $_GET.

A opção que escolhemos foi de usar a variável $_SESSION. Essa variável é usada para gerar sessões com os clientes HTTP, permitindo assim um serviço de autenticação, mas ela pode ser usada para enviar variáveis entre as requisições.

Antes de fazermos uso da $_SESSION, precisamos acionar a função session_start(), abrindo assim uma sessão pra aquele cliente. 

## 020 - Criando método de atualização, melhorando serviço de mensageria

Para finalizar o CRUD, criamos aqui o método de alteração, junto com as views. Para isso, enviamos os dados do contato por meio de um formulário, mas o id do contato enviamos por parâmetro da URL, sendo acessado por meio do $_GET.

Implementamos também uma melhoria no serviço de mensageria, com a inserção de sub-mensagens e tipo de mensagens. 

## 021 - Reaproveitando o formulário usando ?? ''

Criamos anteriormente um formulário para a alteração de contato. Porém temos uma duplicação do formulário em cadastro e alteração.

Podemos tranquilamente separar o conteúdo HTML referente ao formulário e fazer a inclusão tanto em alteração e em cadastro. Esse formulário pode ser exibido com ou sem a instanciação de um objeto $pessoa, e para isso usamos a diretiva " ?? '' " para tornar os atributos do objeto opcional. 

## 022 - Implementando a mensageria com uso de objetos

Fizemos aqui uma pequena implementação na mensageria. Estavamos até então trabalhando com arrays, mas podemos obter o mesmo resultado usando objetos.

Na view confirmacao-alteracao, usamos o casting para gerar o objeto. Dessa forma, o PHP cria automaticamente o objeto a partir do array. Já na view confirmacao-cadastro, criamos o objeto a partir do stdClass(). Com isso, é possível definir manualmente a estrutura do objeto.

## 023 - Criação da classe Pessoa

No PHP é possível criar classes e implementar a programação orientada a objetos.

Nesse caso, criamos a classe Pessoa, que mais pra frente vai compor o processo do nosso sistema.

Também definimos os atributos, o tipo de acesso dos atributos, e também definimos os métodos getters e setters. Nesse ponto, não definimos o tipo do objeto, visto que não há necessidade de definir os tipos num objeto dentro do PHP.

É possível também fazer heranças e polimorfismo no PHP.

## 024 - Inserindo construtores na classe Pessoa

Criamos aqui os métodos construtores da classe Pessoa. Tem duas formas de fazer isso, a primeira é usando o nome __construct, e usando o nome da classe.

É possível criar métodos destrutores (__destruct()), que são executados quando o objeto da classe é destruída

(no passo anterior, foi criado equivocadamente a classe Aluno, mas vamos seguir como sendo a classe Pessoa)

## 025 - Inserindo atributos tipados na classe Pessoa

Por fim, podemos definir também tipos para os atributos da classe Pessoa. 

Existem 4 tipos:
- string
- int
- float
- bool

Podemos definir também se um atributo é opcional (possível ser nulo), através do ponto de interrogação.

Para facilitar o manuseio da classe, criamos o método set(), que preenche os atributos a partir de um array chaveado, o que é útil para trabalhar com a variável $_POST

## 026 - Usando a Classe Pessoa para criação e alteração de registros

Usamos nossa classe Pessoa para fazer a inserção e alteração de registros no banco de dados.

Instanciamos a classe Pessoa após o recebimento do formulário, e enviamos para o serviço não mais as informações soltas, mas sim o objeto pronto. Caso haja algum erro de validação, é lançado um TypeError no sistema que é capturado pelo try/catch. Os dados recebidos são averiguados e é dado um retorno ao cliente. Com isso, continuamos com a mesma ideia de validação.

## 027 - MVC: Iniciando a construção da estrutura MVC

Até esse momento o nosso projeto está funcionando e está estruturado, porém a estrutura que temos foge do padrão MVC. As views estão sendo responsável pela recepção da requisição, pela instanciação, pelo acionamento de métodos do service e a tratativa de erros. Essas responsabilidades são normalmente atribuídas a camada controller. Outra questão é que qualquer um pode ter acesso a diversos arquivos do nosso sistema, o que também é ruim.

Para se enquadrar dentro do padrão MVC, precisamos primeiramente de um arquivo responsável por receber todas as requisições. Mantivemos o nome dele de index.php, e esse arquivo é responsável por receber a URL requisitada e a partir daí instanciar o controller responsável ($_GET['c']) e o método desejado ($_GET['m']).

Temos dois controllers, o home e o pessoa. O home fica responsável pela página inicial, enquanto o controller pessoa fica responsável pelas ações que envolvem o recurso "pessoa".

Como teste, implementamos apenas o acesso a view pessoa.cadastro.php, sem qualquer ação no banco de dados.

Importante dizer que esse é um exemplo básico e para fins didáticos, e é possível encontrar facilmente exemplos mais complexos e com mais recursos.

## 028 - MVC: Implementado os métodos de CRUD. Deletado views inutilizadas

Adequamos o restante do nosso sistema para o padrão MVC. 

Com isso algumas views, que assumiam total papel de controllers, ficaram inutilizadas e foram excluídas.

Podemos fazer diversas implementações para o nosso sistema, prepara-lo para tratativas de outros erros enfim, enriquece-lo.

Muito obrigado por seguir esse passo a passo simples do PHP.