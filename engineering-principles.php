<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';
$trail = [['Home', '/'], ['Engineering Principles', null]];
$page = [
    'title' => 'Engineering Principles | Muhammad Aqib',
    'description' => 'How Muhammad Aqib approaches software engineering: testing, honest communication, boring technology used well, and AI as a tool — not a replacement for understanding.',
    'path' => '/engineering-principles',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Engineering Principles',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = '';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Engineering Principles</h1>
    <p class="lede">The practices behind the code — what I believe and how I work.</p>
  </div>
</section>
<section class="section" aria-label="Engineering principles">
  <div class="container narrow prose">
    <h2>1. AI-enabled, not AI-dependent</h2>
    <p>I use AI tooling heavily, but I read, test and understand everything that ships under my name. If I can't explain code, I don't merge it. Fundamentals first: debugging, testing and system design are skills, not prompts.</p>
    <h2>2. Learn → Build → Break → Fix → Document</h2>
    <p>My cycle for every new technology. Tutorials alone don't count — something has to run, fail, get fixed and get written up before I claim understanding.</p>
    <h2>3. Boring technology, used well</h2>
    <p>PostgreSQL over exotic stores, monoliths until the pain is real, framework defaults until there's a reason to diverge. Novelty is a cost; spend it where it buys something.</p>
    <h2>4. Test what matters</h2>
    <p>Automated tests for API contracts and critical paths; manual verification for everything else. A test suite that nobody runs is documentation with extra steps.</p>
    <h2>5. Honest engineering</h2>
    <p>Experience stated as it is — production, professional, familiarity or learning. No invented metrics, no borrowed achievements, no certifications I don't hold. This site's <a href="/certifications">certifications page</a> says "none" where that's the truth.</p>
    <h2>6. Operate what you build</h2>
    <p>Logs, monitoring and alerts are part of the feature. If it breaks at 2 AM, the person on call should be able to find the cause — that person has been me.</p>
    <h2>7. Small, reviewable changes</h2>
    <p>Small pull requests, clear commit messages, code review as a conversation. The next person reading the code matters as much as the compiler.</p>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
