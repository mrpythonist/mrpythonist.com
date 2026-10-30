<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';
$trail = [['Home', '/'], ['About', null]];
$page = [
    'title' => 'About Muhammad Aqib | Software Engineer',
    'description' => 'Muhammad Aqib is a software engineer in Multan, Pakistan, focused on full-stack applications, backend systems and cloud infrastructure.',
    'path' => '/about',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Software Engineer',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = 'about';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">About</h1>
    <p class="lede">Software engineer building reliable, maintainable systems — from APIs to infrastructure.</p>
  </div>
</section>
<section class="section" aria-label="Biography">
  <div class="container narrow prose">
    <p>I'm Muhammad Aqib, a software engineer based in Multan, Punjab, Pakistan. I work across the stack — React and Next.js on the frontend, Laravel and Node.js on the backend — with production experience in APIs, databases and infrastructure.</p>
    <p>From March 2023 to October 2026 I worked as a Software Engineer at TurboDebt, building and maintaining production systems: backend services, REST APIs, third-party integrations, queues and the infrastructure they ran on. That work shaped how I engineer: boring technology used well, tested code, and systems I can debug at 2 AM.</p>
    <p>My background is a BS in Computer Science from COMSATS University Islamabad (2019–2023). These days I'm deepening my cloud and DevOps practice — Linux, networking, Docker, CI/CD and AWS — through a structured hands-on roadmap, while staying active in open source.</p>
    <h2>How I work</h2>
    <ul>
      <li><strong>AI-enabled, not AI-dependent.</strong> I use AI tooling daily, but I read, test and understand everything that ships under my name.</li>
      <li><strong>Learn → Build → Break → Fix → Document.</strong> The cycle I use for every new technology.</li>
      <li><strong>Honest engineering.</strong> I describe experience as it is — production, professional, familiarity or learning — and never claim metrics or results I can't verify.</li>
    </ul>
    <h2>What I'm doing now</h2>
    <p>I'm looking for a remote full-stack/backend role, contributing to open source, and working through my <a href="/cloud">cloud &amp; DevOps lab</a>. See <a href="/now">what I'm focused on this week</a>.</p>
    <p>
      <a class="btn btn-primary" href="/resume">View resume</a>
      <a class="btn btn-secondary" href="/contact">Get in touch</a>
    </p>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
