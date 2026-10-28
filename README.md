# mrpythonist — Personal Portfolio (PHP)

Production-ready, SEO-optimised personal portfolio for **Muhammad Aqib (@mrpythonist)**,
Software Engineer in Multan, Punjab, Pakistan.

Built with **PHP, semantic HTML5, CSS3 and vanilla JavaScript only** — no frameworks,
no build step, no third-party scripts, no database. It reproduces the reference layout
(hero with terminal illustration, featured projects, tech stack, experience / about /
contact) in the mandated palette: forest green `#09251C`, burnt amber `#A55704`,
warm peach `#F3D2AF`, soft beige `#F8EADC`. No blue, cyan or purple accents are used.

## What is deliberately NOT here

- **No fake contact form.** A form that does not deliver mail would be misleading.
  Contact is via the verified GitHub / LinkedIn links and email address.
- **No invented metrics, testimonials, awards or project URLs.** The Cloud & DevOps
  Lab is labelled a learning lab, and the Food Delivery System is labelled in development.
- **No fake test scores or indexing claims.** See "Test results" below for what was
  actually measured, and what was not.

## Requirements

- PHP 8.1+ (any SAPI; Apache/Nginx with PHP-FPM in production)
- No Composer packages, no Node.js, no database

## Local development

```bash
cd mrpythonist-portfolio
php -S localhost:8000 router.php
# Open http://localhost:8000/  — clean URLs /projects and /contact work via router.php
```

Without a router, the direct files also work: `index.php`, `projects.php`, `contact.php`.

## Structure

```text
index.php / projects.php / contact.php / 404.php   # pages (unique titles + descriptions)
router.php                                          # clean URLs for php -S only
includes/config.php                                 # domain, links, URL helpers — edit domain here only
includes/seo.php                                    # <head> metadata + JSON-LD (Person / WebSite / WebPage)
includes/header.php / footer.php                    # shared chrome + navigation
includes/hero.php / projects-section.php / tech-stack.php
       / experience.php / about.php / contact-section.php
data/portfolio.php                                  # projects, tech stack, experience (no metrics)
assets/css/style.css  assets/js/main.js             # single stylesheet, tiny menu script
assets/images/og-image.png                          # 1200×630 Open Graph image (original, palette-matched)
robots.txt  sitemap.xml  sitemap.xsl  humans.txt
.htaccess                                           # Apache: clean URLs, 404, canonical HTTPS host, caching
nginx.conf.example                                  # Nginx equivalent (adapt root + PHP-FPM socket)
```

## Production domain

Canonical domain is configured once in `includes/config.php`:
`https://mrpythonist.com`. Canonical URLs, Open Graph URLs and sitemap entries are
all built from it — do not hardcode the domain elsewhere. The sitemap `lastmod`
values are the build date (2026-10-28); update them only when a page actually changes.

## Apache deployment (e.g. HosterPK shared hosting)

1. Upload the contents of this folder to `public_html/` (not the folder itself,
   unless you want the site at `mrpythonist.com/mrpythonist-portfolio/`).
2. Confirm PHP is enabled and `.htaccess` is honoured. `.htaccess` forces
   `https://mrpythonist.com`, redirects `/projects.php` → `/projects`, and serves
   `404.php` with a real 404 status.
3. Check `https://mrpythonist.com/robots.txt` and `https://mrpythonist.com/sitemap.xml`
   return HTTP 200 and contain no localhost/staging URLs.

## Nginx deployment

Use `nginx.conf.example` as a starting point: set `root` to the uploaded folder,
point `fastcgi_pass` at your PHP-FPM socket, test with `nginx -t`, then reload.
`.htaccess` does nothing under Nginx — do not rely on it there.

## HTTPS

HosterPK already serves mrpythonist.com over HTTPS. Keep the `.htaccess` HTTPS
redirect in place; mixed-content and non-canonical host variants will otherwise
split indexing between http/www/apex versions.

## Google Search Console (indexing readiness — not a guarantee)

1. Add the property `https://mrpythonist.com` in Search Console.
2. Verify ownership with a supported method (DNS TXT or HTML file). **No
   verification token is included in this repo** — add the real value only when
   Google issues one, e.g. as a `<meta name="google-site-verification">` tag in
   `includes/seo.php`, and remove it from any public example afterwards if you prefer.
3. Submit `https://mrpythonist.com/sitemap.xml` under Sitemaps.
4. Use URL Inspection to request indexing for `/`, `/projects` and `/contact`.
5. Watch Page Indexing for canonical-selection / crawl errors, and Core Web Vitals
   once real-user field data exists. A brand-new site typically has no field data yet;
   lab Lighthouse scores are not field Core Web Vitals.

## Updating content

Edit `data/portfolio.php` for projects / stack / experience, and the `about.php`
copy for the About text. Page titles and descriptions live in each page file's
`$page` array. After adding a page, add its canonical URL to `sitemap.xml` and
to the navigation if it should be discoverable.

## Performance notes

- One small stylesheet, one tiny deferred script, system font stack (no webfont
  download), CSS-only project-card visuals (no above-the-fold images to block LCP),
  no third-party requests. That is the whole performance strategy — it keeps LCP
  to text rendering and CLS near zero, and INP to a single menu toggle.
- Long-lived caching for versioned CSS/JS/PNG is set in `.htaccess` / Nginx example;
  bump `ASSET_VERSION` in `config.php` when assets change.

## Test results

<!-- Filled in after the verification run on 2026-10-28; do not edit scores by hand. -->

- PHP syntax: every `.php` file parses cleanly with a modern PHP 8 parser
  (16/16 files). `php -l` itself could not be run in this VM because `php-cli`
  is not installed and the apt mirror was too slow to install it, so execution
  was verified instead with a real PHP 8.3 runtime (WebAssembly build):
  `index.php`, `projects.php` and `contact.php` each rendered with no warnings
  or errors, and `404.php` rendered with HTTP status 404.
  Rendered sizes: home 9,694 bytes, projects 7,954, contact 4,883, 404 4,254.
- HTTP: from that PHP 8.3 execution, home/projects/contact return 200 and the
  404 page returns 404. `robots.txt` and `sitemap.xml` are static files (valid
  XML checked for the sitemap); they were not served over HTTP in this VM, so
  confirm they return 200 after upload. The `router.php` clean-URL mapping was
  parsed but not live-tested via `php -S` for the same reason — test
  `http://localhost:8000/projects` locally before relying on it.
- SEO: unique titles/descriptions/canonicals per page; JSON-LD parses as valid JSON
  and contains Person + WebSite + WebPage; sitemap parses as valid XML with only
  canonical HTTPS URLs; `robots.txt` allows `/` and lists the sitemap.
- Accessibility: single H1 per page, nested H2/H3, skip link, visible focus
  indicators, keyboard-operable mobile menu, `prefers-reduced-motion` respected.
  Contrast was checked programmatically: beige on forest green 13.76:1 and peach
  on forest green 11.33:1 (both pass AA for normal text); beige on the amber
  button background is 4.49:1 (passes AA for large/bold text — amber is not used
  for small body text on forest green).
- **Not yet measured, and not claimed:** Lighthouse / PageSpeed scores and
  real-user Core Web Vitals. Those require the deployed production URL and, for
  field data, real traffic. Run Lighthouse against the deployed site (mobile +
  desktop) before claiming any score.

## Troubleshooting

- **Blank page / PHP shown as text:** PHP is not enabled for that directory —
  check hosting PHP version and handler, not this code.
- **Clean URLs 404 on Apache:** `.htaccess` is being ignored — enable
  `AllowOverride All` for the document root (or ask the host).
- **CSS not updating:** bump `ASSET_VERSION` in `includes/config.php` to bust
  the 1-year cache, or hard-refresh.
- **Old site still showing after upload:** confirm files went to `public_html/`
  itself, and that no older `index.html` is taking precedence over `index.php`.
