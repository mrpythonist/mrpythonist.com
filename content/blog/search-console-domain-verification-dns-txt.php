<?php
declare(strict_types=1);
// Body for the blog post 'search-console-domain-verification-dns-txt'.
// Included by blog-post.php only; defines $post_body.
if (($_SERVER['SCRIPT_FILENAME'] ?? '') !== '' && realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) {
    http_response_code(404);
    exit;
}
$post_body = <<<'HTML'
<p>Getting a new site into Google Search Console took three small steps, each with one non-obvious detail. This is the exact sequence that worked for this domain.</p>

<h2>1. Domain verification via DNS TXT</h2>
<p>Search Console offers several verification methods; the domain property uses a DNS TXT record. I added the TXT record Google provided at the domain's DNS host and waited for propagation, then completed verification. Domain-level verification covers all subdomains and protocols, which is why I chose it over the URL-prefix methods.</p>

<h2>2. Submitting the sitemap — with a bare path</h2>
<p>This one cost me an attempt: pasting the full sitemap URL (<code>https://mrpythonist.com/sitemap.xml</code>) was rejected as an invalid sitemap address. Submitting just the bare path — <code>sitemap.xml</code> — was accepted. If the full URL fails validation in the Sitemaps report, try the relative path before assuming the sitemap itself is broken.</p>

<h2>3. Requesting indexing</h2>
<p>After the sitemap was accepted, I used URL Inspection to request indexing for the homepage, <code>/projects</code> and <code>/contact</code>. Indexing takes days; requesting it only puts the URLs in the queue. There is no shortcut and no need to resubmit repeatedly.</p>

<h2>What I would do differently</h2>
<p>Nothing structural — but I would submit the sitemap with the bare path on the first try. The sitemap itself is generated from the same canonical URLs the site serves, with accurate <code>lastmod</code> values, so there is exactly one source of truth for what should be indexed.</p>
HTML;
