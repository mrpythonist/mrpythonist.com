<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [
    ['Home', '/'],
    ['Engineering Principles', null]
];

$page = [
    'title' => 'Engineering Principles | Muhammad Aqib',
    'description' => 'How Muhammad Aqib approaches software engineering: testing, honest communication, boring technology used well, and AI as a tool — not a replacement for understanding.',
    'path' => '/engineering-principles',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Engineering Principles',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];

$active = '';

$principles = [
    [
        'number' => '01',
        'category' => 'AI & FUNDAMENTALS',
        'title' => 'AI-enabled, not AI-dependent.',
        'description' => "I use AI tooling heavily, but I read, test and understand everything that ships under my name. If I can't explain code, I don't merge it. Fundamentals first: debugging, testing and system design are skills, not prompts.",
        'tags' => ['Critical thinking', 'Code ownership', 'Fundamentals'],
        'featured' => true,
    ],
    [
        'number' => '02',
        'category' => 'CONTINUOUS LEARNING',
        'title' => 'Learn. Build. Break. Fix. Document.',
        'description' => "My cycle for every new technology. Tutorials alone don't count — something has to run, fail, get fixed and get written up before I claim understanding.",
        'tags' => ['Hands-on learning', 'Experimentation'],
    ],
    [
        'number' => '03',
        'category' => 'TECHNOLOGY CHOICES',
        'title' => 'Boring technology, used well.',
        'description' => "PostgreSQL over exotic stores, monoliths until the pain is real, framework defaults until there's a reason to diverge. Novelty is a cost; spend it where it buys something.",
        'tags' => ['Simplicity', 'Maintainability'],
    ],
    [
        'number' => '04',
        'category' => 'QUALITY & RELIABILITY',
        'title' => 'Test what matters.',
        'description' => "Automated tests for API contracts and critical paths; manual verification for everything else. A test suite that nobody runs is documentation with extra steps.",
        'tags' => ['Automated testing', 'API contracts'],
    ],
    [
        'number' => '05',
        'category' => 'INTEGRITY',
        'title' => 'Honest engineering.',
        'description' => "Experience stated as it is — production, professional, familiarity or learning. No invented metrics, no borrowed achievements, no certifications I don't hold. This site's certifications page says none where that's the truth.",
        'tags' => ['Transparency', 'Accountability'],
        'link' => [
            'url' => '/certifications',
            'label' => 'View certifications',
        ],
    ],
    [
        'number' => '06',
        'category' => 'OPERATIONS',
        'title' => 'Operate what you build.',
        'description' => "Logs, monitoring and alerts are part of the feature. If it breaks at 2 AM, the person on call should be able to find the cause — that person has been me.",
        'tags' => ['Observability', 'Monitoring', 'Ownership'],
    ],
    [
        'number' => '07',
        'category' => 'COLLABORATION',
        'title' => 'Small, reviewable changes.',
        'description' => "Small pull requests, clear commit messages, code review as a conversation. The next person reading the code matters as much as the compiler.",
        'tags' => ['Code reviews', 'Readable code'],
    ],
];

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>

<main class="engineering-page">

    <!-- HERO -->
    <section class="engineering-hero">
        <div class="container">
            <div class="engineering-hero-grid">

                <div class="engineering-hero-content">
                    <span class="engineering-eyebrow">
                        <span class="engineering-status-dot"></span>
                        HOW I APPROACH SOFTWARE
                    </span>

                    <h1 id="page-title">
                        Good engineering<br>
                        starts with <span>good principles.</span>
                    </h1>

                    <p class="engineering-hero-description">
                        The decisions behind the code matter just as much
                        as the code itself. These are the principles that
                        guide how I learn, build, test and ship software.
                    </p>

                    <div class="engineering-hero-actions">
                        <a href="#principles" class="engineering-primary-btn">
                            Explore my principles
                            <i data-lucide="arrow-down-right"></i>
                        </a>

                        <span class="engineering-reading-time">
                            <i data-lucide="clock-3"></i>
                            4 min read
                        </span>
                    </div>
                </div>

                <div class="engineering-visual">
                    <div class="engineering-visual-top">
                        <span>ENGINEERING.MANIFESTO</span>
                        <span class="engineering-live-indicator">● ACTIVE</span>
                    </div>

                    <div class="engineering-code-window">
                        <div class="engineering-code-heading">
                            <span class="engineering-terminal-dots">
                                <i></i><i></i><i></i>
                            </span>
                            <span>principles.md</span>
                        </div>

                        <div class="engineering-code-content">
                            <div class="engineering-code-line">
                                <span class="code-muted">01</span>
                                <span class="code-keyword">const</span>
                                <span class="code-variable">engineering</span>
                                <span class="code-symbol">= {</span>
                            </div>

                            <div class="engineering-code-line indent">
                                <span class="code-muted">02</span>
                                <span class="code-property">clarity</span>
                                <span class="code-symbol">:</span>
                                <span class="code-string">"always"</span><span>,</span>
                            </div>

                            <div class="engineering-code-line indent">
                                <span class="code-muted">03</span>
                                <span class="code-property">quality</span>
                                <span class="code-symbol">:</span>
                                <span class="code-string">"non-negotiable"</span><span>,</span>
                            </div>

                            <div class="engineering-code-line indent">
                                <span class="code-muted">04</span>
                                <span class="code-property">simplicity</span>
                                <span class="code-symbol">:</span>
                                <span class="code-string">"intentional"</span><span>,</span>
                            </div>

                            <div class="engineering-code-line indent">
                                <span class="code-muted">05</span>
                                <span class="code-property">ownership</span>
                                <span class="code-symbol">:</span>
                                <span class="code-string">"end-to-end"</span><span>,</span>
                            </div>

                            <div class="engineering-code-line indent">
                                <span class="code-muted">06</span>
                                <span class="code-property">ai</span>
                                <span class="code-symbol">:</span>
                                <span class="code-string">"a tool, not a crutch"</span>
                            </div>

                            <div class="engineering-code-line">
                                <span class="code-muted">07</span>
                                <span class="code-symbol">};</span>
                            </div>
                        </div>

                        <div class="engineering-code-footer">
                            <span>
                                <i data-lucide="shield-check"></i>
                                BUILT ON PRINCIPLES
                            </span>
                            <span>v1.0.0</span>
                        </div>
                    </div>

                    <div class="engineering-visual-note">
                        <div class="engineering-note-icon">
                            <i data-lucide="lightbulb"></i>
                        </div>
                        <div>
                            <strong>Think beyond the code.</strong>
                            <span>Build with intention.</span>
                        </div>
                    </div>

                    <span class="engineering-visual-decoration"></span>
                </div>

            </div>

            <div class="engineering-hero-bottom">
                <span>MY ENGINEERING PHILOSOPHY</span>
                <span>01 — 07</span>
            </div>
        </div>
    </section>

    <!-- INTRO STRIP -->
    <section class="engineering-intro">
        <div class="container">
            <div class="engineering-intro-grid">
                <span class="engineering-section-label">THE FOUNDATION</span>

                <p>
                    Tools change. Frameworks evolve. Technologies come and go.
                    <strong>Sound engineering judgment is what stays.</strong>
                </p>

                <span class="engineering-intro-mark">"</span>
            </div>
        </div>
    </section>

    <!-- PRINCIPLES -->
    <section class="engineering-principles-section" id="principles">
        <div class="container">

            <div class="engineering-section-heading">
                <div>
                    <span class="engineering-section-label">
                        07 PRINCIPLES · ONE MINDSET
                    </span>
                    <h2>How I think.<br><span>How I build.</span></h2>
                </div>

                <p>
                    Not just statements on a page. Practical habits that
                    influence everyday engineering decisions.
                </p>
            </div>

            <div class="engineering-principles-grid">

                <?php foreach ($principles as $principle): ?>
                    <article class="engineering-card <?= !empty($principle['featured']) ? 'engineering-card-featured' : '' ?>">

                        <div class="engineering-card-top">
                            <span class="engineering-card-number">
                                <?= htmlspecialchars($principle['number'], ENT_QUOTES, 'UTF-8') ?>
                            </span>

                            <span class="engineering-card-category">
                                <?= htmlspecialchars($principle['category'], ENT_QUOTES, 'UTF-8') ?>
                            </span>

                            <i data-lucide="arrow-up-right" class="engineering-card-arrow"></i>
                        </div>

                        <h3>
                            <?= htmlspecialchars($principle['title'], ENT_QUOTES, 'UTF-8') ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($principle['description'], ENT_QUOTES, 'UTF-8') ?>
                        </p>

                        <?php if (!empty($principle['link'])): ?>
                            <a class="engineering-card-link"
                               href="<?= htmlspecialchars($principle['link']['url'], ENT_QUOTES, 'UTF-8') ?>">
                                <?= htmlspecialchars($principle['link']['label'], ENT_QUOTES, 'UTF-8') ?>
                                <i data-lucide="arrow-up-right"></i>
                            </a>
                        <?php endif; ?>

                        <div class="engineering-card-tags">
                            <?php foreach ($principle['tags'] as $tag): ?>
                                <span><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8') ?></span>
                            <?php endforeach; ?>
                        </div>

                    </article>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- WORKFLOW -->
    <section class="engineering-workflow">
        <div class="container">

            <div class="engineering-workflow-heading">
                <span class="engineering-section-label">MY LEARNING LOOP</span>
                <h2>Understanding comes<br>from <span>doing the work.</span></h2>
                <p>
                    I don't consider a technology learned just because
                    I've watched someone use it.
                </p>
            </div>

            <div class="engineering-workflow-steps">

                <?php
                $steps = [
                    ['01', 'Learn', 'Understand the concepts and fundamentals.', 'book-open'],
                    ['02', 'Build', 'Turn knowledge into something that works.', 'code-2'],
                    ['03', 'Break', 'Explore edge cases and discover limitations.', 'bug'],
                    ['04', 'Fix', 'Debug, improve and make it reliable.', 'wrench'],
                    ['05', 'Document', 'Write down what worked and what did not.', 'file-text'],
                ];
                ?>

                <?php foreach ($steps as $index => $step): ?>
                    <div class="engineering-workflow-step">
                        <div class="engineering-step-top">
                            <span><?= $step[0] ?></span>
                            <i data-lucide="<?= $step[3] ?>"></i>
                        </div>

                        <h3><?= $step[1] ?></h3>
                        <p><?= $step[2] ?></p>

                        <?php if ($index !== 4): ?>
                            <i data-lucide="arrow-right" class="engineering-step-connector"></i>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section>

    <!-- CLOSING -->
    <section class="engineering-closing">
        <div class="container">
            <div class="engineering-closing-inner">

                <div class="engineering-closing-icon">
                    <i data-lucide="terminal"></i>
                </div>

                <span class="engineering-section-label">THE BOTTOM LINE</span>

                <h2>
                    Write code that works.<br>
                    Build systems that last.<br>
                    <span>Understand what you ship.</span>
                </h2>

                <p>
                    That's the standard I aim to bring to every project,
                    every pull request and every engineering decision.
                </p>

                <a href="/contact" class="engineering-primary-btn">
                    Let's build something meaningful
                    <i data-lucide="arrow-up-right"></i>
                </a>

            </div>
        </div>
    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
