<?php
declare(strict_types=1);
// Router for PHP's built-in server only.
// Run from inside public_html:  php -S localhost:8000 router.php
// (Apache uses .htaccess instead; this file is never executed on the live server.)
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
// Mirror the live trailing-slash normalization: /about/ -> /about.
if ($path !== '/' && substr($path, -1) === '/') {
    $qs = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_QUERY);
    $target = rtrim($path, '/') . (($qs !== null && $qs !== '') ? '?' . $qs : '');
    header('Location: ' . $target, true, 301);
    exit;
}
if ($path !== '/' && file_exists(__DIR__ . $path) && is_file(__DIR__ . $path)) {
    return false; // Let the built-in server serve static assets directly.
}
$routes = [
    '/' => 'index.php',
    '/about' => 'about.php',
    '/experience' => 'experience.php',
    '/tech-stack' => 'tech-stack.php',
    '/services' => 'services.php',
    '/projects' => 'projects.php',
    '/resume' => 'resume.php',
    '/certifications' => 'certifications.php',
    '/open-source' => 'open-source.php',
    '/cloud' => 'cloud.php',
    '/engineering-principles' => 'engineering-principles.php',
    '/uses' => 'uses.php',
    '/now' => 'now.php',
    '/blog' => 'blog.php',
    '/contact' => 'contact.php',
];
if (isset($routes[$path])) {
    require __DIR__ . '/' . $routes[$path];
    return true;
}
// Nested dispatchers (mirrors the live .htaccess slug rules).
if (preg_match('#^/tech-stack/([a-z0-9-]+)/?$#', $path, $m)) {
    $_GET['slug'] = $m[1];
    require __DIR__ . '/tech-page.php';
    return true;
}
if (preg_match('#^/projects/([a-z0-9-]+)/?$#', $path, $m)) {
    $_GET['slug'] = $m[1];
    require __DIR__ . '/project-page.php';
    return true;
}
if (preg_match('#^/blog/([a-z0-9-]+)/?$#', $path, $m)) {
    $_GET['slug'] = $m[1];
    require __DIR__ . '/blog-post.php';
    return true;
}
require __DIR__ . '/404.php';
return true;
