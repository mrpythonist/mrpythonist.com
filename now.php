<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';
$trail = [['Home', '/'], ['Now', null]];
$page = [
    'title' => 'Now | What Muhammad Aqib Is Focused On',
    'description' => 'What Muhammad Aqib is working on now: remote job search, cloud/DevOps learning, open-source contributions and current projects.',
    'path' => '/now',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Now',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = '';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Now</h1>
    <p class="lede">What I'm focused on right now. Updated periodically — last updated October 29, 2026.</p>
  </div>
</section>
<section class="section" aria-label="Current focus">
  <div class="container narrow prose">
    <ul>
      <li><strong>Job search (priority one):</strong> applying for remote full-stack/backend roles while keeping applications, learning and portfolio work running in parallel.</li>
      <li><strong>Cloud &amp; DevOps roadmap:</strong> working through Linux/networking → Docker/CI-CD → AWS → Terraform, about ten hours a week, hands-on labs only.</li>
      <li><strong>Open source:</strong> contributing on the Next.js / Node.js track; maintaining the <a href="https://github.com/mrpythonist/log-anomaly-watcher" rel="noopener">Log Anomaly Watcher</a> pilot project.</li>
      <li><strong>This site:</strong> recently rebuilt as a multi-page portfolio with clean URLs, structured data and a technical blog — the deployment notes became the first blog posts.</li>
    </ul>
    <p><em>Inspired by the <a href="https://nownownow.com/about" rel="noopener">now page</a> movement. If any of this overlaps with what you're hiring for, <a href="/contact">let's talk</a>.</em></p>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
