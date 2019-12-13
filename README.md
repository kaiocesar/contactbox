# ContactBox

Esse é a API backend do projeto contactbox

#### instalação
`composer install`

#### configuração do ambiente
crie a base de dados no mysql e após isso crie as variaveis de ambiente para a app conectar com a base de dados.
são elas:

`LARA_DB_HOST=127.0.0.1`

`LARA_DB_PORT=3306`

`LARA_DB_DATABASE=databasename`

`LARA_DB_USERNAME=username`

`LARA_DB_PASSWORD=password`


#### execução
Execute a migrate
`php artisan migrate`

e

`php artisan serve` 


#### consumo dos endpoint via curl
`php artisan route:list`
