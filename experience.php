<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/portfolio.php';
require_once __DIR__ . '/includes/breadcrumbs.php';
$trail = [['Home', '/'], ['Experience', null]];
$page = [
    'title' => 'Experience | Muhammad Aqib, Software Engineer',
    'description' => 'Professional experience of Muhammad Aqib: Software Engineer at TurboDebt (2023–2026) working on production backend systems, APIs and infrastructure.',
    'path' => '/experience',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Software Engineer',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = 'experience';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Experience</h1>
    <p class="lede">Production systems, APIs and infrastructure — described as they were.</p>
  </div>
</section>
<section class="section" aria-label="Work history">
  <div class="container narrow prose">
    <?php foreach ($experience as $job): ?>
    <article>
      <h2><?= e($job['role']) ?> — <?= e($job['employer']) ?></h2>
      <p><strong><?= e($job['period']) ?></strong> · Full-time · Remote</p>
      <p><?= e($job['description']) ?></p>
    </article>
    <?php endforeach; ?>
    <h2>What the work involved</h2>
    <ul>
      <li>Backend and full-stack engineering on production Laravel and Node.js systems.</li>
      <li>REST API design and implementation, authentication (JWT, Laravel Sanctum) and role-based access.</li>
      <li>PostgreSQL on AWS RDS: schema design, queries and performance awareness.</li>
      <li>Redis-backed queues and background workers for integrations and notifications.</li>
      <li>Third-party integrations: Salesforce (token refresh, queue processing), Iterable, Ytel, Apten.</li>
      <li>Lead ingestion pipelines (TrustedForm, Jornaya) with validation.</li>
      <li>Ubuntu EC2 hosts behind nginx; Docker for development environments.</li>
      <li>Production monitoring with Sentry and Mattermost; incident troubleshooting and single-point-of-failure reviews.</li>
    </ul>
    <h2>Recognition</h2>
    <p>Received an <strong>Award of Excellence</strong> from the Operations Manager for contributions to production systems.</p>
    <p><a class="btn btn-secondary" href="/resume">See the full resume</a></p>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
