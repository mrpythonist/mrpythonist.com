<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';

/**
 * Render SEO metadata and JSON-LD structured data.
 *
 * Supported $page keys:
 * - title: Page title
 * - description: Meta description
 * - path: Canonical path, e.g. '/projects'
 * - og_type: 'website' or 'article'
 * - og_image: Optional absolute URL or site-relative image path
 * - og_image_alt: Optional social image description
 * - noindex: Whether search engines should exclude this page
 * - jsonld: Additional JSON-LD graph nodes
 */
function render_head(array $page): void
{
    $siteUrl = rtrim(SITE_URL, '/');

    $title = trim((string) ($page['title'] ?? SITE_NAME));
    $description = trim((string) ($page['description'] ?? ''));

    $path = (string) ($page['path'] ?? '/');

    // Canonical paths should be clean paths, not query strings or fragments.
    if ($path === '' || $path[0] !== '/') {
        $path = '/' . $path;
    }

    $canonical = site_url($path);

    // Allow page-specific social images, otherwise use the default.
    $imagePath = (string) (
        $page['og_image'] ?? '/assets/images/og-image.png'
    );

    $ogImage = preg_match('~^https?://~i', $imagePath)
        ? $imagePath
        : site_url('/' . ltrim($imagePath, '/'));

    $ogImageAlt = (string) (
        $page['og_image_alt'] ?? 'Muhammad Aqib — Software Engineer'
    );

    $ogType = ($page['og_type'] ?? 'website') === 'article'
        ? 'article'
        : 'website';

    $noindex = !empty($page['noindex']);

    $robots = $noindex
        ? 'noindex, nofollow'
        : 'index, follow, max-image-preview:large';

?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TRYXJCJWRB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TRYXJCJWRB');
</script>

    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($description) ?>">

    <link rel="icon" href="/assets/images/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/assets/images/favicon.png">
    <meta name="theme-color" content="#09251C">

    <meta name="robots" content="<?= e($robots) ?>">
    <meta name="author" content="<?= e(SITE_OWNER) ?>">

    <link rel="canonical" href="<?= e($canonical) ?>">

    <meta name="theme-color" content="#09251C">
    <meta name="color-scheme" content="light">

    <!-- Open Graph -->
    <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
    <meta property="og:type" content="<?= e($ogType) ?>">
    <meta property="og:title" content="<?= e($title) ?>">
    <meta property="og:description" content="<?= e($description) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:image" content="<?= e($ogImage) ?>">
    <meta property="og:image:alt" content="<?= e($ogImageAlt) ?>">
    <meta property="og:locale" content="en_PK">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($title) ?>">
    <meta name="twitter:description" content="<?= e($description) ?>">
    <meta name="twitter:image" content="<?= e($ogImage) ?>">
    <meta name="twitter:image:alt" content="<?= e($ogImageAlt) ?>">

    <link rel="stylesheet" href="<?= e(asset_url('css/style.css')) ?>">

<?php

    $personId = $siteUrl . '/#person';
    $websiteId = $siteUrl . '/#website';

    $graph = [
        [
            '@type' => 'Person',
            '@id' => $personId,
            'name' => SITE_OWNER,
            'url' => $siteUrl . '/',
            'jobTitle' => 'Software Engineer',
            'description' => 'Software Engineer focused on full-stack applications, backend systems, and cloud infrastructure.',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Multan',
                'addressRegion' => 'Punjab',
                'addressCountry' => 'PK',
            ],
            'sameAs' => [
                GITHUB_URL,
                LINKEDIN_URL,
            ],
            'knowsAbout' => [
                'Full-stack development',
                'Backend engineering',
                'API development',
                'JavaScript',
                'TypeScript',
                'PHP',
                'Laravel',
                'React',
                'Next.js',
                'Node.js',
                'PostgreSQL',
                'AWS',
                'Docker',
                'Linux',
                'DevOps',
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => $websiteId,
            'name' => SITE_NAME,
            'url' => $siteUrl . '/',
            'publisher' => [
                '@id' => $personId,
            ],
            'inLanguage' => 'en-PK',
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonical . '#webpage',
            'url' => $canonical,
            'name' => $title,
            'description' => $description,
            'isPartOf' => [
                '@id' => $websiteId,
            ],
            'about' => [
                '@id' => $personId,
            ],
            'inLanguage' => 'en-PK',
        ],
    ];

    foreach (($page['jsonld'] ?? []) as $node) {
        if (is_array($node)) {
            $graph[] = $node;
        }
    }

    $jsonld = [
        '@context' => 'https://schema.org',
        '@graph' => $graph,
    ];

    echo '<script type="application/ld+json">'
        . json_encode(
            $jsonld,
            JSON_UNESCAPED_SLASHES
                | JSON_UNESCAPED_UNICODE
                | JSON_HEX_TAG
                | JSON_HEX_AMP
                | JSON_HEX_APOS
                | JSON_HEX_QUOT
                | JSON_THROW_ON_ERROR
        )
        . "</script>\n";
}
