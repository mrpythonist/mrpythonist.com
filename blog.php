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
$page = [
    'title' => 'Blog | Muhammad Aqib — Notes on Backend, PHP & DevOps',
    'description' => 'Technical notes by Muhammad Aqib on PHP deployment, clean URLs, shared hosting, SEO and backend engineering — written from real experience.',
    'path' => '/blog',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Blog',
    'jsonld' => [
        breadcrumbs_jsonld($trail),
        ['@type' => 'ItemList', 'name' => 'Blog posts', 'itemListElement' => $item_elements],
    ],
];
$active = 'blog';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Blog</h1>
    <p class="lede">Short technical notes from real work — deployment, hosting, SEO and backend engineering. No filler.</p>
  </div>
</section>
<section class="section" aria-label="Blog posts">
  <div class="container narrow">
    <?php foreach ($list as $p): ?>
    <article class="card post-card">
      <p class="post-meta"><time datetime="<?= e($p['date']) ?>"><?= e(date('F j, Y', strtotime($p['date']))) ?></time></p>
      <h2><a href="/blog/<?= e($p['slug']) ?>"><?= e($p['title']) ?></a></h2>
      <p><?= e($p['description']) ?></p>
      <ul class="tags" aria-label="Tags">
        <?php foreach ($p['tags'] as $tag): ?><li><?= e($tag) ?></li><?php endforeach; ?>
      </ul>
    </article>
    <?php endforeach; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
