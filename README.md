## Proyecto de Estancias II - SVAM International México

Este repositorio contiene el trabajo realizado como parte de las Estancias II para SVAM International México. El proyecto se enfoca en el rediseño y optimización de la interfaz de usuario para la gestión de leads. 

### Desarrollador
- **Nombre:** César Zavala López
- **Institución:** Universidad Politécnica de México

### Tecnologías Utilizadas
- **Laravel 10:** El backend del proyecto está desarrollado en Laravel 10, un framework de PHP que facilita la creación de aplicaciones web robustas y escalables.
- **Bootstrap 5:** La interfaz de usuario se ha diseñado utilizando Bootstrap 5, un framework de diseño web que agiliza y facilita el desarrollo de interfaces modernas y responsivas.

### Instrucciones de Despliegue

1. Clona el repositorio:
    ```bash
    git clone https://github.com/CesarZL/LEADS.git
    cd LEADS
    ```

2. Instala las dependencias:
    ```bash
    composer install
    ```

3. Configura el archivo de entorno:
    ```bash
    cp .env.example .env
    ```

    - Completa la configuración del archivo `.env` con la información de tu entorno y base de datos.

4. Genera la clave de aplicación:
    ```bash
    php artisan key:generate
    ```

5. Ejecuta las migraciones y semillas:
    ```bash
    php artisan migrate --seed
    ```

6. Inicia el servidor de desarrollo:
    ```bash
    php artisan serve
    ```
