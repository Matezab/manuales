# manuales
Esto es un compendio de múltiples manuales utilizando AWS en entorno real

Este documento resume las cuatro prácticas realizadas para desplegar aplicaciones web utilizando Docker y servidores LAMP en instancias de AWS. Cada práctica está orientada a una aplicación específica: MediaWiki, WordPress, servidor LAMP y Moodle. A continuación se describen los procesos y funcionalidades de cada despliegue.

1. Despliegue de MediaWiki

MediaWiki es una plataforma que permite crear sitios web colaborativos estilo wiki. La instalación de MediaWiki se realizó en un entorno LAMP tradicional.

Funcionalidades:

-Plataforma wiki para documentación colaborativa.

-Interfaz amigable y funcionalidades integradas para editar y enlazar páginas.

Pasos Principales:

-Instalación de Apache, PHP, y MySQL.

-Descarga del paquete de MediaWiki y configuración del servidor para servir la página.

2. Despliegue de WordPress con Docker

WordPress es un sistema de gestión de contenidos (CMS) popular utilizado para crear sitios web y blogs. En esta práctica se desplegó WordPress utilizando contenedores Docker.

Funcionalidades:

-Sitio web completamente funcional basado en WordPress.

-Permite publicar entradas, crear páginas estáticas y gestionar plugins.

Pasos Principales:

-Configuración de Docker Compose para desplegar los servicios de WordPress y MySQL.

-Creación de volúmenes para almacenar datos de forma persistente.

-Configuración de puertos para acceder al sitio desde el navegador.

3. Configuración de un Servidor LAMP

El servidor LAMP (Linux, Apache, MySQL, PHP) fue configurado como base para desplegar aplicaciones web en diferentes proyectos.

Funcionalidades:

-Servidor HTTP (Apache) configurado para servir sitios web estáticos y dinámicos.

-MySQL configurado como base de datos para almacenar información de las aplicaciones web.

-PHP instalado para permitir la ejecución de código dinámico en el servidor.

Pasos Principales:

-Instalación de Apache, MySQL, y PHP.

-Configuración del servidor Apache para servir páginas desde el directorio /var/www/html.

-Creación y gestión de bases de datos para diferentes aplicaciones.

4. Despliegue de Moodle en Servidor LAMP con Docker

Moodle es una plataforma de gestión de aprendizaje (LMS) de código abierto que se usó en esta práctica para crear un entorno de aprendizaje online. Moodle fue desplegado sobre un servidor LAMP utilizando Docker.

Funcionalidades:

-Entorno completo de aprendizaje en línea con soporte para cursos, foros, tareas y evaluaciones.

-Gestión de usuarios, roles y actividades educativas.

Pasos Principales:

-Creación de un archivo docker-compose.yml para definir los servicios de MySQL, Apache/PHP, y Moodle.

-Configuración de la base de datos y directorios de Moodle para almacenar contenido y configuración.

-Instalación y configuración del cron de Moodle para tareas automáticas.

Resumen de Funcionalidades del Servidor LAMP:

-Apache: Servidor HTTP para servir sitios web.

-MySQL: Base de datos para almacenar información de MediaWiki, WordPress y Moodle.

-PHP: Lenguaje de programación para código del lado del servidor en las aplicaciones.

Docker: Herramienta para orquestación de contenedores, utilizada para WordPress y Moodle.

Consideraciones Finales

Cada una de estas prácticas contribuyó al despliegue de una aplicación específica sobre un servidor LAMP. Estas configuraciones permiten la gestión adecuada de sitios web y plataformas educativas, y cada una tiene sus propias necesidades de configuración y especificaciones técnicas para garantizar el buen funcionamiento del entorno.
