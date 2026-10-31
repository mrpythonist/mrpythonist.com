<?php

declare(strict_types=1);

// Project detail page dispatcher.
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/portfolio.php';
require_once __DIR__ . '/data/project-details.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$slug = strtolower(trim($_GET['slug'] ?? ''));

$project = null;

if (preg_match('/^[a-z0-9-]+$/', $slug)) {
  foreach ($projects as $p) {
    if ($p['slug'] === $slug) {
      $project = $p;
      break;
    }
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

// Canonical redirect.
$request_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';

if ($request_path !== '/projects/' . $slug) {
  header('Location: ' . site_url('/projects/' . $slug), true, 301);
  exit;
}

$d = $project_details[$slug];

$trail = [
  ['Home', '/'],
  ['Projects', '/projects'],
  [$project['title'], null],
];

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

$features = $d['features'] ?? [];
$tags = $project['tags'] ?? [];
$status = $project['status'] ?? 'Project';
?>

<main class="case-study-page">

  <!-- Hero -->
  <section class="case-study-hero" aria-labelledby="page-title">
    <div class="container">

      <div class="case-study-hero-inner">

        <div class="case-study-hero-content">

          <span class="case-study-eyebrow">
            <span class="case-study-eyebrow-dot"></span>
            SOFTWARE ENGINEERING / CASE STUDY
          </span>

          <h1 id="page-title">
            <?= e($project['title']) ?><span>.</span>
          </h1>

          <p class="case-study-tagline">
            <?= e($project['description']) ?>
          </p>

          <div class="case-study-meta">
            <span class="case-study-status">
              <span></span>
              <?= e($status) ?>
            </span>

            <span class="case-study-meta-divider"></span>

            <span class="case-study-meta-text">
              Engineering & Implementation
            </span>
          </div>

          <a href="#overview" class="case-study-explore">
            Explore the project
            <span aria-hidden="true">↓</span>
          </a>

        </div>

        <div class="case-study-visual" aria-hidden="true">

          <div class="case-study-orbit case-study-orbit-one"></div>
          <div class="case-study-orbit case-study-orbit-two"></div>

          <div class="case-study-visual-card">
            <span class="case-study-visual-top">
              <span></span><span></span><span></span>
            </span>

            <div class="case-study-code">
              <span class="code-muted">01</span>
              <span class="code-keyword">const</span>
              <span class="code-variable"> project</span> =
              <span class="code-string">'<?= e(strtoupper(substr($slug, 0, 12))) ?>'</span>;
            </div>

            <div class="case-study-code">
              <span class="code-muted">02</span>
              <span class="code-keyword">function</span>
              <span class="code-function"> build()</span> {
            </div>

            <div class="case-study-code">
              <span class="code-muted">03</span>
              &nbsp;&nbsp;<span class="code-keyword">return</span>
              <span class="code-variable"> solution</span>;
            </div>

            <div class="case-study-code">
              <span class="code-muted">04</span>
              }
            </div>

            <div class="case-study-visual-footer">
              <span>ENGINEERING IN PROGRESS</span>
              <span class="case-study-live-dot"></span>
            </div>
          </div>

          <span class="case-study-floating case-study-floating-one">BUILD</span>
          <span class="case-study-floating case-study-floating-two">01 / 01</span>

        </div>

      </div>

    </div>
  </section>

  <!-- Overview -->
  <section class="case-study-section" id="overview"
    aria-labelledby="overview-title">

    <div class="container">

      <div class="case-study-section-heading">

        <div>
          <span class="case-study-kicker">01 / THE PROJECT</span>
          <h2 id="overview-title">The bigger picture.</h2>
        </div>

        <p>
          Every project starts with a problem.
          The engineering is in how you solve it.
        </p>

      </div>

      <div class="case-study-overview-card">

        <div class="case-study-overview-index">
          <span>01</span>
          <span></span>
          <span>OVERVIEW</span>
        </div>

        <div class="case-study-overview-content">
          <span class="case-study-label">PROJECT OVERVIEW</span>
          <p><?= e($project['detail']) ?></p>
        </div>

        <span class="case-study-quote-mark" aria-hidden="true">“</span>

      </div>

    </div>

  </section>

  <!-- Role -->
  <section class="case-study-section case-study-role-section"
    aria-labelledby="role-title">

    <div class="container">

      <div class="case-study-role-grid">

        <div class="case-study-role-heading">
          <span class="case-study-kicker">02 / CONTRIBUTION</span>
          <h2 id="role-title">My role in the build.</h2>

          <p>
            The responsibilities, technical decisions,
            and engineering work behind this project.
          </p>
        </div>

        <div class="case-study-role-card">
          <span class="case-study-role-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M8 8L3.5 12L8 16M16 8L20.5 12L16 16M14 5L10 19"
                stroke="currentColor"
                stroke-width="1.7"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </span>

          <span class="case-study-label">ENGINEERING RESPONSIBILITIES</span>

          <p><?= e($d['role']) ?></p>
        </div>

      </div>

    </div>

  </section>

  <!-- Features -->
  <?php if ($features): ?>
    <section class="case-study-section" aria-labelledby="features-title">

      <div class="container">

        <div class="case-study-section-heading">

          <div>
            <span class="case-study-kicker">03 / CAPABILITIES</span>
            <h2 id="features-title">What it brings together.</h2>
          </div>

          <p>
            The key capabilities and components
            that make this solution work.
          </p>

        </div>

        <div class="case-study-features-grid">

          <?php foreach ($features as $index => $feature): ?>
            <article class="case-study-feature-card">

              <div class="case-study-feature-top">
                <span class="case-study-feature-number">
                  <?= e(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)) ?>
                </span>

                <span class="case-study-feature-arrow"
                  aria-hidden="true">↗</span>
              </div>

              <span class="case-study-feature-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M5 12.5L9.5 17L19 7"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </span>

              <p><?= e($feature) ?></p>

            </article>
          <?php endforeach; ?>

        </div>

      </div>

    </section>
  <?php endif; ?>

  <!-- Architecture -->
  <section class="case-study-section case-study-architecture-section"
    aria-labelledby="architecture-title">

    <div class="container">

      <div class="case-study-section-heading">

        <div>
          <span class="case-study-kicker">04 / SYSTEM DESIGN</span>
          <h2 id="architecture-title">Under the hood.</h2>
        </div>

        <p>
          A closer look at the technical structure
          and decisions powering the solution.
        </p>

      </div>

      <div class="case-study-architecture-card">

        <div class="case-study-architecture-top">
          <div>
            <span class="case-study-label">TECHNICAL BREAKDOWN</span>
            <h3>Architecture & engineering.</h3>
          </div>

          <span class="case-study-architecture-symbol" aria-hidden="true">
            { }
          </span>
        </div>

        <div class="case-study-architecture-content">
          <?= e($d['architecture']) ?>
        </div>

        <div class="case-study-architecture-footer">
          <span class="case-study-architecture-line"></span>
          <span>DESIGNED WITH ENGINEERING IN MIND</span>
        </div>

      </div>

    </div>

  </section>

  <!-- Technologies -->
  <?php if ($tags): ?>
    <section class="case-study-section" aria-labelledby="stack-title">

      <div class="container">

        <div class="case-study-stack-layout">

          <div>
            <span class="case-study-kicker">05 / TECHNOLOGY STACK</span>
            <h2 id="stack-title">The tools behind the work.</h2>

            <p>
              Technologies selected to build, power,
              and support the project.
            </p>
          </div>

          <div class="case-study-stack-list">
            <?php foreach ($tags as $tag): ?>
              <span class="case-study-stack-chip">
                <span></span>
                <?= e($tag) ?>
              </span>
            <?php endforeach; ?>
          </div>

        </div>

      </div>

    </section>
  <?php endif; ?>

  <!-- Project note -->
  <?php if (!empty($d['note'])): ?>
    <section class="case-study-note-section">
      <div class="container">

        <div class="case-study-note">
          <span class="case-study-note-mark" aria-hidden="true">i</span>

          <div>
            <span class="case-study-label">A NOTE ON THIS PROJECT</span>
            <p><?= e($d['note']) ?></p>
          </div>
        </div>

      </div>
    </section>
  <?php endif; ?>

  <!-- Closing CTA -->
  <section class="case-study-bottom">
    <div class="container">

      <div class="case-study-bottom-inner">

        <div>
          <span class="case-study-kicker">
            KEEP EXPLORING
          </span>

          <h2>
            Engineering is more than
            <span>writing code.</span>
          </h2>

          <p>
            Discover more projects, technical decisions,
            and solutions built through practical engineering.
          </p>
        </div>

        <a href="/projects" class="case-study-back-link">
          <span aria-hidden="true">←</span>
          Explore all projects
        </a>

      </div>

    </div>
  </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>