<?php
declare(strict_types=1);
// Body for the blog post 'clean-urls-mod-rewrite-shared-hosting'.
// Included by blog-post.php only; defines $post_body.
if (($_SERVER['SCRIPT_FILENAME'] ?? '') !== '' && realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) {
    http_response_code(404);
    exit;
}
$post_body = <<<'HTML'
<p>This site serves clean URLs — <code>/projects</code>, <code>/contact</code> — with plain Apache rewrite rules on LiteSpeed. No framework router, no front controller. Here is the pattern that works and the traps I avoided.</p>

<h2>The basic rewrite</h2>
<p>Each clean URL maps to a PHP file internally:</p>
<pre><code>RewriteRule ^projects$ projects.php [L]
RewriteRule ^contact$ contact.php [L]</code></pre>
<p>The visitor sees <code>/projects</code>; the server runs <code>projects.php</code>. One rule per page is explicit and easy to audit — on a small site I prefer that over a catch-all.</p>

<h2>Redirecting the .php variants</h2>
<p>Without a redirect, both <code>/projects</code> and <code>/projects.php</code> would serve the same content — duplicate URLs. The fix inspects the original request line so the internal rewrite does not trigger it:</p>
<pre><code>RewriteCond %{THE_REQUEST} \s/+(projects|contact)\.php[\s?] [NC]
RewriteRule ^(projects|contact)\.php$ /$1 [R=301,L]</code></pre>
<p><code>THE_REQUEST</code> is key: it holds what the browser actually asked for, so the internally rewritten request does not match and there is no redirect loop.</p>

<h2>Trailing slashes and 404s</h2>
<p>A trailing-slash variant (<code>/projects/</code>) is another duplicate. A single rule normalizes it, skipping real directories:</p>
<pre><code>RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.+)/$ /$1 [R=301,L]</code></pre>
<p>For missing pages, <code>ErrorDocument 404 /404.php</code> serves a styled 404 page with a genuine 404 status. Nested routes like <code>/tech-stack/laravel</code> go through a dispatcher PHP file that validates the slug against an allowlist and renders the same 404 page for unknown slugs — so there is no way to reach arbitrary files through route parameters.</p>

<h2>The checklist</h2>
<ul>
  <li>Valid pages return <code>200</code>; missing pages return a genuine <code>404</code>.</li>
  <li><code>.php</code> variants 301-redirect to the clean URL.</li>
  <li>Trailing slashes normalize to one canonical form.</li>
  <li>Direct navigation and refresh work on nested URLs.</li>
</ul>
<p>Simple, auditable, and it survives shared hosting. The deployment side of this story is in <a href="/blog/deploying-php-on-litespeed-shared-hosting">deploying a no-framework PHP site on LiteSpeed shared hosting</a>.</p>
HTML;
