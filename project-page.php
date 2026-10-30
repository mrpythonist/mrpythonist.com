<?php
declare(strict_types=1);
// Dispatcher for /projects/{slug}. The slug is validated against an
// allowlist; unknown slugs serve the 404 page with a genuine 404 status.
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/portfolio.php';
require_once __DIR__ . '/data/project-details.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$slug = strtolower(trim($_GET['slug'] ?? ''));
$project = null;
foreach ($projects as $p) {
    if ($p['slug'] === $slug && preg_match('/^[a-z0-9-]+$/', $slug)) {
        $project = $p;
        break;
    }
}
if ($project === null || !isset($project_details[$slug])) {
    http_response_code(404);
    $page = [
        'title' => 'Page Not Found | Muhammad Aqib',
        'description' => 'The page you are looking for does not exist on Muhammad Aqib\'s portfolio.',
        'path' => '/404',
        'noindex' => true,
    ];
    $active = 'projects';
    require __DIR__ . '/404.php';
    exit;
}

// Canonical redirect: /project-page.php?slug=x -> /projects/x
$request_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
if ($request_path !== '/projects/' . $slug) {
    header('Location: ' . site_url('/projects/' . $slug), true, 301);
    exit;
}

$d = $project_details[$slug];
$trail = [['Home', '/'], ['Projects', '/projects'], [$project['title'], null]];
$page = [
    'title' => $project['title'] . ' | Muhammad Aqib',
    'description' => $project['description'],
    'path' => '/projects/' . $slug,
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — ' . $project['title'],
    'jsonld' => [
        breadcrumbs_jsonld($trail),
        [
            '@type' => 'CreativeWork',
            'name' => $project['title'],
            'description' => $project['description'],
            'author' => ['@id' => SITE_URL . '/#person'],
            'keywords' => implode(', ', $project['tags']),
        ],
    ],
];
$active = 'projects';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title"><?= e($project['title']) ?></h1>
    <p class="lede"><?= e($project['description']) ?></p>
    <p><span class="level-badge"><?= e($project['status']) ?></span></p>
  </div>
</section>
<section class="section" aria-label="<?= e($project['title']) ?> details">
  <div class="container narrow prose">
    <h2>Overview</h2>
    <p><?= e($project['detail']) ?></p>
    <h2>My role</h2>
    <p><?= e($d['role']) ?></p>
    <h2>What it includes</h2>
    <ul>
      <?php foreach ($d['features'] as $feature): ?><li><?= e($feature) ?></li><?php endforeach; ?>
    </ul>
    <h2>Architecture</h2>
    <p><?= e($d['architecture']) ?></p>
    <h2>Technologies</h2>
    <ul class="stack-list">
      <?php foreach ($project['tags'] as $tag): ?><li><?= e($tag) ?></li><?php endforeach; ?>
    </ul>
    <p><em><?= e($d['note']) ?></em></p>
    <p><a href="/projects">&larr; All projects</a></p>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
