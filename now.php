<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [['Home', '/'], ['Now', null]];

$page = [
    'title' => 'Now | What Muhammad Aqib Is Focused On',
    'description' => 'What Muhammad Aqib is working on now: remote software engineering opportunities, cloud and DevOps learning, open-source contributions and personal projects.',
    'path' => '/now',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Now',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];

$active = '';

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>

<main class="now-page">

    <!-- HERO -->
    <section class="now-hero" aria-labelledby="page-title">
        <div class="container">

            <div class="now-hero-inner">

                <div class="now-eyebrow">
                    <span class="now-live-dot"></span>
                    CURRENTLY IN PROGRESS
                    <span class="now-eyebrow-line"></span>
                    OCTOBER 2026
                </div>

                <h1 id="page-title">
                    What I'm<br>
                    <span>focused on now.</span>
                </h1>

                <p class="now-hero-description">
                    A snapshot of what I'm building, learning, and working
                    towards at this stage of my journey.
                </p>

                <div class="now-updated">
                    <span class="now-updated-icon">
                        <i data-lucide="calendar-days"></i>
                    </span>
                    Last updated October 29, 2026
                </div>

            </div>

            <div class="now-hero-decoration" aria-hidden="true">
                <div class="now-decoration-circle circle-one"></div>
                <div class="now-decoration-circle circle-two"></div>
                <span class="now-decoration-code">&lt;/&gt;</span>
                <span class="now-decoration-caption">BUILDING · LEARNING · GROWING</span>
            </div>

        </div>
    </section>


    <!-- CURRENT STATUS -->
    <section class="now-status-section">
        <div class="container">

            <div class="now-status-card">

                <div class="now-status-left">
                    <span class="now-status-label">THE CURRENT CHAPTER</span>
                    <h2>Building what comes next.</h2>
                    <p>
                        Focused on finding my next engineering opportunity
                        while becoming stronger in backend engineering,
                        cloud infrastructure, and DevOps.
                    </p>
                </div>

                <div class="now-status-right">
                    <div class="now-status-indicator">
                        <span></span>
                        OPEN TO OPPORTUNITIES
                    </div>
                    <a href="/contact" class="now-status-link">
                        Let's connect
                        <i data-lucide="arrow-up-right"></i>
                    </a>
                </div>

            </div>

        </div>
    </section>


    <!-- FOCUS AREAS -->
    <section class="now-focus-section section">
        <div class="container">

            <div class="now-section-heading">
                <div>
                    <span class="now-section-kicker">WHERE MY ENERGY GOES</span>
                    <h2>Four things on my radar.</h2>
                </div>
                <span class="now-section-count">01 — 04</span>
            </div>


            <div class="now-focus-grid">

                <!-- JOB SEARCH -->
                <article class="now-focus-card now-featured">

                    <div class="now-card-top">
                        <span class="now-card-number">01 / PRIORITY</span>
                        <span class="now-card-icon">
                            <i data-lucide="briefcase-business"></i>
                        </span>
                    </div>

                    <div class="now-card-content">
                        <span class="now-card-category">CAREER</span>
                        <h3>Finding my next opportunity.</h3>
                        <p>
                            Exploring remote Full-Stack and Backend Software
                            Engineer opportunities where I can contribute to
                            production systems, solve meaningful problems,
                            and grow with a strong engineering team.
                        </p>
                    </div>

                    <div class="now-card-footer">
                        <span class="now-card-tag">Remote opportunities</span>
                        <span class="now-card-tag">Backend engineering</span>
                    </div>

                    <a href="/contact" class="now-card-arrow" aria-label="Contact me about opportunities">
                        <i data-lucide="arrow-up-right"></i>
                    </a>

                </article>


                <!-- CLOUD & DEVOPS -->
                <article class="now-focus-card">

                    <div class="now-card-top">
                        <span class="now-card-number">02 / LEARNING</span>
                        <span class="now-card-icon">
                            <i data-lucide="cloud"></i>
                        </span>
                    </div>

                    <div class="now-card-content">
                        <span class="now-card-category">TECHNICAL GROWTH</span>
                        <h3>Going deeper into Cloud & DevOps.</h3>
                        <p>
                            Building practical knowledge through hands-on
                            labs, working through Linux, networking, Docker,
                            CI/CD, AWS, and Terraform.
                        </p>
                    </div>

                    <div class="now-card-footer">
                        <span class="now-card-tag">AWS</span>
                        <span class="now-card-tag">Docker</span>
                        <span class="now-card-tag">Terraform</span>
                    </div>

                </article>


                <!-- OPEN SOURCE -->
                <article class="now-focus-card">

                    <div class="now-card-top">
                        <span class="now-card-number">03 / CONTRIBUTING</span>
                        <span class="now-card-icon">
                            <i data-lucide="git-branch"></i>
                        </span>
                    </div>

                    <div class="now-card-content">
                        <span class="now-card-category">OPEN SOURCE</span>
                        <h3>Learning in the open.</h3>
                        <p>
                            Exploring contributions across the Next.js and
                            Node.js ecosystem while maintaining my
                            Log Anomaly Watcher pilot project.
                        </p>
                    </div>

                    <div class="now-card-footer">
                        <span class="now-card-tag">Next.js</span>
                        <span class="now-card-tag">Node.js</span>
                    </div>

                    <a
                        href="https://github.com/mrpythonist/log-anomaly-watcher"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="now-card-arrow"
                        aria-label="View Log Anomaly Watcher on GitHub"
                    >
                        <i data-lucide="arrow-up-right"></i>
                    </a>

                </article>


                <!-- PERSONAL WEBSITE -->
                <article class="now-focus-card">

                    <div class="now-card-top">
                        <span class="now-card-number">04 / BUILDING</span>
                        <span class="now-card-icon">
                            <i data-lucide="code-2"></i>
                        </span>
                    </div>

                    <div class="now-card-content">
                        <span class="now-card-category">PERSONAL PROJECT</span>
                        <h3>Making this website better.</h3>
                        <p>
                            Continuously improving my portfolio with
                            dedicated landing pages, technical articles,
                            structured data, clean URLs, and performance
                            improvements.
                        </p>
                    </div>

                    <div class="now-card-footer">
                        <span class="now-card-tag">SEO</span>
                        <span class="now-card-tag">Performance</span>
                        <span class="now-card-tag">PHP</span>
                    </div>

                </article>

            </div>

        </div>
    </section>


    <!-- LEARNING ROADMAP -->
    <section class="now-roadmap-section">
        <div class="container">

            <div class="now-roadmap-layout">

                <div class="now-roadmap-intro">
                    <span class="now-section-kicker">THE LEARNING PATH</span>
                    <h2>Learning by<br><span>building things.</span></h2>
                    <p>
                        Less passive consumption. More experimentation,
                        real environments, and understanding how things
                        work under the hood.
                    </p>
                </div>

                <div class="now-roadmap">

                    <div class="now-roadmap-item completed">
                        <span class="now-roadmap-marker"></span>
                        <div>
                            <span class="now-roadmap-step">01</span>
                            <h3>Linux & Networking</h3>
                            <p>Command line, system administration, and networking fundamentals.</p>
                        </div>
                        <span class="now-roadmap-status">FOUNDATIONS</span>
                    </div>

                    <div class="now-roadmap-item active">
                        <span class="now-roadmap-marker"></span>
                        <div>
                            <span class="now-roadmap-step">02</span>
                            <h3>Docker & CI/CD</h3>
                            <p>Containers, deployment workflows, and automation.</p>
                        </div>
                        <span class="now-roadmap-status">IN PROGRESS</span>
                    </div>

                    <div class="now-roadmap-item">
                        <span class="now-roadmap-marker"></span>
                        <div>
                            <span class="now-roadmap-step">03</span>
                            <h3>AWS Cloud</h3>
                            <p>Infrastructure, networking, compute, storage, and monitoring.</p>
                        </div>
                        <span class="now-roadmap-status">UP NEXT</span>
                    </div>

                    <div class="now-roadmap-item">
                        <span class="now-roadmap-marker"></span>
                        <div>
                            <span class="now-roadmap-step">04</span>
                            <h3>Terraform & Infrastructure as Code</h3>
                            <p>Provisioning and managing infrastructure through code.</p>
                        </div>
                        <span class="now-roadmap-status">UP NEXT</span>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- CLOSING -->
    <section class="now-closing-section">
        <div class="container">

            <div class="now-closing-card">
                <span class="now-closing-icon">
                    <i data-lucide="coffee"></i>
                </span>

                <span class="now-section-kicker">THAT'S THE CURRENT PICTURE</span>

                <h2>
                    Always building.<br>
                    <span>Always getting better.</span>
                </h2>

                <p>
                    If you're working on something interesting, building
                    a product, or looking for an engineer who cares about
                    the details, I'd be happy to connect.
                </p>

                <a href="/contact" class="now-cta-button">
                    Get in touch
                    <i data-lucide="arrow-up-right"></i>
                </a>
            </div>

        </div>
    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
