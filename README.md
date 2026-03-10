# Docker: Utilizacao Pratica no Cenario de Microsservicos

Desafio da DIO - Fork do projeto original de Denilson Bonatti.

## Sobre o Projeto
Aplicacao PHP que insere dados em um banco MySQL,
com balanceamento de carga via NGINX entre 3 instancias.

## Melhorias Implementadas
- index.php: variaveis de ambiente no lugar de IP fixo
- Dockerfile-php: imagem dedicada para a aplicacao PHP
- docker-compose.yml: orquestracao completa dos servicos
- banco.sql: criacao automatica do banco e tabela
- nginx.conf: comentarios explicando a configuracao

## Arquitetura
[ NGINX Load Balancer :4500 ]
        |         |         |
  [php-app1]  [php-app2]  [php-app3]
        |         |         |
          [ MySQL :3306 ]

## Como Executar (requer Docker instalado)
```
docker-compose up -d
Acesse: http://localhost:4500
```

## Repositorio Original
https://github.com/denilsonbonatti/toshiro-shibakita
