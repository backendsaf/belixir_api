# Symfony Docker Template (MySQL + phpMyAdmin)

Services:
- nginx (reverse proxy / static files)
- php-fpm (PHP 8.2, auto-creates Symfony skeleton if app folder is empty)
- MySQL 8.0
- phpMyAdmin

## Usage

1. Unzip the archive.
2. Run: docker-compose up --build
3. Access:
   - Symfony app: http://localhost:8080
   - phpMyAdmin: http://localhost:8081 (user: symfony, pass: symfony)

Notes:
- The php container installs Composer and auto-generates a Symfony skeleton at first run if `app/` is empty.
- To use an existing Symfony project, place it inside the `app/` folder before starting.