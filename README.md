apilumen

API simples desenvolvido em Lumen 5.8.

Ao rodar esse projeto, será possível consumir uma API que se loga em um sistema para consumir busca de medicamentos. A estrutura da API foi desenvolvida camadas para se tratar melhor os dados, onde o Controller só recebe os dados e envia para uma classe de Service para tomar as decisões. Na Service é feito o envio dos dados para realizar Validação em suas devidas classes de Validações, enviado dados para classes de Repository para se interagir com banco de dados, e após tudo ser salvo no banco de dados, é devolvido para a interface através da API a resposta de sucesso, ou os dados solicitados caso seja uma requisição do tipo GET.

Para rodar esse projeto, é necessário ter instalado:

- Git;
- Composer;
- PHP 7.1 >;
- Mysql;

Instalação

- git clone git@github.com:fmontilla/apilumen.git
- Entrar na pasta do projeto via terminal e dar permissão 777 para a pasta storage
- Entrar na pasta do projeto via terminal e rodar o comando composer install
- Configurar no arquivo .env os dados de conexão ao banco de dados
- Rodar no terminal o comando php artisan migrate --seed
- Rodar o comando php artisan serve para iniciar o servidor da aplicação ou configurar a aplicação para rodar encima de outro servidor, por exemplo nginx, xampp, wamp, etc

Na raiz da aplicação há um arquivo para importar no Postman para realizar teste do consumo da API.
No consumo da roda de busca de medicamentos, coloquei uma validação para sempre informar todos os campos de busca. Realizei dessa maneira apenas para mostrar um pouco de validação, mas poderia ter desenvolvido sem a necessidade de informar na url todos os campos de busca.
