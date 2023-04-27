# Api Test Symfony
Configurar el .env segun su base de datos
Lanzar migraciones con el comando: php bin/console doctrine:migrations:migrate
Crear llaves publicas y privadas en el proyecto para el JWT con el comando: php bin/console lexik:jwt:generate-keypair

Iniciar el servidor local con el comando del cli de symfony server:start

Endpoints:

-Para registrar: tipo POST http://127.0.0.1:8000/api/register pasando en el body el json {
    "email": "dsdffsd@gmail.com",
    "password": "pass1234"
}
-Para loguearse y obtener el token tipo POST http://127.0.0.1:8000/api/login_check pasando en el body el json {
    "username": "dsdffsd@gmail.com",
    "password": "pass1234"
}
-Para listar los usuarios tipo GET http://127.0.0.1:8000/api/user donde ya se debe pasar el token en Authorization como Bearer Token de un usuario logueado
-Para obtener datos del logueado GET http://127.0.0.1:8000/api/profile donde se debe pasar el token en Authorization como Bearer Token de un usuario logueado
