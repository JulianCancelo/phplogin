# Validación de usuarios y contraseñas en tiempo real con MySQL

Objetivo:

Desarrollar un sistema de login simple que se conecta a una base de datos MySQL para verificar la existencia del usuario y contraseña. Si la información es válida, se inicia una sesión y se redirige al usuario a una página específica. En caso contrario, se muestra un mensaje de error.

# Funcionamiento:

El usuario ingresa su nombre de usuario y contraseña en un formulario HTML.
El formulario envía los datos a un script PHP.
El script PHP se conecta a la base de datos MySQL utilizando la información de conexión especificada.
Se ejecuta una consulta SQL para buscar el usuario y contraseña en la tabla de usuarios.
Si el usuario y contraseña coinciden con un registro en la base de datos, se inicia una sesión y se redirige al usuario a una página específica (por ejemplo, inicio).
Si no se encuentra una coincidencia, se muestra un mensaje de error al usuario indicando que la información de login es incorrecta.
Componentes:

Formulario HTML: Contiene los campos para que el usuario ingrese su nombre de usuario y contraseña.
Script PHP: Procesa los datos del formulario, se conecta a la base de datos y valida la información de login.
Base de datos MySQL: Almacena la información de los usuarios, incluyendo nombre de usuario, contraseña y otros datos relevantes.
 # Tecnologías utilizadas:

HTML
PHP
MySQL
