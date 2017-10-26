# api-rest-laravel
Desenvolvimento de uma api restfull com laravel 5.4 para estudo

### Como usar:

**1 =>** Altere os dados do banco de dados no arquivo .env
**2 =>** Pelo terminal entre na pasta do projeto e digite o comando **php artisan migrate** para construir o banco de dados
**3 =>** Execute o comando **php artisan serve** para levantar o servidor. 

### Rotas:

**GET - Listar todos os usuários:** /api/users
**GET - Listar usuário especifico:** /api/users/{id}
**POST - Cadastrar usuário:** /api/users
**PUT - Alterar dados do usuário:** /api/users/{id}
**DELETE - Excluir usuário:** /api/users/{id}

