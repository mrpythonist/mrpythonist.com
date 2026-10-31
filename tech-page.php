<?php

declare(strict_types=1);

// Technology detail page dispatcher.
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

// Canonical redirect.
$request_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';

if ($request_path !== '/tech-stack/' . $slug) {
  header('Location: ' . site_url('/tech-stack/' . $slug), true, 301);
  exit;
}

$t = $tech_pages[$slug];

$trail = [
  ['Home', '/'],
  ['Tech Stack', '/tech-stack'],
  [$t['name'], null],
];

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

// Resolve related projects.
$related_projects = [];

foreach ($t['related_projects'] ?? [] as $pslug) {
  foreach ($projects as $project) {
    if ($project['slug'] === $pslug) {
      $related_projects[] = $project;
      break;
    }
  }
}

// Resolve related articles.
$related_posts = [];

foreach ($t['related_posts'] ?? [] as $post_slug) {
  $post = find_post($post_slug);

  if ($post) {
    $related_posts[] = $post;
  }
}

$level = $tech_levels[$t['level']] ?? 'Practical experience';
?>

<main class="technology-page">

  <!-- Hero -->
  <section class="technology-hero" aria-labelledby="page-title">
    <div class="container">

      <div class="technology-hero-inner">

        <div class="technology-hero-content">

          <span class="technology-eyebrow">
            <span class="technology-eyebrow-dot"></span>
            TECHNOLOGY / <?= e(strtoupper($slug)) ?>
          </span>

          <h1 id="page-title">
            <?= e($t['name']) ?><span class="technology-title-dot">.</span>
          </h1>

          <p class="technology-tagline">
            <?= e($t['tagline']) ?>
          </p>

          <div class="technology-hero-meta">
            <span class="technology-level">
              <span class="technology-level-indicator"></span>
              <?= e($level) ?>
            </span>

            <span class="technology-meta-divider"></span>

            <span class="technology-meta-label">
              Hands-on engineering
            </span>
          </div>

          <a class="technology-hero-link" href="#experience">
            Explore my experience
            <span aria-hidden="true">↓</span>
          </a>

        </div>

        <div class="technology-hero-visual" aria-hidden="true">

          <div class="technology-visual-orbit technology-orbit-one"></div>
          <div class="technology-visual-orbit technology-orbit-two"></div>

          <div class="technology-visual-core">
            <span class="technology-visual-bracket">&lt;</span>
            <span class="technology-visual-slash">/</span>
            <span class="technology-visual-bracket">&gt;</span>
          </div>

          <span class="technology-visual-label">ENGINEERED TO SCALE</span>

          <span class="technology-floating-mark technology-mark-one">01</span>
          <span class="technology-floating-mark technology-mark-two">DEV</span>

        </div>

      </div>

    </div>
  </section>

  <!-- Experience -->
  <section class="technology-section" id="experience"
    aria-labelledby="experience-title">

    <div class="container">

      <div class="technology-section-heading">

        <div>
          <span class="technology-section-kicker">01 / PRACTICAL KNOWLEDGE</span>
          <h2 id="experience-title">Beyond the syntax.</h2>
        </div>

        <p>
          Understanding a technology is one thing.
          Applying it to solve real engineering problems is another.
        </p>

      </div>

      <div class="technology-summary">
        <div class="technology-summary-marker">
          <span>01</span>
          <span class="technology-summary-line"></span>
        </div>

        <div class="technology-summary-content">
          <span class="technology-card-label">MY APPROACH</span>
          <p><?= e($t['summary']) ?></p>
        </div>

        <span class="technology-summary-decoration" aria-hidden="true">
          “
        </span>
      </div>

    </div>

  </section>

  <!-- Experience points -->
  <section class="technology-section technology-points-section"
    aria-labelledby="points-title">

    <div class="container">

      <div class="technology-section-heading">

        <div>
          <span class="technology-section-kicker">02 / ENGINEERING IN PRACTICE</span>
          <h2 id="points-title">How I put it to work.</h2>
        </div>

        <p>
          Practical applications, engineering decisions,
          and the experience behind the technology.
        </p>

      </div>

      <?php if (!empty($t['points'])): ?>
        <div class="technology-points-grid">

          <?php foreach ($t['points'] as $index => $point): ?>
            <article class="technology-point-card">

              <span class="technology-point-number">
                <?= e(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)) ?>
              </span>

              <span class="technology-point-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M5 12.5L9.5 17L19 7"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </span>

              <p><?= e($point) ?></p>

              <span class="technology-point-decoration"
                aria-hidden="true">↗</span>

            </article>
          <?php endforeach; ?>

        </div>
      <?php endif; ?>

    </div>

  </section>

  <!-- Related projects -->
  <?php if ($related_projects): ?>
    <section class="technology-section technology-related-section"
      aria-labelledby="projects-title">

      <div class="container">

        <div class="technology-section-heading">

          <div>
            <span class="technology-section-kicker">03 / SELECTED WORK</span>
            <h2 id="projects-title">Built with purpose.</h2>
          </div>

          <p>
            Projects where this technology contributes
            to practical software solutions.
          </p>

        </div>

        <div class="technology-related-grid">

          <?php foreach ($related_projects as $index => $project): ?>
            <a class="technology-project-card"
              href="/projects/<?= e($project['slug']) ?>">

              <div class="technology-project-top">
                <span class="technology-project-index">
                  PROJECT / <?= e(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)) ?>
                </span>

                <span class="technology-project-arrow" aria-hidden="true">
                  ↗
                </span>
              </div>

              <h3><?= e($project['title']) ?></h3>

              <?php if (!empty($project['description'])): ?>
                <p><?= e($project['description']) ?></p>
              <?php endif; ?>

              <div class="technology-project-bottom">
                <span class="technology-project-status">
                  <span></span>
                  <?= e($project['status']) ?>
                </span>

                <span class="technology-project-cta">
                  Explore project
                </span>
              </div>

            </a>
          <?php endforeach; ?>

        </div>

      </div>

    </section>
  <?php endif; ?>

  <!-- Related articles -->
  <?php if ($related_posts): ?>
    <section class="technology-section technology-writing-section"
      aria-labelledby="writing-title">

      <div class="container">

        <div class="technology-section-heading">

          <div>
            <span class="technology-section-kicker">04 / KNOWLEDGE SHARING</span>
            <h2 id="writing-title">Ideas worth exploring.</h2>
          </div>

          <p>
            Technical notes, lessons, and insights
            related to this technology.
          </p>

        </div>

        <div class="technology-writing-list">

          <?php foreach ($related_posts as $index => $post): ?>
            <a class="technology-writing-item"
              href="/blog/<?= e($post['slug'] ?? '') ?>">

              <span class="technology-writing-number">
                <?= e(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)) ?>
              </span>

              <span class="technology-writing-title">
                <?= e($post['title']) ?>
              </span>

              <span class="technology-writing-arrow" aria-hidden="true">
                ↗
              </span>

            </a>
          <?php endforeach; ?>

        </div>

      </div>

    </section>
  <?php endif; ?>

  <!-- Bottom navigation -->
  <section class="technology-bottom">
    <div class="container">

      <div class="technology-bottom-inner">

        <div>
          <span class="technology-section-kicker">
            KEEP EXPLORING
          </span>

          <h2>
            Good engineering is built on
            <span>continuous learning.</span>
          </h2>

          <p>
            Explore the technologies, tools, and engineering
            practices behind my work.
          </p>
        </div>

        <a class="technology-back-link" href="/tech-stack">
          <span aria-hidden="true">←</span>
          Explore all technologies
        </a>

      </div>

    </div>
  </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>