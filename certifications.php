<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';
$trail = [['Home', '/'], ['Certifications', null]];
$page = [
    'title' => 'Certifications & Badges | Muhammad Aqib',
    'description' => 'Verified credentials of Muhammad Aqib: Salesforce Trailhead badges and professional recognition. No vendor certifications are claimed.',
    'path' => '/certifications',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Certifications',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = '';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Certifications &amp; Badges</h1>
    <p class="lede">Verified credentials only — stated exactly as they are.</p>
  </div>
</section>
<section class="section" aria-label="Credentials">
  <div class="container narrow prose">
    <h2>Vendor certifications</h2>
    <p>I currently hold <strong>no vendor certifications</strong> (AWS, etc.). Cloud credentials are on my learning roadmap; this page will be updated if that changes.</p>
    <h2>Salesforce Trailhead badges</h2>
    <p>Badges earned on Trailhead — these are learning badges, <strong>not</strong> Salesforce certifications:</p>
    <ul>
      <li>Quick Start: Salesforce DX</li>
      <li>The DX Development Model</li>
      <li>App Development with Salesforce DX</li>
      <li>Package Development Readiness</li>
      <li>Dreamforce '25 Virtual stamp</li>
    </ul>
    <p><em>Verify at <a href="https://trailblazer.me/id/mrpythonist" rel="noopener">trailblazer.me/id/mrpythonist</a>.</em></p>
    <h2>Professional recognition</h2>
    <ul>
      <li><strong>Award of Excellence</strong> — presented by the Operations Manager at TurboDebt for contributions to production systems.</li>
    </ul>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
