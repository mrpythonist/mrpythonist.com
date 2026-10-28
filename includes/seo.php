<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';

/**
 * Render <head> metadata + JSON-LD for a page.
 *
 * $page keys: title, description, path (canonical path, e.g. '/projects'),
 * og_type ('website'|'article'), noindex (bool), jsonld (array, extra graph nodes).
 */
function render_head(array $page): void
{
    $title = $page['title'];
    $description = $page['description'];
    $canonical = site_url($page['path'] ?? '/');
    $og_image = site_url('/assets/images/og-image.png');
    $noindex = !empty($page['noindex']);
    $robots = $noindex ? 'noindex, nofollow' : 'index, follow, max-image-preview:large';
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($description) ?>">
    <link rel="canonical" href="<?= e($canonical) ?>">
    <meta name="robots" content="<?= e($robots) ?>">
    <meta property="og:title" content="<?= e($title) ?>">
    <meta property="og:description" content="<?= e($description) ?>">
    <meta property="og:type" content="<?= e($page['og_type'] ?? 'website') ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:image" content="<?= e($og_image) ?>">
    <meta property="og:image:alt" content="Muhammad Aqib — Software Engineer, mrpythonist">
    <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
    <meta property="og:locale" content="en_PK">
    <meta name="theme-color" content="#09251C">
    <link rel="stylesheet" href="<?= e(asset_url('css/style.css')) ?>">
    <?php
    $graph = [
        [
            '@type' => 'Person',
            '@id' => SITE_URL . '/#person',
            'name' => SITE_OWNER,
            'url' => SITE_URL . '/',
            'jobTitle' => 'Software Engineer',
            'description' => 'Software Engineer focused on full-stack applications, backend systems, and cloud infrastructure.',
            'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Multan', 'addressRegion' => 'Punjab', 'addressCountry' => 'PK'],
            'sameAs' => [GITHUB_URL, LINKEDIN_URL],
            'knowsAbout' => ['Full-stack development', 'Backend engineering', 'API development', 'PostgreSQL', 'AWS', 'Docker', 'Linux', 'DevOps'],
        ],
        [
            '@type' => 'WebSite',
            '@id' => SITE_URL . '/#website',
            'name' => SITE_NAME,
            'url' => SITE_URL . '/',
            'publisher' => ['@id' => SITE_URL . '/#person'],
            'inLanguage' => 'en',
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonical . '#webpage',
            'url' => $canonical,
            'name' => $title,
            'description' => $description,
            'isPartOf' => ['@id' => SITE_URL . '/#website'],
            'about' => ['@id' => SITE_URL . '/#person'],
            'inLanguage' => 'en',
        ],
    ];
    foreach ($page['jsonld'] ?? [] as $node) {
        $graph[] = $node;
    }
    $jsonld = ['@context' => 'https://schema.org', '@graph' => $graph];
    echo '<script type="application/ld+json">'
        . json_encode($jsonld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR)
        . "</script>\n";
}
