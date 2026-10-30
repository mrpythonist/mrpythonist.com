<?php
declare(strict_types=1);
// Body for the blog post 'deploying-php-on-litespeed-shared-hosting'.
// Included by blog-post.php only; defines $post_body.
if (($_SERVER['SCRIPT_FILENAME'] ?? '') !== '' && realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) {
    http_response_code(404);
    exit;
}
$post_body = <<<'HTML'
<p>This portfolio runs on HosterPK shared hosting — LiteSpeed, cPanel, no framework, plain PHP. Deploying it taught me more about how shared hosting actually works than any tutorial, mostly because the first deploy broke in instructive ways.</p>

<h2>The permission problem</h2>
<p>After the first upload the site loaded, but pages were unstyled and an <code>.htaccess</code> permission error appeared. The cause was file modes: the upload had set <code>public_html</code> to <code>0644</code>, directories to <code>0770</code> and PHP files to <code>0660</code>/<code>0664</code>. LiteSpeed would not serve the site correctly with those modes.</p>
<p>The fix, verified on the live server:</p>
<ul>
  <li><code>public_html</code> and all directories: <code>0755</code></li>
  <li><code>.htaccess</code> and static files: <code>0644</code></li>
  <li>PHP files: <code>0644</code></li>
</ul>
<p>Once the modes were corrected in cPanel File Manager, the <code>.htaccess</code> error disappeared and the CSS loaded. The lesson generalizes: on shared hosting, a broken-looking site is a permissions problem more often than a code problem.</p>

<h2>What I check on every deploy now</h2>
<ol>
  <li>Confirm the actual document root for the domain in cPanel (do not assume <code>public_html</code>).</li>
  <li>Verify directory and file permissions after upload — extraction can reset them.</li>
  <li>Load the homepage, a nested page and a missing URL, checking for the styled 404 page.</li>
  <li>Confirm HTTPS and the canonical host redirect behave.</li>
</ol>
<p>None of this is glamorous. All of it is the difference between "deployed" and "actually working". Related reading: <a href="/blog/clean-urls-mod-rewrite-shared-hosting">clean URLs with mod_rewrite on shared hosting</a>.</p>
HTML;
