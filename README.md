## Practica Symfony

Este repositorio contiene la prueba técnica para `viajes para ti`.

### Estructura

A parte del esqueleto generado por Symfony se ha creado un `Controller`, `Form`, `Entity` y `Repository` para el objeto *supplier* y una `Entity` y `Repository` para el objeto *supplier_enum*, que sirve para navegar "dinamicamente" los tipos de proveedores disponibles y los limita a, por ahora, `Hotel, Pista y Complemento`.

También se han añadido las templates con `twig` para las 3 páginas disponibles: añadir, editar y el índice.

El css utilizado se encuentra en `public/css`.

Las rutas, que se encuentran en `config/routes.yaml` son las siguientes:

| Nombre              | Ruta                  | Controller | Metodo      |
|---------------------|-----------------------|------------|-------------|
| app_supplier_index  | /supplier             | index      | [GET]       |
| app_supplier_create | /supplier/add         | create     | [GET, POST] |
| app_supplier_update | /supplier/update/{id} | update     | [GET, POST] |
| app_supplier_delete | /supplier/delete/{id} | delete     | [POST]      |

La navegación es bastante sencilla e indicada con botones de colores bastante intuitivos.

Adicionalmente, a parte de los metodos CRUD, ofrece una opción de filtrado por proveedores activos y por tipo.

### Contenerización

La aplicación está hecha para poder desplegarse en un contenedor independiente o orquestrarse con Kubernetes o Docker compose.

Para este ejemplo se proporciona lo necesario para desplegar la aplicación con Docker.

La imagen base es `php 8.2 con Apache`, por lo que es necesario añadir los ficheros de configuración de Apache.

- server.conf: se define el ServerName y dónde encontrar la aplicación

```conf
ServerName localhost

<VirtualHost *:80>
    DocumentRoot /var/www/html/public
    <Directory /var/www/html/public>
        AllowOverride All
        Order Allow,Deny
        Allow from All
    </Directory>
</VirtualHost>
```

- .htaccess: permite que el routing de Symfony se aplique al servidor Apache

```conf
<IfModule mod_rewrite.c>
    Options -MultiViews
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ index.php [QSA,L]
</IfModule>
```

### Docker Compose

En el ficher `docker-compose.yml` se definen los dos servicios:
- **web**: es el servidor Synfony, expone su puerto 80 accesible desde el 8000 y requiere la base de datos para funcionar.
- **db**: es la base de datos MySQL. Se han puesto las credenciales demo de `synfony` y se ha añadido al entrypoint el ficher `init.sql`, que viene a ser la traducción a SQL de la migración hecha por synfony y se introducen los tipos de proveedor por defecto.

Para probar la aplicación es suficiente con hacer:

```shell
docker compose build
```

```shell
docker compose up -d
```

> Es posible que la base de datos tarde en iniciar o hasta se bloquee, en ese caso hay que volver a crear ambos contenedores `docker compose down` y `docker compose up -d`.