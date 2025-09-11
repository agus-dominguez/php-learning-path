# PHP Learning Path

Una plataforma interactiva para aprender PHP a través de ejercicios prácticos, desde nivel básico hasta avanzado.

## Características

- Ejercicios de programación PHP organizados por nivel de dificultad
- Editor de código en línea con resaltado de sintaxis PHP
- Ejecución y validación en tiempo real del código
- Interfaz amigable e intuitiva
- Retroalimentación inmediata sobre los ejercicios

## Requisitos previos

- PHP 8.1 o superior
- Composer
- SQLite (o cualquier otra base de datos compatible con Laravel)
- Node.js y NPM (opcional, para desarrollo frontend)

## Instalación

Sigue estos pasos para configurar el proyecto en tu entorno local:

### 1. Clonar el repositorio

```bash
git clone https://github.com/tuusuario/php-learning-path.git
cd php-learning-path/project
```

### 2. Instalar dependencias

```bash
composer install
```

### 3. Configurar el entorno

Copia el archivo de ejemplo de variables de entorno y configúralo:

```bash
cp .env.example .env
php artisan key:generate
```

Edita el archivo `.env` para configurar la conexión a la base de datos. Por defecto, este proyecto usa SQLite:

```
DB_CONNECTION=sqlite
# Comenta o elimina las siguientes líneas si usas SQLite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

Para usar SQLite, crea un archivo de base de datos vacío:

```bash
touch database/database.sqlite
```

### 4. Ejecutar migraciones y seeders

```bash
php artisan migrate --seed
```

Este comando creará las tablas necesarias en la base de datos y poblará la tabla de ejercicios con ejemplos desde nivel básico hasta avanzado.

### 5. Permisos de almacenamiento (solo para entornos Unix/Linux)

```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

## Ejecución

### Servidor de desarrollo

Para iniciar el servidor de desarrollo:

```bash
php artisan serve
```

Ahora puedes acceder a la aplicación en: [http://localhost:8000](http://localhost:8000)

## Estructura del proyecto

- `app/Models` - Modelos de datos (Exercise, UserProgress)
- `app/Http/Controllers` - Controladores que manejan las peticiones
- `app/Http/Requests` - Clases de validación de formularios
- `database/migrations` - Migraciones para crear las tablas de la base de datos
- `database/seeders` - Seeders para poblar la base de datos con datos iniciales
- `resources/views` - Vistas Blade
- `resources/js` - Scripts JavaScript
- `routes` - Definición de rutas

## Uso de la plataforma

1. Navega a la página principal para ver el dashboard
2. Selecciona "Ejercicios" en la barra de navegación para ver la lista de ejercicios disponibles
3. Haz clic en un ejercicio para abrirlo
4. Escribe tu código PHP en el editor
5. Haz clic en "Ejecutar código" para comprobar tu solución
6. Recibirás feedback inmediato sobre si tu solución es correcta

## Solución de problemas

### El editor de código no funciona

Si experimentas problemas con el editor de código:

1. Asegúrate de que no hay bloqueadores de JavaScript en tu navegador
2. Intenta con otro navegador moderno (Chrome, Firefox, Edge)
3. Verifica la consola de desarrollador para ver errores específicos

### Problemas al ejecutar el código

Si encuentras errores al ejecutar tu código PHP:

1. Verifica que la función `exec()` no esté deshabilitada en tu entorno PHP
2. Asegúrate de que la carpeta `storage` tiene permisos de escritura

## Seguridad

Esta plataforma ejecuta código PHP proporcionado por el usuario. En entornos de producción, se recomienda:

1. Configurar un sandbox seguro para la ejecución de código
2. Limitar los recursos disponibles para la ejecución (tiempo, memoria)
3. Restringir las funciones y clases PHP disponibles

## Licencia

Este proyecto está licenciado bajo la licencia MIT - ver el archivo LICENSE para más detalles.

## Contacto

Si tienes preguntas o sugerencias, no dudes en abrir un issue en el repositorio.