## Semana del 19 - 23 de octubre del 2020 :mega::mega:
# PHP
Evolucionamos el proyecto **reread-php** a **reread-admin**. Para ello creamos un repositorio a partir de la importación del repo https://github.com/dannylarrea/reread-admin.git
- Modificamos el proyecto para que utilize el patrón de diseño MVC (utilizamos el desarrollo login-MVC hecho con Sergio).
- Utilizaremos también el desarrollo asociado a sesiones. Definiremos únicamente una variable de sesión ```$_SESSION['user']``` en la que guardaremos la variable ```$user``` inicializada a partir del objeto ```user```, el cual debe de contener, además de los atributos ya asignados (```email``` y ```password```) , los atributos:
    - Id
    - Name
- Importamos la base de datos para utilizar usuarios en la aplicación. Dentro de la carpeta **Materials** ubicada en el Moodle del módulo, se encuentra la base de datos a importar (**reread-admin.sql** ya contiene la sentencia ```CREATE DATABASE```).
