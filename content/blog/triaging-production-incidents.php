<?php
declare(strict_types=1);
// Body for the blog post 'triaging-production-incidents'.
// Included by blog-post.php only; defines $post_body.
if (($_SERVER['SCRIPT_FILENAME'] ?? '') !== '' && realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) {
    http_response_code(404);
    exit;
}
$post_body = <<<'HTML'
<p>Working on production backend systems taught me that incident response is mostly a discipline problem, not a knowledge problem. The engineers who resolve outages fastest are not the ones who know the most — they are the ones with a repeatable method. This is mine.</p>

<h2>1. Define the blast radius first</h2>
<p>Before touching anything: what is broken, for whom, and since when? "The API is down" and "one endpoint returns 500 for a subset of users" are different incidents with different urgency. Check your monitoring (error tracking, uptime checks, queue dashboards) before forming theories.</p>

<h2>2. Look at what changed recently</h2>
<p>Most production incidents correlate with a recent deploy, config change or dependency update. Check the deploy log and recent commits before diving into code. If a deploy went out minutes before the errors started, you already have your prime suspect.</p>

<h2>3. Read the logs, not your assumptions</h2>
<p>Start with the error tracker and application logs around the time the problem began. Look for the <em>first</em> error, not the loudest one — cascading failures bury the root cause under secondary noise. A single failed third-party call at 14:02 explains fifty timeout errors at 14:03.</p>

<h2>4. Suspect the dependencies</h2>
<p>Queues, caches, databases, payment providers, email services: check their status before assuming your code is at fault. I have seen "our system is down" turn out to be an expired API token or a third-party outage more than once. Verify DNS, certificates and credentials — the boring infrastructure — early.</p>

<h2>5. Decide: fix forward or roll back</h2>
<p>If the cause is a bad deploy and the fix is not obvious within minutes, roll back first and investigate calmly afterward. Rollback is a decision, not a defeat. Fixing forward under pressure is how a ten-minute outage becomes a two-hour one.</p>

<h2>6. Communicate while you work</h2>
<p>A short status note to the team ("investigating elevated 500s on /api/leads since 14:02, suspecting the deploy") prevents five people from investigating the same thing and keeps stakeholders calm. Silence during an incident is its own problem.</p>

<h2>7. Write it down afterward</h2>
<p>Once service is restored: what happened, why, what fixed it, and what would have caught it earlier. The note does not need to be long. The teams that improve are the ones that keep these notes and actually read them before the next deploy.</p>

<p>None of this requires seniority — it requires habit. The checklist is deliberately boring, because production incidents are exactly when boring wins. Related reading: <a href="/blog/php-shared-hosting-deployment-checklist">a deployment checklist for PHP sites on shared hosting</a>.</p>
HTML;
