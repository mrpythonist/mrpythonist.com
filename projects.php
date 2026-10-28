<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/portfolio.php';
$creative_works = [];
foreach ($projects as $p) {
    $creative_works[] = [
        '@type' => 'CreativeWork',
        'name' => $p['title'],
        'description' => $p['description'],
        'author' => ['@id' => SITE_URL . '/#person'],
        'keywords' => implode(', ', $p['tags']),
    ];
}
$page = [
    'title' => 'Muhammad Aqib | Projects — Full-Stack, Backend & Cloud',
    'description' => 'Projects by Muhammad Aqib: a full-stack food delivery system, backend engineering and API systems, and a cloud and DevOps learning lab.',
    'path' => '/projects',
    'jsonld' => [[
        '@type' => 'ItemList',
        'name' => 'Featured projects',
        'itemListElement' => $creative_works,
    ]],
];
$active = 'projects';
require __DIR__ . '/includes/header.php';
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container">
    <h1 id="page-title">Projects</h1>
    <p>Work described as it is — production experience, a system in development, and a learning lab. No metrics are claimed for any of them.</p>
  </div>
</section>
<?php $show_all = true; require __DIR__ . '/includes/projects-section.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
