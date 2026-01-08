## Descargar bootstrap

### Instalar la libreria

```
composer require laravel/ui:*
```

### Añadir bootstrap con artisan

```
php artisan ui bootstrap
```

### Instalar dependencias y compilar

```
npm install
npm run build
```

### Crear Controlador de recursos

```
php artisan make:controller PostController -r
```

Això crearà el fitxer app/Http/Controllers/PostController.php amb els mètodes index, create, store, show, edit, update i destroy.

## 📝 Registro de Cambios y Funcionalidades

A continuación se detalla el trabajo realizado en el proyecto hasta el momento:

### 1. Configuración del Entorno y Diseño

-   **Bootstrap**: Se ha integrado Bootstrap mediante `laravel/ui` para el diseño responsivo.
-   **Compilación de Assets**: Configuración de Vite/Mix para compilar estilos y scripts (`npm run build`).

### 2. Base de Datos (Migraciones)

Se han creado las tablas necesarias para el funcionamiento del blog:

-   **Users**: Tabla por defecto de Laravel para gestión de usuarios.
-   **Posts**: Tabla para almacenar los artículos del blog (`titol`, `contingut`, `data`).
-   **Relaciones**: Se añadió la clave foránea `usuari_id` a la tabla `posts` para vincular autores con sus artículos.
-   **Comentaris**: Tabla para gestionar los comentarios de los posts.

### 3. Modelos (Eloquent ORM)

Se han definido los modelos para interactuar con la base de datos:

-   `User`: Modelo de usuario.
-   `Post`: Modelo para los artículos.
-   `Comentari`: Modelo para los comentarios.

### 4. Controladores

-   **PostController**: Controlador de recursos (Resource Controller) que gestiona las operaciones CRUD para los posts (index, show, create, store, edit, update, destroy).
-   **LoginController**: Gestión de la autenticación de usuarios.

### 5. Seeders (Datos de Prueba)

Se han creado seeders para poblar la base de datos con información inicial:

-   `UsuariosSeeder`: Crea un usuario administrador por defecto.
-   `PostsSeeder`: Genera posts de prueba asociados a usuarios.
-   `DatabaseSeeder`: Orquesta la ejecución de los seeders anteriores.

### 6. Rutas

-   Se han configurado las rutas web para el recurso `posts`, permitiendo el acceso a las vistas de listado y detalle.
