# API de Cadastro de Pedidos de Compra

Esta é uma API RESTful desenvolvida com o framework PHP CodeIgniter e utiliza um banco de dados relacional MySQL. A API oferece funcionalidades para o cadastro de clientes, produtos e pedidos de compra.


Requisitos
•	PHP 7.x

•	MySQL

•	Composer


Instalação
1.	Clone o repositório para o seu ambiente local.

git clone https://github.com/seu_usuario/seu_projeto.git 

2.	Instale as dependências com o Composer.

cd seu_projeto composer install 

3.	Configure as credenciais do banco de dados no arquivo app/config/database.php.

4.	Rode as migrações para criar as tabelas do banco de dados.

php spark migrate 

5.	Inicie o servidor local.

php spark serve 

A API estará disponível em http://localhost:8080.


Endpoints

A API possui os seguintes endpoints:


Clientes

•	GET /api/clientes: Lista todos os clientes.

•	GET /api/clientes/{id}: Obtém detalhes de um cliente específico.

•	POST /api/clientes: Cria um novo cliente.

•	PUT /api/clientes/{id}: Atualiza um cliente existente.

•	DELETE /api/clientes/{id}: Deleta um cliente.


Produtos

•	GET /api/produtos: Lista todos os produtos.

•	GET /api/produtos/{id}: Obtém detalhes de um produto específico.

•	POST /api/produtos: Cria um novo produto.

•	PUT /api/produtos/{id}: Atualiza um produto existente.

•	DELETE /api/produtos/{id}: Deleta um produto.


Pedidos

•	GET /api/pedidos: Lista todos os pedidos.

•	GET /api/pedidos/{id}: Obtém detalhes de um pedido específico.

•	POST /api/pedidos: Cria um novo pedido.

•	PUT /api/pedidos/{id}: Atualiza um pedido existente.

•	DELETE /api/pedidos/{id}: Deleta um pedido.


Formato de Requisição

A API aceita requisições no formato JSON. Exemplo:

{

    "parametros": {
    
        "campo1": "valor1",
        
        "campo2": "valor2"
    
    }

}


Formato de Resposta

A resposta da API segue o padrão:

{ 

  "cabecalho": { 
  
    "status": 200,
    
    "mensagem": "Mensagem de status"
  
  }, 
  
  "retorno": { 
  
    // Dados consultados e/ou cadastrados
  
  } 

}


Tratamento de Erros

•	Códigos de status HTTP:

•	200: OK

•	201: Criado

•	400: Requisição inválida

•	401: Não autorizado

•	404: Não encontrado

•	500: Erro interno do servidor

•	Em caso de erro, a resposta conterá um campo erro com a mensagem correspondente.


Contribuindo

•	Faça um fork do repositório.

•	Crie uma nova branch com a sua funcionalidade: git checkout -b nova-funcionalidade.

•	Faça commit das suas alterações: git commit -m 'Adicionando nova              funcionalidade'.

•	Faça push para a branch: git push origin nova-funcionalidade.

•	Abra um pull request.


Licença

Este projeto está sob a licença MIT.



