## Pre-requisites
- Composer Version ^2.1.3
- PHP ^7.4
- MySQL Version 8.0.21
- Node Version ^12.22.1
- NPM Version 6.14.12
- Yarn Version ^1.22.10
- Git Version 2.24.3
## Setups
- git clone https://{ your username }@bitbucket.org/lexmeet/lexweb-kodego.git
- cd lexweb-kodego
- yarn install
- composer install
## ENV Setup
#### create .env file inside the root folder then copy .env.example content to .env
##### run "php artisan key:generate"
##### Node Setup
- NODE_PATH= your local node path / to check run "which node" in the terminal
## Database Setups
- open mysql then create lexweb database
- set to .env
- DB_DATABASE=lexweb
- DB_USERNAME= your sql username
- DB_PASSWORD= your sql password
## Terminal Commands
- php artisan serve
- yarn run watch
- open http://localhost:8000/ or http://127.0.0.1:8000/