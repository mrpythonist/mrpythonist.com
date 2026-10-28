<?php
declare(strict_types=1);
require_once __DIR__ . '/data/portfolio.php';
$page = [
    'title' => 'Muhammad Aqib | Software Engineer & Backend Developer',
    'description' => "Explore Muhammad Aqib's portfolio featuring full-stack development, backend engineering, API systems, and cloud infrastructure projects.",
    'path' => '/',
];
$active = 'home';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/hero.php';
require __DIR__ . '/includes/projects-section.php';
require __DIR__ . '/includes/tech-stack.php';
?>
<div class="container info-grid">
  <?php require __DIR__ . '/includes/experience.php'; ?>
  <?php require __DIR__ . '/includes/about.php'; ?>
  <?php require __DIR__ . '/includes/contact-section.php'; ?>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
