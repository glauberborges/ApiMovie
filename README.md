![ApiMovie](capa.png)

<p align="center">
  
  <a href="https://github.com/glauberborges/ApiMovie/issues" style="text-decoration: none">
    <img alt="Issues" src="https://img.shields.io/github/issues/glauberborges/ApiMovie?color=34CB79" />
  </a>
  <a href="#" style="text-decoration: none">
    <img alt="GitHub top language" src="https://img.shields.io/github/languages/top/glauberborges/ApiMovie?color=34CB79" />
  </a>
</p>

<p align="center">
  <a href="#" target="_blank">
    <img alt="by Glauber Borges" src="https://img.shields.io/badge/%20by-Glauber_Borges-informational?color=34CB79">
  </a>
  <a href="https://github.com/glauberborges" target="_blank" >
    <img alt="Github - Glauber Borges" src="https://img.shields.io/badge/Github--%23F8952D?style=social&logo=github">
  </a>
  <a href="https://github.com/glauberborges" target="_blank" >
    <img alt="Linkedin - Glauber Borges" src="https://img.shields.io/badge/Linkedin--%23F8952D?style=social&logo=linkedin">
  </a>
  <a href="mailto:glauber.borges1@gmail.com" target="_blank" >
    <img alt="Email - Glauber Borges" src="https://img.shields.io/badge/Email--%23F8952D?style=social&logo=gmail">
  </a>
  <a href="https://api.whatsapp.com/send?phone=15996121224" target="_blank" >
    <img alt="Fale comigo no whatsapp - Glauber Borges" src="https://img.shields.io/badge/Whatsapp--%23F8952D?style=social&logo=whatsapp">
  </a>
</p>



[ 💻 Projeto](#-projeto) |
[ 🗂 Banco de Dados](#-banco-de-dados) |
[ 🚀 Tecnologias](#-tecnologias) |
[ 🛠 Ferramentas](#-ferramentas) |
[ ⚙ Instalação](#-instalacao) |
[ 📝 Como usar](#-como-usar) 

## 💻 Projeto

**ApiMovie** é uma api para cadastro de títulos de filmes.

## 🗂 Banco de Dados
![ApiMovie](database.png)


## 🚀 Tecnologias
Para esse projeto foi usado as seguintes tecnologias:

- [Laravel](https://laravel.com)
- [Passport](https://laravel.com/docs/7.x/passport)
- [Mysql](https://github.com/laravel/passport)

## 🛠 Ferramentas
- [PhpStorm](https://www.jetbrains.com/pt-br/phpstorm/)
- [Postman](https://www.postman.com/)

## ⚙️ Instalacao

##### Clone o repositório
```bash
  $ git clone https://github.com/glauberborges/ApiMovie.git
```

#### Instale as dependências
```bash
  $ composer install
```


#### Configurando o .env
```bash
  $   Renomeie/Copia o .env.example para .env e configure o banco de dados
  
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE={DATABASE}
  DB_USERNAME={USER}
  DB_PASSWORD={SENHA}
  
```

#### Migration
```bash
  $ php artisan migrate
```


#### Seed
```bash
  $ php artisan db:seed
```

#### Gerar a key
```bash
  $ php artisan key:generate 
```

#### Passport
```bash
  $ php artisan passport:install
```

#### Servidor
```bash
  $ php artisan serve
```

```bash
  Acesse http://127.0.0.1:8000
```

## 📝 Como usar

Para acessar as rotas da api você ira usar o endereço ``http://127.0.0.1:8000/api``.

Todos os methodos e rotas estão em nossa documentação que pode ser acessada nesse link   [Documentação](https://documenter.getpostman.com/view/1190868/SzzgAKR2?version=latest)

Para teste recomendamos o uso do [Postman](https://www.postman.com/), caso queria importa o json com as rotas pode usar o arquivo [postman_collection](ApiMovie.postman_collection.json) que está na raiz do projeto.

---
