<?php
declare(strict_types=1);

// Blog post metadata. Bodies live in content/blog/{slug}.php.
// Only published posts appear in the index and sitemap.
// 'status' => 'draft' keeps a post out of the index and sitemap entirely.

// Block direct web access: this file is included by pages, never served.
if (($_SERVER['SCRIPT_FILENAME'] ?? '') !== '' && realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) {
    http_response_code(404);
    exit;
}

$posts = [
    [
        'slug' => 'deploying-php-on-litespeed-shared-hosting',
        'title' => 'Deploying a no-framework PHP site on LiteSpeed shared hosting',
        'date' => '2026-10-29',
        'description' => 'What deploying this portfolio to HosterPK shared hosting taught me about LiteSpeed file permissions, .htaccess and clean URLs without a framework.',
        'tags' => ['PHP', 'Linux', 'Hosting'],
        'status' => 'published',
    ],
    [
        'slug' => 'clean-urls-mod-rewrite-shared-hosting',
        'title' => 'Clean URLs with mod_rewrite on shared hosting (no framework)',
        'date' => '2026-10-29',
        'description' => 'How this site serves /projects and /contact with Apache rewrite rules on LiteSpeed — canonical redirects, genuine 404s and no redirect loops.',
        'tags' => ['PHP', 'Linux'],
        'status' => 'published',
    ],
    [
        'slug' => 'cpanel-file-manager-http-406-modsecurity',
        'title' => 'When cPanel File Manager rejects your upload: HTTP 406 and ModSecurity',
        'date' => '2026-10-29',
        'description' => 'File Manager uploads containing script tags were rejected with HTTP 406 by the host WAF. Here is what worked instead.',
        'tags' => ['Linux', 'Hosting'],
        'status' => 'published',
    ],
    [
        'slug' => 'search-console-domain-verification-dns-txt',
        'title' => 'Verifying a domain in Google Search Console with a DNS TXT record',
        'date' => '2026-10-29',
        'description' => 'Domain-level verification via DNS TXT, submitting a sitemap with a bare path, and requesting indexing — the exact steps that worked for this site.',
        'tags' => ['SEO', 'Hosting'],
        'status' => 'published',
    ],
    [
        'slug' => 'php-shared-hosting-deployment-checklist',
        'title' => 'A deployment checklist for PHP sites on shared hosting',
        'date' => '2026-10-29',
        'description' => 'The repeatable checklist I run for every PHP deploy: backups, permissions, rewrite rules, cache-busting, verification and rollback.',
        'tags' => ['PHP', 'Linux', 'Hosting'],
        'status' => 'published',
    ],
    [
        'slug' => 'triaging-production-incidents',
        'title' => 'How I triage a production incident',
        'date' => '2026-10-29',
        'description' => 'Blast radius first, recent changes second, logs over assumptions: the method I use when production breaks.',
        'tags' => ['Backend', 'DevOps'],
        'status' => 'published',
    ],
];

/** Find a published post by slug, or null. */
function find_post(string $slug): ?array
{
    global $posts;
    foreach ($posts as $post) {
        if ($post['slug'] === $slug && $post['status'] === 'published') {
            return $post;
        }
    }
    return null;
}

/** Published posts, newest first. */
function published_posts(): array
{
    global $posts;
    $list = array_values(array_filter($posts, fn($p) => $p['status'] === 'published'));
    usort($list, fn($a, $b) => strcmp($b['date'], $a['date']));
    return $list;
}
