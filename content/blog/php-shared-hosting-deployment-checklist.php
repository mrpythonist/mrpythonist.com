<?php
declare(strict_types=1);
// Body for the blog post 'php-shared-hosting-deployment-checklist'.
// Included by blog-post.php only; defines $post_body.
if (($_SERVER['SCRIPT_FILENAME'] ?? '') !== '' && realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) {
    http_response_code(404);
    exit;
}
$post_body = <<<'HTML'
<p>Deploying this portfolio to shared hosting gave me a repeatable checklist I now run for every PHP deploy. It is not exciting, but it is the difference between "uploaded" and "actually working". Each item below is something that broke or nearly broke during a real deploy.</p>

<h2>1. Back up before you touch anything</h2>
<p>Copy the live document root to a dated folder <em>outside</em> the web root, and keep a zip of it too. Verify the backup: compare file counts and spot-check that the zip extracts cleanly. A backup you have never tested is a rumor. If the deploy goes wrong, recovery is one copy command, not a support ticket.</p>

<h2>2. Confirm the real document root</h2>
<p>Do not assume it is <code>public_html</code>. Check the domain's actual document root in the hosting panel first — deploying to the wrong directory is an embarrassing way to spend an evening.</p>

<h2>3. Fix permissions after every upload</h2>
<p>Uploads and zip extractions reset file modes. On LiteSpeed shared hosting, the combination that works is: directories <code>0755</code>, <code>.htaccess</code> and static files <code>0644</code>, PHP files <code>0644</code>. Wrong modes show up as unstyled pages or <code>.htaccess</code> errors, which look like code bugs but are not.</p>

<h2>4. Sanity-check the server config</h2>
<p>If the site uses rewrite rules, confirm clean URLs, redirects and the 404 page behave after the change — a single bad character in <code>.htaccess</code> can take down every page. Test a missing URL on purpose: you want your styled 404, not the server's default.</p>

<h2>5. Bust the cache deliberately</h2>
<p>Bump an asset version string when CSS or JS changes, so returning visitors get the new files instead of a stale cached copy. Then hard-refresh and check the site in a private window.</p>

<h2>6. Verify what the visitor sees</h2>
<p>Load the homepage, one nested page and one missing URL. Check HTTPS and the canonical host (www vs non-www). Confirm the contact form renders and any analytics snippet is present exactly once.</p>

<h2>7. Tell search engines</h2>
<p>If URLs changed, update <code>sitemap.xml</code> and re-submit it in Search Console, then request indexing for the important pages. A deploy that nobody can find is only half a deploy.</p>

<h2>8. Keep a rollback path</h2>
<p>Do not delete the backup until the new version has survived real traffic. "I can re-upload it" is not a rollback plan when you are tired at midnight.</p>

<p>Most deployment failures I have seen — including my own — were skipped checklist items, not hard problems. Related reading: <a href="/blog/deploying-php-on-litespeed-shared-hosting">deploying a no-framework PHP site on LiteSpeed shared hosting</a>.</p>
HTML;
