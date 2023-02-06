Para empezar entrar en C:\xampp\apache\conf\httpd.conf

y cambiar el httpd en la linea 250 mas o menos
poner la ruta de el examen(public)

ejemplo: C:\xampp\htdocs\EjercicioExamen\public

---

-comandos para la bd
crear modelo
php artisan make:model (Nombre)

-crear modelo de dos tablas
Primero se crean los modelos y las migraciones de las dos tablas a relacionar
php artisan make:model (NombreNombre)
php artisan make:migration (create_NombreNombre_table)

luego dentro de los modelos y migraciones hacer (belogs to etc)

-crear migraciones
php artisan make:migration (create_Nombre_table)

-crear seeder
php artisan make:seeder (NombreSeeder)

poner dentro del seeder todos los modelos
use App\Models\Nombre;
use App\Models\Nombre;
use App\Models\Nombre;
use App\Models\NombreNombre;

-crear factories
php artisan make:factory (NombreFactory)

en el factori de las tablas combinadas hay que poner los modelos de las dos tablas
use App\Models\Nombre;
use App\Models\Nombre;

-crear controller
php artisan make:controller (NombreController)
poner el modelo dentro del controller
use App\Models\Nombre;

-subir BD
primera vez (php artisan migrate --seed)
php artisan migrate:fresh --seed

-crear midelware
php artisan make:middleware (NombreMidelware)

se usa para hacer comprobaciones entre las pantallas
ejemplo()

-editar web.php
añadir los controllers necesrios

use App\Http\Controllers\NombreController;
use App\Http\Controllers\NombreController;

---

# laravel

## archivos:

### imágenes:

-   Laravel-Comandos.png
    Todos los comandos de artisan y laravel
-   Laravel-Relaciones.png
    Tabla con funciones de relaciones de larave (hasMany, belongsTo...)

### pdf:

-   Laravel-BD-y-autenticacion.pdf
    SI PIDE AUTENTICACIÓN HAY QUE HACER ESTO PRIMERO
-   Laravel-Ejemplo-tabla-alumnos.pdf
    Casi todos los comandos y cosas que puede pedir
-   Laravel-Resumen-ejemplo.pdf
    Ejemplo de modelo, migración, rutas... para una tabla
-   Laravel-Middleware.pdf
    Todo lo de middleware paso a paso
-   Laravel-Routes-y-Controller.pdf
    Resumen con todos los tipos de rutas y métodos para CRUD
