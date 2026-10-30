<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';
$trail = [['Home', '/'], ['Services', null]];
$page = [
    'title' => 'Services | Muhammad Aqib — Full-Stack & Backend Development',
    'description' => 'Development services by Muhammad Aqib: full-stack web applications, backend API engineering, production troubleshooting and cloud/DevOps support.',
    'path' => '/services',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Software Engineer',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = '';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Services</h1>
    <p class="lede">Practical engineering help for teams and founders — scoped small, delivered reliably.</p>
  </div>
</section>
<section class="section" aria-label="Services offered">
  <div class="container">
    <div class="card-grid">
      <article class="card">
        <h3>Full-Stack Web Applications</h3>
        <p>Complete web applications with Laravel or Next.js frontends backed by solid APIs — from database design to deployment.</p>
        <ul class="tags" aria-label="Technologies"><li>Laravel</li><li>Next.js</li><li>React</li><li>PostgreSQL</li></ul>
      </article>
      <article class="card">
        <h3>Backend &amp; API Engineering</h3>
        <p>REST API design and implementation, authentication, queue-based background processing and third-party integrations that don't fall over.</p>
        <ul class="tags" aria-label="Technologies"><li>Node.js</li><li>Express</li><li>Laravel</li><li>Redis</li></ul>
      </article>
      <article class="card">
        <h3>Production Troubleshooting</h3>
        <p>Diagnosing slow endpoints, failing queues, broken integrations and deployment issues on Linux servers — with monitoring so they stay fixed.</p>
        <ul class="tags" aria-label="Technologies"><li>Linux</li><li>nginx</li><li>Sentry</li><li>PostgreSQL</li></ul>
      </article>
      <article class="card">
        <h3>Cloud &amp; DevOps Support</h3>
        <p>Docker-based development environments, CI/CD pipelines and AWS fundamentals — IAM, EC2, S3, RDS — set up cleanly and documented.</p>
        <ul class="tags" aria-label="Technologies"><li>Docker</li><li>AWS</li><li>CI/CD</li><li>Linux</li></ul>
      </article>
    </div>
    <div class="container narrow prose" style="margin-top:2.5rem">
      <h2>How engagements work</h2>
      <ul>
        <li>Small, clearly scoped milestones — you always know what ships next.</li>
        <li>Code you can maintain: tested, documented, no clever surprises.</li>
        <li>Direct communication, regular progress updates, honest timelines.</li>
      </ul>
      <p><a class="btn btn-primary" href="/contact">Start a conversation</a></p>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
