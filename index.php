<?php
declare(strict_types=1);

require_once __DIR__ . '/data/portfolio.php';

$page = [
    'title' => 'Muhammad Aqib | Software Engineer & Backend Developer',
    'description' => "Explore Muhammad Aqib's portfolio featuring full-stack development, backend engineering, API systems, and cloud infrastructure projects.",
    'path' => '/',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Software Engineer and Backend Developer',
];

$active = 'home';

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/hero.php';
require __DIR__ . '/includes/projects-section.php';
require __DIR__ . '/includes/tech-stack.php';
require __DIR__ . '/includes/experience.php';
require __DIR__ . '/includes/about.php';
require __DIR__ . '/includes/contact-section.php';
require __DIR__ . '/includes/footer.php';
