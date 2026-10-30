<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/tech.php';
require_once __DIR__ . '/includes/breadcrumbs.php';
$trail = [['Home', '/'], ['Tech Stack', null]];
$page = [
    'title' => 'Tech Stack | Muhammad Aqib, Software Engineer',
    'description' => 'Technologies Muhammad Aqib works with: PHP, Laravel, JavaScript, TypeScript, React, Next.js, Node.js, PostgreSQL, Redis, Docker, AWS, Linux and more — with honest experience levels.',
    'path' => '/tech-stack',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Software Engineer',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = 'tech-stack';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);

$groups = [
    'Languages' => ['php', 'javascript', 'typescript'],
    'Frontend' => ['react', 'nextjs'],
    'Backend' => ['laravel', 'nodejs', 'express'],
    'Data' => ['postgresql', 'mongodb', 'redis'],
    'Cloud & DevOps' => ['docker', 'aws', 'linux', 'terraform'],
];
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Tech Stack</h1>
    <p class="lede">Technologies I work with — each page states the experience level honestly: production, professional, familiarity or learning.</p>
  </div>
</section>
<section class="section" aria-label="Technology groups">
  <div class="container">
    <?php foreach ($groups as $group => $slugs): ?>
    <h2 class="group-title"><?= e($group) ?></h2>
    <div class="card-grid">
      <?php foreach ($slugs as $slug):
          $t = $tech_pages[$slug]; ?>
      <article class="card">
        <h3><a href="/tech-stack/<?= e($slug) ?>"><?= e($t['name']) ?></a></h3>
        <p><?= e($t['tagline']) ?></p>
        <p class="card-status"><?= e($tech_levels[$t['level']]) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
