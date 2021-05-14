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

