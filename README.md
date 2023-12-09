## Passo a passo para rodar o projeto
Clone o projeto
```sh
[git clone https://github.com/especializati/curso-de-laravel-10.git laravel-10](https://github.com/Ygor-Machado/forum.git)
```
```sh
cd forum/
```


Crie o Arquivo .env
```sh
cp .env.example .env
```

Dê o comando
```sh
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```



Gere a key do projeto Laravel
```sh
sailt art key:generate
```

Agora rode as migrations
```sh
sail art migrate
```

