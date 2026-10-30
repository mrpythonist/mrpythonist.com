<?php
declare(strict_types=1);
// Body for the blog post 'cpanel-file-manager-http-406-modsecurity'.
// Included by blog-post.php only; defines $post_body.
if (($_SERVER['SCRIPT_FILENAME'] ?? '') !== '' && realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) {
    http_response_code(404);
    exit;
}
$post_body = <<<'HTML'
<p>While adding analytics to this site, cPanel File Manager rejected the file upload twice with <code>HTTP 406 Not Acceptable</code>. The file was fine. The upload was fine. The host's Web Application Firewall was not.</p>

<h2>What triggers it</h2>
<p>The rejected file contained <code>&lt;script&gt;</code> tags — the analytics snippet. ModSecurity, the WAF running on the host, inspected the upload payload, decided it looked like script injection, and refused it with a 406. This is a server-side security rule, not a bug in File Manager and not a problem with the file itself.</p>

<h2>What worked instead</h2>
<p>The reliable workaround was cPanel's built-in code editor: create or open the file in File Manager and paste the content there. The editor saves through a different request path that the WAF rule does not block. Uploading a ZIP archive and extracting it server-side also avoids the issue, since the WAF inspects the upload payload rather than the archive contents.</p>

<h2>The takeaway</h2>
<ul>
  <li>A 406 on upload usually means the WAF rejected the payload — check whether the file contains script-like content.</li>
  <li>Prefer the built-in editor or ZIP-and-extract for files containing <code>&lt;script&gt;</code> tags.</li>
  <li>Do not "fix" it by weakening the snippet or disabling security rules you do not own.</li>
</ul>
<p>Shared hosting means sharing the security policy. Knowing which door the WAF watches saves an afternoon. For the permission issues from the same deployment, see <a href="/blog/deploying-php-on-litespeed-shared-hosting">deploying a no-framework PHP site on LiteSpeed shared hosting</a>.</p>
HTML;
