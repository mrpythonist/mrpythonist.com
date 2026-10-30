<?php
declare(strict_types=1);
// Dispatcher for /blog/{slug}. The slug is validated against the published
// post list; unknown slugs serve the 404 page with a genuine 404 status.
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

$body_file = __DIR__ . '/content/blog/' . $post['slug'] . '.php';
$post_body = '';
if (is_file($body_file)) {
    require $body_file; // defines $post_body
}

$trail = [['Home', '/'], ['Blog', '/blog'], [$post['title'], null]];
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
            'inLanguage' => 'en',
        ],
    ],
];
$active = 'blog';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<article class="section" aria-labelledby="post-title">
  <div class="container narrow">
    <header class="post-header">
      <p class="post-meta"><time datetime="<?= e($post['date']) ?>"><?= e(date('F j, Y', strtotime($post['date']))) ?></time></p>
      <h1 id="post-title"><?= e($post['title']) ?></h1>
      <ul class="tags" aria-label="Tags">
        <?php foreach ($post['tags'] as $tag): ?><li><?= e($tag) ?></li><?php endforeach; ?>
      </ul>
    </header>
    <div class="prose">
      <?= $post_body ?>
    </div>
    <footer class="post-footer">
      <p><a href="/blog">&larr; All posts</a></p>
    </footer>
  </div>
</article>
<?php require __DIR__ . '/includes/footer.php'; ?>
