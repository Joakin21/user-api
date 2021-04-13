# 1. Instalación
Abrir la terminal de linea de comandos y realizar las siguientes acciones:
* Ejecutar: git clone https://github.com/Joakin21/user-api.git
* Navegar a la carpeta user-api
* Ejecutar: composer install
* Ejecutar: php artisan migrate
* Ejecutar: php artisan serve

# 2. Usos de la API REST

## 2.1. Endpoint /login
## 2.1.1. Caso en que las credenciales son correctar
##### Petición:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/login/1.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/login/2.PNG)
## 2.1.2. Caso en que las credenciales son incorrectas
##### Petición:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/login/3.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/login/4.PNG)
## 2.2. Endpoint /new
## 2.2.1 Ingreso de atributos mínimos del usuario
##### Petición:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/new/1.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/new/2.PNG)

## 2.3. Endpoint /Me para la obtención de un usuario
## 2.3.1. Caso en que el token ingresado es correcto
##### Petición:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-get/1.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-get/2.PNG)
## 2.3.2. Caso en que no se ingresa el token de autorización
##### Petición:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-get/3.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-get/4.PNG)
## 2.3.3. Caso en que el token de autorización es incorrecto
##### Petición:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-get/5.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-get/6.PNG)

## 2.4. Endpoint /Me para la actualización de un usuario
## 2.4.1. Caso en que el token ingresado es correcto
##### Petición (Headers):
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-put/1.PNG)
##### Petición (Body):
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-put/7.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-put/2.PNG)
## 2.4.2. Caso en que no se ingresa el token de autorización
##### Petición:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-put/3.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-put/4.PNG)
## 2.4.3. Caso en que el token de autorización es incorrecto
##### Petición:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-put/5.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-put/6.PNG)

## 2.5. Endpoint /Me para la Eliminación de un usuario
## 2.5.1. Caso en que el token ingresado es correcto
##### Petición:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-delete/1.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-delete/2.PNG)
## 2.5.2. Caso en que no se ingresa el token de autorización
##### Petición:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-delete/3.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-delete/4.PNG)
## 2.5.3. Caso en que el token de autorización es incorrecto
##### Petición:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-delete/5.PNG)
##### Respuesta:
![picture](https://raw.githubusercontent.com/Joakin21/user-api/master/working-api-rest-images/me-delete/6.PNG)