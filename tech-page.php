<?php
declare(strict_types=1);
// Dispatcher for /tech-stack/{slug}. The slug is validated against an
// allowlist; unknown slugs serve the 404 page with a genuine 404 status.
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/tech.php';
require_once __DIR__ . '/data/portfolio.php';
require_once __DIR__ . '/data/blog.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$slug = strtolower(trim($_GET['slug'] ?? ''));
if (!preg_match('/^[a-z0-9-]+$/', $slug) || !isset($tech_pages[$slug])) {
    http_response_code(404);
    $page = [
        'title' => 'Page Not Found | Muhammad Aqib',
        'description' => 'The page you are looking for does not exist on Muhammad Aqib\'s portfolio.',
        'path' => '/404',
        'noindex' => true,
    ];
    $active = 'tech-stack';
    require __DIR__ . '/404.php';
    exit;
}

// Canonical redirect: /tech-page.php?slug=x -> /tech-stack/x
$request_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
if ($request_path !== '/tech-stack/' . $slug) {
    header('Location: ' . site_url('/tech-stack/' . $slug), true, 301);
    exit;
}

$t = $tech_pages[$slug];
$trail = [['Home', '/'], ['Tech Stack', '/tech-stack'], [$t['name'], null]];
$page = [
    'title' => $t['name'] . ' | Muhammad Aqib, Software Engineer',
    'description' => $t['tagline'],
    'path' => '/tech-stack/' . $slug,
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — ' . $t['name'],
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = 'tech-stack';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title"><?= e($t['name']) ?></h1>
    <p class="lede"><?= e($t['tagline']) ?></p>
    <p><span class="level-badge"><?= e($tech_levels[$t['level']]) ?></span></p>
  </div>
</section>
<section class="section" aria-label="<?= e($t['name']) ?> experience">
  <div class="container narrow prose">
    <p><?= e($t['summary']) ?></p>
    <h2>My experience</h2>
    <ul>
      <?php foreach ($t['points'] as $point): ?><li><?= e($point) ?></li><?php endforeach; ?>
    </ul>
    <?php if (!empty($t['related_projects'])): ?>
    <h2>Where I've used it</h2>
    <ul>
      <?php foreach ($t['related_projects'] as $pslug):
          foreach ($projects as $p) {
              if ($p['slug'] === $pslug): ?>
      <li><a href="/projects/<?= e($pslug) ?>"><?= e($p['title']) ?></a> — <?= e($p['status']) ?></li>
      <?php endif; } endforeach; ?>
    </ul>
    <?php endif; ?>
    <?php if (!empty($t['related_posts'])): ?>
    <h2>Related writing</h2>
    <ul>
      <?php foreach ($t['related_posts'] as $post_slug):
          $post = find_post($post_slug);
          if ($post): ?>
      <li><a href="/blog/<?= e($post_slug) ?>"><?= e($post['title']) ?></a></li>
      <?php endif; endforeach; ?>
    </ul>
    <?php endif; ?>
    <p><a href="/tech-stack">&larr; All technologies</a></p>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
