# TaskFlow (Lista de Tarefas)

## Sobre

Aplicação de lista de tarefas desenvolvido com **PHP**, **Laravel** e **MySQL** para a disciplina de Laboratório de Programação **Full Stack** do curso de **Engenharia de Software** da Univassouras.

## Passos:

* Fase 1 (instalações):
    * Instalação do Laragon.
    * Instalação do DBeaver.

* Fase 2 (modelos e banco de dados):
    * Criar projeto:
    ```
    composer create-project laravel/laravel nome-do-app
    ```
    * Entrar na pasta do projeto:
    ```
    cd nome-do-app
    ```
    * Modificar o arquivo **env**:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=taskflow
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    * Criar modelo:
    ```
    php artisan make:model NomeDoModelo -m
    ```
    * Fazer migração:
    ```
    php artisan migrate
    ```
    * Caso as tabela sejam criadas manualmente:
    ```
    php artisan key:generate
    ```

* Fase 3 (controladores):
    * Criar controller (versão web):
    ```
    php artisan make:controller TaskController --resource --model=NomeDoModelo
    ```
