# Development

How to work on mrpythonist.com locally, verify a change, and deploy it.

## Prerequisites

- PHP 8.1 or newer with the CLI. Check with `php -v`. Production runs
  PHP 8.2; this guide was verified with PHP 8.3 CLI.
- Git. Nothing else. No Composer, no Node.js, no Docker, no database.

## Run locally

```bash
git clone https://github.com/mrpythonist/mrpythonist.com.git
cd mrpythonist.com
php -S localhost:8000 router.php
```

Open http://localhost:8000/. `router.php` maps clean URLs (`/projects`,
`/blog`, `/blog/{slug}`, `/projects/{slug}`, `/tech-stack/{slug}`) to the
right PHP files, strips trailing slashes with a 301, and serves static
assets directly. It runs only under the built-in server.

Stop the server with Ctrl-C.

## Verify a change

There is no test suite. Run these two checks before every commit:

```bash
# 1. Syntax check every PHP file (41 files)
find . -name "*.php" -exec php -l {} \;

# 2. Serve locally and load the pages you changed
php -S localhost:8000 router.php
```

Then check in a browser, at minimum:

- The page you changed.
- The home page (`/`).
- One blog post (`/blog/deploying-php-on-litespeed-shared-hosting`).
- One unknown URL, to confirm the 404 page still works.

Expected results, verified 2026-11-06 (captured output in
`docs/screenshots/`):

- `php -l`: all 41 PHP files pass, zero errors.
- HTTP 200: `/`, `/projects`, `/about`, `/experience`, `/tech-stack`,
  `/services`, `/resume`, `/certifications`, `/open-source`, `/cloud`,
  `/engineering-principles`, `/uses`, `/now`, `/blog`, `/contact`,
  `/blog/deploying-php-on-litespeed-shared-hosting`,
  `/projects/food-delivery-system`, `/tech-stack/php`, `/robots.txt`,
  `/sitemap.xml`.
- HTTP 404 with the 404 page: `/nonexistent-page`, `/blog/no-such-post`.

A helper script that runs the full route check and saves the output is in
`docs/screenshots/run-route-check.sh`. It starts the server on port 8125,
curls every route, writes `docs/screenshots/curl-routes.txt`, and stops the
server.

## Edit content

- **Projects, stack summary, experience:** `data/portfolio.php`.
- **Technology detail pages:** `data/tech.php`. Keep the experience level
  honest: `production`, `professional`, `familiarity`, or `learning`.
- **Project detail pages:** `data/project-details.php`.
- **Page titles and descriptions:** the `$page` array at the top of each
  page file.
- **Site-wide settings:** `includes/config.php` only. Domain, links, contact
  email, `ASSET_VERSION`. Do not hardcode the domain anywhere else.
- **Blog posts:** see the README section "Blog publishing workflow".
  Metadata in `data/blog.php`, body in `content/blog/{slug}.php`, plus a
  manual `sitemap.xml` entry.

## Add a new page

1. Create the page file, following an existing page (set `$page`, require
   header, print content, require footer).
2. Add its route to `router.php`.
3. Add its canonical URL to `sitemap.xml` with a `lastmod` date.
4. Add it to the navigation in `includes/header.php` if it should be
   discoverable.
5. Lint it and load it locally, plus the home page and the sitemap.

## Deploy

The live site runs on HosterPK shared hosting (cPanel, PHP 8.2,
LiteSpeed). See the README "Deployment" section for the full checklist.
Short version: back up the live site, upload changed files to
`public_html/`, bump `ASSET_VERSION` if assets changed, and verify the
live URLs return 200.

Host quirks worth knowing:

- The WAF rejects File Manager uploads containing script tags with HTTP
  406. Use the cPanel code editor, Terminal, or FTP for those files.
- Re-zipping can drop hidden files. Verify the `.htaccess` files in
  `includes/`, `data/`, and `content/` after any upload.
- Edit PHP settings through the cPanel MultiPHP INI Editor, not by editing
  `php.ini` by hand.
- `mail()` delivery from the contact form depends on the host. Test a
  submission on the live host after a deploy; do not assume it works.

## Style notes

- Plain PHP with `declare(strict_types=1)`, 4-space indentation.
- No em dashes anywhere in files you write.
- No invented facts. Dates, experience, and project claims must match the
  real record.
- Keep the design palette as it is: forest green, burnt amber, warm peach,
  soft beige.
