# Light

Uma API simples para otimização de imagens feita em PHP, construída no intuito de aprendizado do framework Laravel e Linguagem PHP

## Utilização

Post: images/optimize

Irá retornar um JSON contendo a chave utilizada no otimização e o Data URI já processado, é preciso enviar o Data URI original e a chave a ser utlizada

```json 
{
  "key": "sua chave",
  "base64": "Data URI"
}
```

## Desenvolvimento

Para executar o projeto após clonar é nescessário possuir o docker instalado então execute

` docker compose up -d`

Na pasta do projeto, após iniciado instale as dependencias do composer utilizado

` composer install `

Tambem é nescessario executar comando de geração da chave de api

`php artisan key:generate`

Após duplicar normalmente a .env tambem é nescessário criar uma env de testes com o nome 

` env.testing`

nescessário definir o APP_ENV como testing dentro do arquivo

forneça tambem a chave da api do tinypng em ambas as ENVs

para fim de teste use

` php artisan test --env=testing`

Na pasta do projeto
