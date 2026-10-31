<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/blog.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [['Home', '/'], ['Blog', null]];
$list = published_posts();

$item_elements = [];
$pos = 1;

foreach ($list as $p) {
    $item_elements[] = [
        '@type' => 'ListItem',
        'position' => $pos++,
        'url' => site_url('/blog/' . $p['slug']),
        'name' => $p['title'],
    ];
}

$featured = $list[0] ?? null;
$remaining = array_slice($list, 1);

$page = [
    'title' => 'Blog | Muhammad Aqib — Notes on Backend, PHP & DevOps',
    'description' => 'Technical notes by Muhammad Aqib on PHP deployment, clean URLs, shared hosting, SEO and backend engineering — written from real experience.',
    'path' => '/blog',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Blog',
    'jsonld' => [
        breadcrumbs_jsonld($trail),
        [
            '@type' => 'ItemList',
            'name' => 'Blog posts',
            'itemListElement' => $item_elements,
        ],
    ],
];

$active = 'blog';

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>

<main class="blog-page">

  <!-- HERO -->
  <section class="blog-hero" aria-labelledby="page-title">

    <div class="container">

      <div class="blog-hero-inner">

        <div class="blog-hero-content">

          <span class="blog-eyebrow">
            <span class="blog-eyebrow-dot"></span>
            THE ENGINEERING JOURNAL
          </span>

          <h1 id="page-title">
            Thoughts into<br>
            <span>engineering.</span>
          </h1>

          <p class="blog-hero-description">
            Notes, lessons and practical insights from building
            software, engineering backend systems and working
            with modern infrastructure.
          </p>

          <div class="blog-hero-bottom">
            <a href="#articles" class="blog-explore-link">
              Explore articles
              <span aria-hidden="true">↘</span>
            </a>

            <span class="blog-hero-note">
              Written from real experience.
            </span>
          </div>

        </div>

        <div class="blog-hero-art" aria-hidden="true">

          <div class="blog-art-orbit blog-orbit-one"></div>
          <div class="blog-art-orbit blog-orbit-two"></div>

          <div class="blog-art-card">

            <span class="blog-art-label">FIELD NOTES / 001</span>

            <div class="blog-art-code">
              <span>01</span> const ideas = [];
              <br>
              <span>02</span> ideas.push("Learn");
              <br>
              <span>03</span> ideas.push("Build");
              <br>
              <span>04</span> ideas.push("Improve");
              <br>
              <span>05</span> ship(ideas);
            </div>

            <div class="blog-art-footer">
              <span>THINK. BUILD. REPEAT.</span>
              <span>↗</span>
            </div>

          </div>

          <div class="blog-art-stamp">
            <span>EST.</span>
            <strong>2026</strong>
            <span>ENGINEERING</span>
          </div>

          <span class="blog-art-cross cross-one">✳</span>
          <span class="blog-art-cross cross-two">+</span>

        </div>

      </div>

      <div class="blog-hero-stats">
        <div>
          <strong><?= count($list) ?></strong>
          <span>Published articles</span>
        </div>

        <div>
          <strong>01</strong>
          <span>Engineer behind the words</span>
        </div>

        <div>
          <strong>∞</strong>
          <span>Things worth learning</span>
        </div>
      </div>

    </div>

  </section>


  <!-- ARTICLES -->
  <section class="blog-articles section" id="articles"
           aria-labelledby="articles-title">

    <div class="container">

      <div class="blog-section-heading">

        <div>
          <span class="blog-section-kicker">THE KNOWLEDGE ARCHIVE</span>
          <h2 id="articles-title">
            Explore the <span>journal.</span>
          </h2>
        </div>

        <p>
          Practical knowledge, technical discoveries
          and lessons collected along the way.
        </p>

      </div>


      <?php if ($featured): ?>

        <!-- FEATURED ARTICLE -->

        <article class="blog-featured">

          <div class="blog-featured-visual" aria-hidden="true">

            <span class="featured-index">FEATURED / 001</span>

            <div class="featured-visual-symbol">
              <span>{</span>
              <span>}</span>
            </div>

            <div class="featured-visual-bottom">
              <span>BACKEND ENGINEERING</span>
              <span>01 — FEATURED</span>
            </div>

          </div>

          <div class="blog-featured-content">

            <div class="blog-card-meta">
              <span class="blog-featured-label">FEATURED ARTICLE</span>

              <time datetime="<?= e($featured['date']) ?>">
                <?= e(date('F j, Y', strtotime($featured['date']))) ?>
              </time>
            </div>

            <h3>
              <a href="/blog/<?= e($featured['slug']) ?>">
                <?= e($featured['title']) ?>
              </a>
            </h3>

            <p><?= e($featured['description']) ?></p>

            <ul class="blog-tags" aria-label="Article tags">
              <?php foreach ($featured['tags'] as $tag): ?>
                <li><?= e($tag) ?></li>
              <?php endforeach; ?>
            </ul>

            <a class="blog-read-link"
               href="/blog/<?= e($featured['slug']) ?>">
              Read article
              <span aria-hidden="true">↗</span>
            </a>

          </div>

        </article>

      <?php endif; ?>


      <!-- ARTICLE GRID -->

      <?php if ($remaining): ?>

        <div class="blog-grid">

          <?php foreach ($remaining as $index => $p): ?>

            <article class="blog-card">

              <div class="blog-card-top">

                <span class="blog-card-number">
                  <?= e(str_pad((string) ($index + 2), 2, '0', STR_PAD_LEFT)) ?>
                </span>

                <span class="blog-card-arrow" aria-hidden="true">↗</span>

              </div>

              <div class="blog-card-body">

                <time datetime="<?= e($p['date']) ?>">
                  <?= e(date('F j, Y', strtotime($p['date']))) ?>
                </time>

                <h3>
                  <a href="/blog/<?= e($p['slug']) ?>">
                    <?= e($p['title']) ?>
                  </a>
                </h3>

                <p><?= e($p['description']) ?></p>

                <ul class="blog-tags" aria-label="Article tags">
                  <?php foreach ($p['tags'] as $tag): ?>
                    <li><?= e($tag) ?></li>
                  <?php endforeach; ?>
                </ul>

              </div>

              <a class="blog-card-read"
                 href="/blog/<?= e($p['slug']) ?>"
                 aria-label="Read <?= e($p['title']) ?>">
                Read article
                <span aria-hidden="true">→</span>
              </a>

            </article>

          <?php endforeach; ?>

        </div>

      <?php endif; ?>


      <?php if (!$list): ?>

        <div class="blog-empty">
          <span>✳</span>
          <h3>Something worth sharing is in the works.</h3>
          <p>New engineering notes are coming soon.</p>
        </div>

      <?php endif; ?>

    </div>

  </section>


  <!-- CLOSING CTA -->

  <section class="blog-closing">
    <div class="container">

      <div class="blog-closing-inner">

        <div>
          <span>ALWAYS BUILDING. ALWAYS LEARNING.</span>
          <h2>
            Better software<br>
            starts with <em>curiosity.</em>
          </h2>
        </div>

        <a href="/contact" class="blog-contact-link">
          Let's connect
          <span aria-hidden="true">↗</span>
        </a>

      </div>

    </div>
  </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>