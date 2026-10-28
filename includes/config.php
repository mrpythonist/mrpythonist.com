<?php
declare(strict_types=1);

// Central configuration. Change the production domain here only —
// every canonical URL, Open Graph URL and sitemap entry is built from it.
const SITE_NAME = 'mrpythonist';
const SITE_OWNER = 'Muhammad Aqib';
const SITE_DOMAIN = 'mrpythonist.com';
const SITE_URL = 'https://mrpythonist.com';
const SITE_LOCALE = 'en';
const ASSET_VERSION = '1';

// Contact details verified from Aqib's existing mrpythonist.com site.
// Do not add an address, phone number or form here without a real one.
const GITHUB_URL = 'https://github.com/mrpythonist';
const LINKEDIN_URL = 'https://www.linkedin.com/in/mrpythonist/';
const CONTACT_EMAIL = 'muhammadaqib5475@gmail.com';
const LOCATION = 'Multan, Punjab, Pakistan';

/**
 * Build an absolute URL for a site path (e.g. '/projects').
 * An empty path returns the homepage URL without a trailing slash issue.
 */
function site_url(string $path = ''): string
{
    $path = trim($path);
    if ($path === '' || $path === '/') {
        return SITE_URL . '/';
    }
    if ($path[0] !== '/') {
        $path = '/' . $path;
    }
    return SITE_URL . $path;
}

/** Build a versioned asset URL (relative, so the site also works in a subfolder). */
function asset_url(string $path): string
{
    return '/assets/' . ltrim($path, '/') . '?v=' . ASSET_VERSION;
}

/** Escape output for HTML. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
