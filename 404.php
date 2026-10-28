<?php
declare(strict_types=1);
http_response_code(404);
$page = [
    'title' => 'Page Not Found | Muhammad Aqib',
    'description' => 'The page you are looking for does not exist on Muhammad Aqib\'s portfolio.',
    'path' => '/404',
    'noindex' => true,
];
$active = '';
require __DIR__ . '/includes/header.php';
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Page not found (404)</h1>
    <p>That address doesn't exist here. Try the homepage or the projects page.</p>
    <p><a class="btn btn-primary" href="/">Back to home</a> <a class="btn btn-secondary" href="/projects">View projects</a></p>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
