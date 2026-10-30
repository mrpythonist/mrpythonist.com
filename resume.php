<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';
$trail = [['Home', '/'], ['Resume', null]];
$page = [
    'title' => 'Resume | Muhammad Aqib, Software Engineer',
    'description' => 'Resume of Muhammad Aqib: software engineer with production experience in full-stack development, backend APIs and cloud infrastructure. Based in Multan, Pakistan.',
    'path' => '/resume',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Resume',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = '';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Resume</h1>
    <p class="lede">Muhammad Aqib — Software Engineer · <?= e(LOCATION) ?></p>
    <p>
      <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a> ·
      <a href="<?= e(GITHUB_URL) ?>" rel="me noopener">GitHub</a> ·
      <a href="<?= e(LINKEDIN_URL) ?>" rel="me noopener">LinkedIn</a>
    </p>
  </div>
</section>
<section class="section" aria-label="Resume details">
  <div class="container narrow prose">
    <h2>Summary</h2>
    <p>Software engineer with 3+ years of production experience in full-stack and backend development. Built and maintained Laravel and Node.js APIs, PostgreSQL-backed systems, Redis queues and third-party integrations, deployed on AWS and Linux infrastructure. Focused on reliable, maintainable systems and clear API design.</p>
    <h2>Experience</h2>
    <h3>Software Engineer — TurboDebt</h3>
    <p><strong>March 2023 – October 2026</strong> · Full-time · Remote</p>
    <ul>
      <li>Engineered and maintained production backend systems and REST APIs in Laravel and Node.js.</li>
      <li>Designed PostgreSQL schemas and queries on AWS RDS; used Redis for queues, caching and background workers.</li>
      <li>Built and maintained third-party integrations: Salesforce (token refresh, queue processing), Iterable, Ytel, Apten.</li>
      <li>Implemented lead ingestion pipelines (TrustedForm, Jornaya) with validation.</li>
      <li>Deployed and troubleshot services on Ubuntu EC2 behind nginx; Docker for development environments.</li>
      <li>Monitored production with Sentry and Mattermost; performed single-point-of-failure reviews across DNS, third parties and AWS.</li>
      <li>Received an Award of Excellence from the Operations Manager.</li>
    </ul>
    <h2>Technical skills</h2>
    <ul>
      <li><strong>Languages:</strong> PHP, JavaScript, TypeScript, SQL</li>
      <li><strong>Backend:</strong> Laravel, Node.js, Express, REST APIs, JWT, Laravel Sanctum, queues</li>
      <li><strong>Frontend:</strong> React, Next.js, React Native, Tailwind CSS, Material UI</li>
      <li><strong>Data:</strong> PostgreSQL, Redis, MySQL</li>
      <li><strong>Cloud &amp; DevOps:</strong> AWS (EC2, S3, RDS, IAM), Docker, Linux, nginx, CI/CD, Git</li>
      <li><strong>Practices:</strong> PHPUnit, API testing, production debugging, monitoring</li>
    </ul>
    <h2>Education</h2>
    <p><strong>BS Computer Science</strong> — COMSATS University Islamabad, 2019–2023</p>
    <h2>Open source</h2>
    <ul>
      <li><strong>Log Anomaly Watcher</strong> — Node.js + TypeScript + Express service that ingests logs and surfaces spike and new-signature anomalies with transparent rules. <a href="https://github.com/mrpythonist/log-anomaly-watcher" rel="noopener">github.com/mrpythonist/log-anomaly-watcher</a></li>
      <li><strong>markdown-reader</strong> — documentation PR (#447) improving README readability; merged upstream.</li>
    </ul>
    <h2>Recognition</h2>
    <p>Award of Excellence, TurboDebt Operations — for contributions to production systems.</p>
    <p><em>This page mirrors my current resume. For roles, please also see <a href="/experience">experience</a> and <a href="/projects">projects</a>.</em></p>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
