<?php

declare(strict_types=1);

// Dispatcher for /blog/{slug}. Unknown slugs serve a genuine 404.
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/blog.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$slug = strtolower(trim($_GET['slug'] ?? ''));
$post = preg_match('/^[a-z0-9-]+$/', $slug) ? find_post($slug) : null;

if ($post === null) {
  http_response_code(404);
  $page = [
    'title' => 'Page Not Found | Muhammad Aqib',
    'description' => 'The page you are looking for does not exist on Muhammad Aqib\'s portfolio.',
    'path' => '/404',
    'noindex' => true,
  ];
  $active = 'blog';
  require __DIR__ . '/404.php';
  exit;
}

// Canonical redirect: /blog-post.php?slug=x -> /blog/x
$request_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';

if ($request_path !== '/blog/' . $slug) {
  header('Location: ' . site_url('/blog/' . $slug), true, 301);
  exit;
}

// Load published post content.
$body_file = __DIR__ . '/content/blog/' . $post['slug'] . '.php';
$post_body = '';

if (is_file($body_file)) {
  require $body_file;
}

// Estimate reading time from the article body.
$word_count = str_word_count(strip_tags($post_body));
$reading_time = max(1, (int) ceil($word_count / 220));

$trail = [
  ['Home', '/'],
  ['Blog', '/blog'],
  [$post['title'], null],
];

$page = [
  'title' => $post['title'] . ' | Muhammad Aqib',
  'description' => $post['description'],
  'path' => '/blog/' . $slug,
  'og_type' => 'article',
  'og_image' => '/assets/images/og-image.png',
  'og_image_alt' => 'Muhammad Aqib — ' . $post['title'],
  'jsonld' => [
    breadcrumbs_jsonld($trail),
    [
      '@type' => 'BlogPosting',
      'headline' => $post['title'],
      'description' => $post['description'],
      'datePublished' => $post['date'],
      'author' => ['@id' => SITE_URL . '/#person'],
      'publisher' => ['@id' => SITE_URL . '/#person'],
      'mainEntityOfPage' => site_url('/blog/' . $slug),
      'wordCount' => $word_count,
      'timeRequired' => 'PT' . $reading_time . 'M',
      'inLanguage' => 'en',
    ],
  ],
];

$active = 'blog';

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>

<main class="blog-article-page">

  <header class="blog-article-hero">
    <div class="container">

      <div class="blog-article-kicker">
        <span class="blog-article-kicker-line"></span>
        ENGINEERING JOURNAL
      </div>

      <div class="blog-article-meta">
        <span class="blog-article-date">
          <time datetime="<?= e($post['date']) ?>">
            <?= e(date('F j, Y', strtotime($post['date']))) ?>
          </time>
        </span>

        <span class="blog-article-meta-dot"></span>

        <span><?= $reading_time ?> MIN READ</span>
      </div>

      <h1 id="post-title" class="blog-article-title">
        <?= e($post['title']) ?>
      </h1>

      <p class="blog-article-description">
        <?= e($post['description']) ?>
      </p>

      <?php if (!empty($post['tags'])): ?>
        <ul class="blog-article-tags" aria-label="Article topics">
          <?php foreach ($post['tags'] as $tag): ?>
            <li><?= e($tag) ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <div class="blog-article-author">
        <img
          class="blog-author-image"
          src="/assets/images/mrpythonist.png"
          alt="Muhammad Aqib"
          width="42"
          height="42"
          loading="eager"
          decoding="async">

        <div>
          <strong>Muhammad Aqib</strong>
          <span>Software Engineer · Multan, Pakistan</span>
        </div>
      </div>

    </div>
  </header>

  <div class="container narrow">

    <article class="blog-article-content" aria-labelledby="post-title">

      <div class="blog-article-content-top">
        <span>THE ARTICLE</span>
        <span>01 — <?= sprintf('%02d', max(1, (int) ceil($word_count / 500))) ?></span>
      </div>

      <div class="prose blog-prose">
        <?= $post_body ?>
      </div>

      <footer class="blog-article-footer">

        <img
          class="blog-author-image"
          src="/assets/images/mrpythonist.png"
          alt="Muhammad Aqib"
          width="42"
          height="42"
          loading="lazy"
          decoding="async">

        <div class="blog-article-footer-copy">
          <strong>Thanks for reading.</strong>
          <p>
            I write about software engineering, backend systems,
            development practices, and the things I learn along the way.
          </p>
        </div>

        <a class="blog-article-back" href="/blog" aria-label="Back to all blog posts">
          <span>←</span>
          <span>ALL ARTICLES</span>
        </a>

      </footer>

    </article>

  </div>

  <section class="blog-article-next">
    <div class="container narrow">
      <span>KEEP EXPLORING</span>
      <h2>More ideas.<br><em>Better engineering.</em></h2>
      <a href="/blog">Explore the journal <span>↗</span></a>
    </div>
  </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>