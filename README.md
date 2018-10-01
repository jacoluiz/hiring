# Consumir api do Hacker News
Teste feito para a empresa [Fluxo Ti](http://fluxoti.com/), para a vaga de programador em php/Laravel.

#Como instalar!
**1. Primeiramente você vai precisar ver verificar se o [php](http://php.net/) e se o [composer](https://getcomposer.org/) estão instalados em sua maquina e se o [php](http://php.net/) está na versão 7.0 ou maior.

2. Clone o repositório para sua maquina**

git clone https://github.com/jacoluiz/hiring.git**

**3. Navegue até dentro da pasta criada pelo comando acima e instale o composer**

composer install

Casso tenha sucesso na instalação ira criar uma nova pasta chamada *vendor* na pasta raiz

**4. Gere o arquivo .env e a key para o php**

cp .env.example .env

php artisan key:generate

**5. Se tudo deu certo você já pode acessar executor o projeto com o servidor integrado do php**

php artisan serve
