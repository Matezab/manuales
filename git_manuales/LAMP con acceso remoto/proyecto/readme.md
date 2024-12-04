Requisitos Previos

-Docker y Docker Compose instalados en tu sistema.

-Acceso a la terminal y permisos para ejecutar comandos con sudo.

Estructura del Proyecto

proyecto/
├── docker-compose.yml
├── pagina/
│   ├── index.php
│   ├── images/
│   │   ├── imagen1.jpg
│   │   ├── imagen2.png
│   │   └── ...
│   └── readme.md
└── web/
    └── Dockerfile

Despliegue del Proyecto

-Clonar el ProyectoClona este repositorio a tu máquina local:

-git clone <URL_DEL_REPOSITORIO>

-cd proyecto

Construir e Iniciar los ContenedoresUtiliza Docker Compose para construir e iniciar los servicios:

-sudo docker-compose up -d

Este comando construirá la imagen del servidor LAMP y desplegará la aplicación PHP.

Acceder a la Página WebUna vez que los contenedores estén en ejecución, accede a la aplicación desde tu navegador:

-http://localhost:8080

-Asegúrate de que el puerto 8080 no esté ocupado por otro servicio. Si lo está, puedes modificarlo en el archivo docker-compose.yml.