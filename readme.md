# Actividad Extracurricular (extracv)

## Descripción

Sistema que permite a alumnos registrar su participación en actividades extracurriculares y cargar la evidencia de su participación.
Estas actividades se crean por usuarios tipo administrador.

## Instalación

1. Clonar proyecto: `git clone `
2. Instalar dependencias de php: `composer install`
3. Crear llave de aplicación: `php artisan key:generate`
4. Instalar dependencias de node: `npm install`
5. Construir assets: `npm run build`
6. Ejecutar migraciones y seeders: `php artisan migrate --seed`

## Seeder

- Se crea una cuenta _admin@test.com_ con contraseña _password_ la cual tiene permisos de administrador.
- Cualquier otro usuario se puede registrar y no contará con permisos de administrador.
