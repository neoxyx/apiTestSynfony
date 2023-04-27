# Api Test Symfony

#Iniciar el servidor local con el comando del cli de symfony server:start

#Endpoints:

#-Para registrar: http://127.0.0.1:8000/api/register pasando en el body el json {
    "email": "dsdffsd@gmail.com",
    "password": "pass1234"
}
#-Para loguearse y obtener el token http://127.0.0.1:8000/api/login_check pasando en el body el json {
    "username": "dsdffsd@gmail.com",
    "password": "pass1234"
}
#-Para listar los usuarios:  http://127.0.0.1:8000/api/user donde ya se debe pasar el token en Authorization como Bearer Token de un usuario logueado
