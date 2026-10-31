<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [['Home', '/'], ['Uses', null]];

$page = [
    'title' => 'Uses | Tools & Workflow of Muhammad Aqib',
    'description' => 'The development tools and workflow Muhammad Aqib uses daily: Docker, Git, Linux, Postman and a no-framework PHP stack.',
    'path' => '/uses',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Uses',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];

$active = '';
require __DIR__ . '/includes/header.php';

render_breadcrumbs($trail);
?>

<main class="uses-page">

    <!-- HERO -->
    <section class="uses-hero" aria-labelledby="page-title">
        <div class="container">
            <div class="uses-hero-grid">

                <div class="uses-hero-content">
                    <span class="uses-eyebrow">
                        <span class="uses-status-dot"></span>
                        MY DEVELOPMENT TOOLKIT
                    </span>

                    <h1 id="page-title">
                        Tools of the
                        <span>trade.</span>
                    </h1>

                    <p class="uses-hero-description">
                        A closer look at the software, utilities and
                        working habits behind the things I build.
                        Nothing fancy. Just tools that get the job done.
                    </p>

                    <div class="uses-hero-meta">
                        <span><i data-lucide="terminal"></i> Developer setup</span>
                        <span><i data-lucide="refresh-cw"></i> Always evolving</span>
                    </div>
                </div>

                <div class="uses-visual" aria-label="Development environment illustration">
                    <div class="uses-visual-glow"></div>

                    <div class="uses-code-window">
                        <div class="uses-window-header">
                            <div class="uses-window-dots">
                                <span></span><span></span><span></span>
                            </div>
                            <span>~/development/workflow</span>
                            <i data-lucide="terminal-square"></i>
                        </div>

                        <div class="uses-terminal">
                            <div><span class="uses-terminal-muted">01</span> <span class="uses-terminal-green">$</span> docker compose up</div>
                            <div class="uses-terminal-output">Starting application services...</div>
                            <div><span class="uses-terminal-muted">02</span> <span class="uses-terminal-green">$</span> git status</div>
                            <div class="uses-terminal-output">Working tree clean.</div>
                            <div><span class="uses-terminal-muted">03</span> <span class="uses-terminal-green">$</span> ./ship.sh</div>
                            <div class="uses-terminal-success">
                                <i data-lucide="check-circle-2"></i>
                                Ready to ship.
                            </div>
                            <div class="uses-terminal-cursor"></div>
                        </div>
                    </div>

                    <div class="uses-floating-card uses-floating-top">
                        <i data-lucide="code-2"></i>
                        <div>
                            <strong>Build</strong>
                            <span>With purpose</span>
                        </div>
                    </div>

                    <div class="uses-floating-card uses-floating-bottom">
                        <i data-lucide="shield-check"></i>
                        <div>
                            <strong>Ship reliably</strong>
                            <span>Quality over shortcuts</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="uses-hero-bottom">
                <span>THE TOOLKIT</span>
                <span>01 — 03</span>
                <div></div>
                <span>SCROLL TO EXPLORE <i data-lucide="arrow-down"></i></span>
            </div>
        </div>
    </section>


    <!-- INTRO STRIP -->
    <section class="uses-intro">
        <div class="container">
            <div class="uses-intro-inner">
                <span class="uses-intro-mark">“</span>
                <p>
                    I prefer tools that stay out of the way,
                    solve real problems and make software
                    <strong>easier to build, maintain and ship.</strong>
                </p>
                <span class="uses-intro-caption">MY APPROACH TO TOOLING</span>
            </div>
        </div>
    </section>


    <!-- DEVELOPMENT TOOLS -->
    <section class="section uses-section" aria-labelledby="uses-development">
        <div class="container">

            <div class="uses-section-heading">
                <div>
                    <span class="uses-section-kicker">01 / THE TOOLBOX</span>
                    <h2 id="uses-development">Development<span>.</span></h2>
                    <p>The everyday essentials behind my development workflow.</p>
                </div>

                <span class="uses-section-count">04 TOOLS</span>
            </div>

            <div class="uses-tools-grid">

                <article class="uses-tool-card uses-tool-featured">
                    <div class="uses-tool-top">
                        <span class="uses-tool-number">01</span>
                        <span class="uses-tool-category">CONTAINERS</span>
                    </div>
                    <div class="uses-tool-icon uses-icon-docker">
                        <i data-lucide="container"></i>
                    </div>
                    <h3>Docker</h3>
                    <p>
                        Multi-service Compose environments for PHP,
                        PostgreSQL and Redis. Consistent environments
                        that make projects easier to run and maintain.
                    </p>
                    <div class="uses-tool-tags">
                        <span>Compose</span><span>Containers</span><span>Redis</span>
                    </div>
                    <div class="uses-tool-watermark">D</div>
                </article>

                <article class="uses-tool-card">
                    <div class="uses-tool-top">
                        <span class="uses-tool-number">02</span>
                        <span class="uses-tool-category">VERSION CONTROL</span>
                    </div>
                    <div class="uses-tool-icon uses-icon-git">
                        <i data-lucide="git-branch"></i>
                    </div>
                    <h3>Git &amp; GitHub</h3>
                    <p>
                        Version control, feature branches, pull requests
                        and GitHub Actions for continuous integration.
                    </p>
                    <div class="uses-tool-tags">
                        <span>Git</span><span>GitHub</span><span>CI</span>
                    </div>
                </article>

                <article class="uses-tool-card">
                    <div class="uses-tool-top">
                        <span class="uses-tool-number">03</span>
                        <span class="uses-tool-category">ENVIRONMENT</span>
                    </div>
                    <div class="uses-tool-icon uses-icon-linux">
                        <i data-lucide="terminal"></i>
                    </div>
                    <h3>Linux &amp; Bash</h3>
                    <p>
                        My go-to environment for server administration,
                        troubleshooting, reading logs and automating tasks.
                    </p>
                    <div class="uses-tool-tags">
                        <span>Linux</span><span>Shell</span><span>SSH</span>
                    </div>
                </article>

                <article class="uses-tool-card">
                    <div class="uses-tool-top">
                        <span class="uses-tool-number">04</span>
                        <span class="uses-tool-category">API DEVELOPMENT</span>
                    </div>
                    <div class="uses-tool-icon uses-icon-postman">
                        <i data-lucide="network"></i>
                    </div>
                    <h3>Postman</h3>
                    <p>
                        Designing, testing and debugging APIs.
                        A practical part of building and integrating
                        backend services.
                    </p>
                    <div class="uses-tool-tags">
                        <span>REST APIs</span><span>Testing</span><span>Debugging</span>
                    </div>
                </article>

            </div>
        </div>
    </section>


    <!-- SHIPPING -->
    <section class="uses-shipping-section" aria-labelledby="uses-shipping">
        <div class="container">

            <div class="uses-section-heading">
                <div>
                    <span class="uses-section-kicker">02 / FROM CODE TO PRODUCTION</span>
                    <h2 id="uses-shipping">Shipping<span>.</span></h2>
                    <p>Keeping deployments simple, maintainable and measurable.</p>
                </div>
                <span class="uses-section-count">03 TOOLS</span>
            </div>

            <div class="uses-shipping-grid">

                <article class="uses-shipping-card">
                    <div class="uses-shipping-icon">
                        <i data-lucide="server"></i>
                    </div>
                    <span class="uses-shipping-index">01</span>
                    <h3>cPanel &amp; Hosting</h3>
                    <p>
                        This website runs on LiteSpeed shared hosting.
                        I handle deployment and server administration
                        directly through cPanel.
                    </p>
                    <span class="uses-shipping-label">DEPLOYMENT</span>
                </article>

                <article class="uses-shipping-card">
                    <div class="uses-shipping-icon">
                        <i data-lucide="code-xml"></i>
                    </div>
                    <span class="uses-shipping-index">02</span>
                    <h3>Plain PHP</h3>
                    <p>
                        This site uses PHP without a framework,
                        one stylesheet and a small JavaScript file.
                        Simple architecture with minimal dependencies.
                    </p>
                    <span class="uses-shipping-label">THIS WEBSITE</span>
                </article>

                <article class="uses-shipping-card">
                    <div class="uses-shipping-icon">
                        <i data-lucide="chart-no-axes-combined"></i>
                    </div>
                    <span class="uses-shipping-index">03</span>
                    <h3>Google Search Console</h3>
                    <p>
                        Monitoring search visibility, indexing,
                        sitemap health and website analytics
                        for my own projects.
                    </p>
                    <span class="uses-shipping-label">SEO &amp; ANALYTICS</span>
                </article>

            </div>
        </div>
    </section>


    <!-- WORKFLOW -->
    <section class="section uses-workflow-section" aria-labelledby="uses-workflow">
        <div class="container">

            <div class="uses-section-heading">
                <div>
                    <span class="uses-section-kicker">03 / HOW I WORK</span>
                    <h2 id="uses-workflow">The workflow<span>.</span></h2>
                    <p>A repeatable process for building better software.</p>
                </div>
                <span class="uses-section-count">MY PROCESS</span>
            </div>

            <div class="uses-process">

                <article class="uses-process-step">
                    <span class="uses-process-number">01</span>
                    <div class="uses-process-icon">
                        <i data-lucide="git-branch"></i>
                    </div>
                    <h3>Plan &amp; Build</h3>
                    <p>Break problems into manageable tasks and build incrementally.</p>
                </article>

                <div class="uses-process-connector">
                    <i data-lucide="arrow-right"></i>
                </div>

                <article class="uses-process-step">
                    <span class="uses-process-number">02</span>
                    <div class="uses-process-icon">
                        <i data-lucide="bug"></i>
                    </div>
                    <h3>Break &amp; Fix</h3>
                    <p>Test assumptions, investigate failures and fix root causes.</p>
                </article>

                <div class="uses-process-connector">
                    <i data-lucide="arrow-right"></i>
                </div>

                <article class="uses-process-step">
                    <span class="uses-process-number">03</span>
                    <div class="uses-process-icon">
                        <i data-lucide="book-open"></i>
                    </div>
                    <h3>Document</h3>
                    <p>Capture important decisions and make the work understandable.</p>
                </article>

                <div class="uses-process-connector">
                    <i data-lucide="arrow-right"></i>
                </div>

                <article class="uses-process-step">
                    <span class="uses-process-number">04</span>
                    <div class="uses-process-icon">
                        <i data-lucide="rocket"></i>
                    </div>
                    <h3>Ship</h3>
                    <p>Review the changes and deliver with confidence.</p>
                </article>

            </div>

            <div class="uses-ai-note">
                <div class="uses-ai-icon">
                    <i data-lucide="brain-circuit"></i>
                </div>
                <div>
                    <span>MY APPROACH TO AI</span>
                    <h3>AI enabled, not AI dependent.</h3>
                    <p>
                        I use AI assistance to improve speed and explore solutions,
                        but review the output, understand the implementation
                        and take responsibility for what ships.
                    </p>
                </div>
            </div>

        </div>
    </section>


    <!-- FOOTER CTA -->
    <section class="uses-cta-section">
        <div class="container">
            <div class="uses-cta">
                <div>
                    <span class="uses-section-kicker">ALWAYS LEARNING</span>
                    <h2>Tools evolve.<br><span>Good engineering stays.</span></h2>
                    <p>
                        My setup changes as I learn, build and discover
                        better ways to solve engineering problems.
                    </p>
                </div>
                <a href="/now" class="uses-cta-link">
                    What I'm focused on now
                    <i data-lucide="arrow-up-right"></i>
                </a>
            </div>
        </div>
    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
