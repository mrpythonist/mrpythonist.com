<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';
$trail = [['Home', '/'], ['Uses', null]];
$page = [
    'title' => 'Uses | Tools & Workflow of Muhammad Aqib',
    'description' => 'The development tools and workflow Muhammad Aqib uses daily: Docker, Git, Linux, Postman and a no-framework PHP stack.',
    'path' => '/uses',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Uses',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = '';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Uses</h1>
    <p class="lede">The tools I reach for daily. Boring, reliable, paid for in full (mostly free).</p>
  </div>
</section>
<section class="section" aria-label="Tools and workflow">
  <div class="container narrow prose">
    <h2>Development</h2>
    <ul>
      <li><strong>Docker</strong> — multi-service Compose stacks (PHP, PostgreSQL, Redis) so every project starts with one command.</li>
      <li><strong>Git &amp; GitHub</strong> — version control, pull requests, Actions for CI.</li>
      <li><strong>Linux terminal &amp; Bash</strong> — daily driver for servers, logs and automation.</li>
      <li><strong>Postman</strong> — API design, testing and debugging.</li>
    </ul>
    <h2>Shipping</h2>
    <ul>
      <li><strong>cPanel / shared hosting</strong> — this site runs on LiteSpeed shared hosting, deployed and administered by hand.</li>
      <li><strong>PHP without a framework</strong> — for this site: plain PHP, one stylesheet, one small script. Nothing to update, nothing to break.</li>
      <li><strong>Google Search Console &amp; Analytics</strong> — indexing, sitemaps and traffic for my own projects.</li>
    </ul>
    <h2>Workflow</h2>
    <ul>
      <li>Small commits, descriptive messages, branches per change.</li>
      <li>Learn → Build → Break → Fix → Document for anything new.</li>
      <li>AI assistance for speed; my own review before anything ships.</li>
    </ul>
    <p><em>This page lists tools I actually use. It changes as the workflow does — see <a href="/now">now</a> for current focus.</em></p>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
