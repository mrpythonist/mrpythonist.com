<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';
$trail = [['Home', '/'], ['Open Source', null]];
$page = [
    'title' => 'Open Source | Muhammad Aqib',
    'description' => 'Open-source work by Muhammad Aqib: the Log Anomaly Watcher project and merged contributions to community projects.',
    'path' => '/open-source',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Open Source',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = '';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Open Source</h1>
    <p class="lede">Small, sustained contributions — bug fixes, tests, docs and features I can defend.</p>
  </div>
</section>
<section class="section" aria-label="Open source work">
  <div class="container">
    <div class="card-grid">
      <article class="card">
        <h3>Log Anomaly Watcher</h3>
        <p>My open-source project: a Node.js + TypeScript + Express service that ingests logs, fingerprints messages and surfaces spike and new-signature anomalies with transparent rules — not ML.</p>
        <ul class="tags" aria-label="Technologies"><li>Node.js</li><li>TypeScript</li><li>Express</li><li>PostgreSQL</li><li>Docker</li></ul>
        <p><a href="https://github.com/mrpythonist/log-anomaly-watcher" rel="noopener">github.com/mrpythonist/log-anomaly-watcher</a></p>
      </article>
      <article class="card">
        <h3>markdown-reader — docs PR #447</h3>
        <p>Documentation contribution improving README readability for new users. Opened against issue #446 and merged upstream the same day.</p>
        <ul class="tags" aria-label="Technologies"><li>Documentation</li><li>Markdown</li></ul>
        <p><a href="https://github.com/mrpythonist" rel="me noopener">More on my GitHub profile</a></p>
      </article>
    </div>
    <div class="container narrow prose" style="margin-top:2.5rem">
      <h2>Contribution track</h2>
      <p>My current open-source track is <strong>Next.js / Node.js</strong>: reading repositories before changing code, starting with good first issues, and following each project's PR and review etiquette. I prefer meaningful, sustained contributions over drive-by commits.</p>
      <p><a class="btn btn-secondary" href="<?= e(GITHUB_URL) ?>" rel="me noopener">GitHub profile</a></p>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
