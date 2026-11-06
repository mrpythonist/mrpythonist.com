# mrpythonist.com

Personal portfolio and blog of Muhammad Aqib, software engineer from Multan, Punjab, Pakistan. Live at https://mrpythonist.com.

A no-framework PHP site: plain PHP, semantic HTML, one stylesheet, a small vanilla JavaScript file. No framework, no build step, no database, no third-party scripts. Content lives in PHP data files, not a CMS.

## What the site is

- A portfolio: home, projects, experience, tech stack, services, resume, certifications, open source, cloud and DevOps notes, engineering principles, uses, and now pages.
- A blog: short technical notes written from real experience, mostly about PHP deployment, shared hosting, clean URLs, SEO, and production incidents.
- A contact page: a form plus direct email, GitHub, and LinkedIn links. Read the contact note below before assuming the form delivers mail.

## Pages

Top-level pages, each with its own title, description, and canonical URL:

| Path | Page |
| --- | --- |
| `/` | Home: hero, featured projects, tech stack, experience, about, contact |
| `/about` | About |
| `/experience` | Professional experience |
| `/tech-stack` | Tech stack overview |
| `/services` | Services |
| `/projects` | Project list |
| `/resume` | Resume |
| `/certifications` | Certifications and badges |
| `/open-source` | Open source work |
| `/cloud` | Cloud and DevOps |
| `/engineering-principles` | Engineering principles |
| `/uses` | Tools and workflow |
| `/now` | Current focus |
| `/blog` | Blog index |
| `/contact` | Contact |

Detail pages use slug dispatchers:

- `/projects/{slug}`: 3 projects (`food-delivery-system`, `backend-engineering-api-systems`, `cloud-devops-lab`). Data in `data/portfolio.php` and `data/project-details.php`, rendered by `project-page.php`.
- `/tech-stack/{slug}`: 15 technology pages (PHP, Laravel, JavaScript, TypeScript, React, Next.js, Node.js, Express, PostgreSQL, MongoDB, Redis, Docker, AWS, Linux, Terraform). Data in `data/tech.php`, rendered by `tech-page.php`. Each page states an honest experience level: production, professional, working familiarity, or currently learning.
- `/blog/{slug}`: 6 published posts. See "Blog publishing workflow" below.

Unknown paths and unknown slugs return a genuine 404 through `404.php`.

## Tech stack

- PHP 8.1+ (production runs PHP 8.2 on HosterPK shared hosting; verified locally on PHP 8.3 CLI)
- Semantic HTML5, CSS3, vanilla JavaScript
- Apache with `mod_rewrite` on the live host (LiteSpeed); `nginx.conf.example` is a starting point for Nginx
- No Composer packages, no Node.js, no database, no framework

Design: forest green `#09251C`, burnt amber `#A55704`, warm peach `#F3D2AF`, soft beige `#F8EADC`. System font stack, no webfont downloads, no third-party requests.

## Prerequisites

- PHP 8.1 or newer with the CLI (`php -v` to check). No other tooling is needed.
- Optional: a local Apache/Nginx setup if you want to test server rewrite rules instead of the built-in server router.

## Local setup

```bash
git clone https://github.com/mrpythonist/mrpythonist.com.git
cd mrpythonist.com
php -S localhost:8000 router.php
```

Open http://localhost:8000/. Clean URLs such as `/projects` and `/blog` work through `router.php`, which exists only for the built-in server. Apache uses rewrite rules on the host instead; this file is never executed on the live server.

Direct files also work without the router: `index.php`, `projects.php`, `contact.php`, and the rest.

## Deployment

The live site runs on HosterPK shared hosting (cPanel, PHP 8.2, LiteSpeed). Deploy by uploading the contents of this folder to `public_html/`, not the folder itself.

1. Take a backup of the live site first.
2. Upload the changed files to `public_html/`.
3. Confirm PHP is enabled for the directory. If PHP shows as text or pages are blank, PHP is not enabled; check the hosting PHP version and handler, not this code.
4. Confirm clean URLs work. There is no root `.htaccess` committed in this repo, so the live host keeps its own rewrite rules for clean URLs, canonical HTTPS host, and the 404 page. Do not assume the rules in this repo cover Apache; `router.php` is local only and `nginx.conf.example` is a starting point, not a live server block.
5. After upload, check that `https://mrpythonist.com/robots.txt` and `https://mrpythonist.com/sitemap.xml` return HTTP 200 and contain no localhost or staging URLs.
6. Bump `ASSET_VERSION` in `includes/config.php` when CSS, JS, or images change, to bust the long-lived browser cache. Or hard-refresh in the browser.
7. If an older `index.html` exists in `public_html/`, it takes precedence over `index.php`. Remove it.

The canonical domain is configured once in `includes/config.php` (`https://mrpythonist.com`). Canonical URLs, Open Graph URLs, and sitemap entries are built from it. Do not hardcode the domain elsewhere.

Notes from running this site on shared hosting:

- `php.ini` in this repo is the cPanel-generated file. It sets the error log path on the host. Edit PHP settings through the cPanel MultiPHP INI Editor, not by editing that file by hand.
- The host WAF (ModSecurity) has rejected File Manager uploads containing script tags with HTTP 406. Use the cPanel code editor, Terminal, or FTP for those files. See the blog post `/blog/cpanel-file-manager-http-406-modsecurity`.
- Re-zipping on some systems drops hidden files. Verify dotfiles (`.htaccess` files in `includes/`, `data/`, and `content/`) are present after any upload.

## Project structure

```text
index.php, about.php, experience.php, ...   # one file per top-level page
404.php                                     # genuine 404 page
blog.php                                    # blog index (lists published posts)
blog-post.php                               # dispatcher for /blog/{slug}
project-page.php                            # dispatcher for /projects/{slug}
tech-page.php                               # dispatcher for /tech-stack/{slug}
router.php                                  # clean URLs for php -S only
includes/
  config.php                                # domain, links, URL helpers, ASSET_VERSION
  seo.php                                   # <head> metadata + JSON-LD (Person, WebSite, WebPage)
  header.php, footer.php                    # shared page chrome and navigation
  hero.php, projects-section.php,           # home page sections
  tech-stack.php, experience.php,
  about.php, contact-section.php
  breadcrumbs.php                           # breadcrumbs + JSON-LD
data/
  portfolio.php                             # projects, tech stack summary, experience
  tech.php                                  # 15 technology detail pages
  project-details.php                       # project detail content
  blog.php                                  # blog post metadata (see below)
content/blog/{slug}.php                     # blog post bodies (HTML in $post_body)
assets/css/style.css                        # single stylesheet
assets/js/main.js                           # small menu script
assets/images/                            # favicon, Open Graph image, tech icons
robots.txt, sitemap.xml, sitemap.xsl        # SEO files (sitemap is static; update by hand)
humans.txt                                  # site credits
nginx.conf.example                          # Nginx starting point (adapt root and PHP-FPM socket)
php.ini                                     # cPanel-generated PHP settings (see deployment notes)
mrpythonist.zip                             # old deployment archive, kept for reference
```

Direct web access to `includes/`, `data/`, and `content/` is denied by the `.htaccess` files inside each of those directories, and by `robots.txt`. The data files also return 404 if requested directly as scripts.

## Blog publishing workflow

Blog posts have two parts:

1. Metadata in `data/blog.php`: an entry in the `$posts` array with `slug`, `title`, `date`, `description`, `tags`, and `status`. Only `status => 'published'` posts appear in the index and the sitemap. Use `status => 'draft'` to keep a post out entirely.
2. Body in `content/blog/{slug}.php`: the article HTML, assigned to `$post_body`.

To publish a post:

1. Add the metadata entry to `data/blog.php` with `status => 'published'`.
2. Create `content/blog/{slug}.php` with the article body. The slug must match the metadata entry and contain only lowercase letters, digits, and hyphens.
3. Add the post URL to `sitemap.xml` with the publish date as `lastmod`.
4. Run `php -l` on both files and load the post locally (`/blog/{slug}`) plus the index (`/blog`) before deploying.
5. Upload and verify the live URL returns 200.

`blog-post.php` validates the slug format, looks the post up with `find_post()`, and serves a genuine 404 for unknown slugs. It also redirects the old query-string form (`/blog-post.php?slug=x`) to the clean URL with a 301. Reading time is estimated from the body word count at 220 words per minute.

There is an automated daily blog publisher (a cron job, not part of this repo) that adds posts from a topic log. It publishes one post per day, from real experience only, and verifies the saved file after writing. If a post ever breaks the blog, the fix is to restore `data/blog.php` from the pre-edit backup and re-verify every `/blog/{slug}` URL.

## Contact form: read this before relying on it

`contact.php` contains a real form. It validates input, checks a CSRF token, uses a honeypot field, rate-limits to one submission per minute per session, strips newlines from the reply-to address to block header injection, and attempts delivery with PHP `mail()` to the address in `CONTACT_EMAIL` (`includes/config.php`).

Delivery depends entirely on the host mail setup. `mail()` has failed on the live shared host before, and the code is written to show an error in that case instead of a false success. Do not claim the form works until you have tested a submission on the live host after a deploy. The mailto link in the contact section always works as a fallback, and GitHub and LinkedIn links are on the same page.

## SEO

- Unique title, description, and canonical URL per page, rendered by `includes/seo.php`.
- JSON-LD: Person and WebSite on the home page, WebPage and BreadcrumbList elsewhere, ItemList on the blog index, Article data on posts.
- Static `sitemap.xml` with 39 URLs and `lastmod` dates. Update `lastmod` only when a page actually changes. The sitemap is static, so new pages and posts must be added by hand.
- `robots.txt` allows `/`, disallows `/includes/`, `/data/`, `/content/`, and lists the sitemap.
- Google Search Console verification is by DNS TXT record, so no verification token is committed in this repo.

## Testing and verification

No test suite exists. Verification is manual, against the built-in server:

```bash
# Syntax check every PHP file (41 files)
find . -name "*.php" -exec php -l {} \;

# Serve locally and check routes
php -S localhost:8000 router.php
curl -s -o /dev/null -w "%{http_code}\n" http://localhost:8000/
curl -s -o /dev/null -w "%{http_code}\n" http://localhost:8000/blog
```

Verified locally on 2026-11-06 with PHP 8.3 CLI (see `docs/screenshots/` for the captured output):

- `php -l`: all 41 PHP files parse cleanly.
- HTTP 200: `/`, `/projects`, `/about`, `/experience`, `/tech-stack`, `/services`, `/resume`, `/certifications`, `/open-source`, `/cloud`, `/engineering-principles`, `/uses`, `/now`, `/blog`, `/contact`, `/blog/deploying-php-on-litespeed-shared-hosting`, `/projects/food-delivery-system`, `/tech-stack/php`, `/robots.txt`, `/sitemap.xml`.
- HTTP 404 (genuine, with the 404 page): `/nonexistent-page`, `/blog/no-such-post`.

Not yet measured, and not claimed: Lighthouse or PageSpeed scores, and real-user Core Web Vitals. Those need the deployed production URL and real traffic.

## Troubleshooting

- Blank page or PHP shown as text: PHP is not enabled for that directory. Check the hosting PHP version and handler.
- Clean URLs return 404 on Apache: the host rewrite rules are missing or ignored. Check that `.htaccess` is honoured (`AllowOverride All`) for the document root, or ask the host.
- CSS or JS not updating: bump `ASSET_VERSION` in `includes/config.php`, or hard-refresh.
- Old site still showing after upload: confirm files went to `public_html/` itself, and that no older `index.html` takes precedence over `index.php`.
- Contact form shows an error after submit: the host could not deliver mail. Email directly using the mailto link on the contact page.
- Blog post 500s or a blank blog page: check `data/blog.php` syntax first (`php -l`), then restore it from the pre-edit backup if a publish step corrupted it, then re-verify every blog URL.

## Roadmap

- Add a root `.htaccess` to the repo so the live Apache rewrite rules are versioned instead of host-only (currently the repo has none; the host holds the live copy).
- Automate sitemap generation from `data/blog.php` and the page list instead of editing `sitemap.xml` by hand.
- Add a CI check that runs `php -l` on every PHP file (prepared in `.github/workflows/ci.yml`, needs upload through the GitHub web UI).
- Verify the contact form end to end on the live host, or replace `mail()` with a transactional mail provider if the host cannot deliver reliably.
- Lighthouse run against the deployed site, mobile and desktop, before claiming any performance score.

## Contributing

This is a personal portfolio site. Contributions are welcome for bug fixes, typo corrections, broken links, and accessibility improvements. See [CONTRIBUTING.md](CONTRIBUTING.md).

## Support

See [SUPPORT.md](SUPPORT.md) for how to get help or report a problem.

## License

MIT. See [LICENSE](LICENSE).
