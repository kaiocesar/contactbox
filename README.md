# ContactBox

Esse é a API backend do projeto contactbox

#### instalação
Entrar no container docker e executar o comando `composer install`

#### configuração do ambiente
crie a base de dados no mysql e após isso crie as variaveis de ambiente para a app conectar com a base de dados.
são elas:

`DB_HOST=127.0.0.1`

`DB_PORT=3306`

`DB_DATABASE=databasename`

`DB_USERNAME=username`

`DB_PASSWORD=password`


#### execução
Execute a migrate
`php artisan migrate`

e

`php artisan serve` 


#### consumo dos endpoint via curl
`php artisan route:list`
