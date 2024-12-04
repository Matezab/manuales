Este proyecto contiene la configuración necesaria para desplegar un servidor LAMP (Linux, Apache, MySQL, PHP) usando Docker, para servir una plataforma Moodle.

Requisitos Previos

-Docker y Docker Compose instalados en tu sistema.

-Acceso a la terminal y permisos para ejecutar comandos con sudo.

Estructura del Proyecto

moodle_proyecto/
├── docker-compose.yml
├── moodle/
│   └── config.php (opcional, se genera durante la instalación)
└── web/
    └── Dockerfile

Despliegue del Proyecto

-Clonar el ProyectoClona este repositorio a tu máquina local:

-git clone <URL_DEL_REPOSITORIO>

-cd moodle_proyecto

Construir e Iniciar los ContenedoresUtiliza Docker Compose para construir e iniciar los servicios:

-sudo docker-compose up -d

Este comando construirá la imagen del servidor LAMP y desplegará Moodle.

-Acceder a MoodleUna vez que los contenedores estén en ejecución, accede a Moodle desde tu navegador:

-http://localhost:8082

-Asegúrate de que el puerto 8082 no esté ocupado por otro servicio. Si lo está, puedes modificarlo en el archivo docker-compose.yml.

-Configurar MoodleSigue las instrucciones en el navegador para completar la configuración de Moodle, como establecer la conexión a la base de datos y crear un usuario administrador.
