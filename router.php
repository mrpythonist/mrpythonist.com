<?php
declare(strict_types=1);
// Router for PHP's built-in server only: `php -S localhost:8000 router.php`
// Apache uses .htaccess instead; Nginx uses nginx.conf.example.
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
if ($path !== '/' && file_exists(__DIR__ . $path) && is_file(__DIR__ . $path)) {
    return false; // Let the built-in server serve static assets directly.
}
$routes = ['/' => 'index.php', '/projects' => 'projects.php', '/contact' => 'contact.php'];
if (isset($routes[$path])) {
    require __DIR__ . '/' . $routes[$path];
    return true;
}
require __DIR__ . '/404.php';
return true;
