## About LoLShowCode
 LoLShowCode é um aplicativo criador em PHP usando LARAVEL 9
tem como finalidade buscar localização por cep



##Link para download de toda a aplicação [inclue a pasta VENDOR/NODEMODULES]
https://we.tl/t-FLpbkViH94



<br/>
composer require laravel/sail --dev [caso ainda não esteja instalada na maquina]<br/>
php artisan sail:install | para instalar a imagem<br/>

./vendor/bin/sail up -d| para subir o DOcker a imagem<br/>
./vendor/bin/sail down| terminar o DOcker a imagem<br/>


./vendor/bin/sail composer install | instalar o vendor do Laravel<br/>
./vendor/bin/sail npm install | instalar as libs do NPM<br/>
./vendor/bin/sail artisan migrate | Configurar o banco<br/>
./vendor/bin/sail artisan test | Executar os testes [phpunit]<br/>

./vendor/bin/sail npm run dev| rodar o VITE<br/>
./vendor/bin/sail npm run build| buildar os assets<br/>


## routes
Links para as rotas<br/>
get http://localhost:9000/<br/>

## routes APIs
get http://localhost:9000/api/ddds<br/>
get http://localhost:9000/api/ddds/011/017<br/>





## APP STACK
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<a href="https://laravel.com/docs/9.x/sail#main-content">TUTORIAL OFFICIAL SAIL LARAVEL9</a>

- [laravel Installer 4.2.10]<br/>
- [laravel 9]<br/>
- [Vue Js 3.0 + Axios]<br/>
 -[PHP Version 8]<br/>
 -[Apache/2.4.41] não utilizado/plataforma nodejs<br/>
 -[Composer version 1.10.1]<br/>


## Desenvolvido por 
Bruno de Lima
brunodsstudio@gmail.com
19 9 7102-9093
