<?php declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/portfolio.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [['Home', '/'], ['Experience', null]];

$page = [
    'title' => 'Professional Experience | Muhammad Aqib',
    'description' => 'Explore Muhammad Aqib’s professional experience as a Software Engineer at TurboDebt, engineering production applications, backend systems, APIs, integrations and cloud infrastructure.',
    'path' => '/experience',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Software Engineer',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];

$active = 'experience';

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>

<main class="experience-page">

    <!-- HERO -->
    <section class="experience-hero section" aria-labelledby="page-title">
        <div class="container">

            <div class="experience-hero-inner">

                <div class="experience-eyebrow">
                    <span class="eyebrow-line"></span>
                    CAREER JOURNEY
                    <span class="eyebrow-dot"></span>
                </div>

                <h1 id="page-title">
                    Experience that<br>
                    <span>builds beyond code.</span>
                </h1>

                <p class="experience-intro">
                    My professional journey has been shaped by building
                    production software, engineering backend systems,
                    solving real-world technical challenges, and making
                    applications more reliable.
                </p>

                <div class="experience-hero-meta">
                    <span>
                        <span class="meta-icon">⌘</span>
                        Software Engineering
                    </span>
                    <span>
                        <span class="meta-icon">⌖</span>
                        Remote · International Teams
                    </span>
                </div>

                <a href="#career-timeline" class="experience-scroll">
                    <span class="scroll-indicator"></span>
                    EXPLORE MY JOURNEY
                </a>

                <div class="hero-decoration" aria-hidden="true">
                    <div class="decoration-circle circle-one"></div>
                    <div class="decoration-circle circle-two"></div>
                    <div class="decoration-cross">✳</div>
                    <div class="decoration-coordinate">30°09' N<br>71°31' E</div>
                </div>

            </div>

        </div>
    </section>


    <!-- CAREER OVERVIEW -->
    <section class="experience-overview">
        <div class="container">

            <div class="overview-grid">

                <div class="overview-item">
                    <span class="overview-number">03+</span>
                    <span class="overview-label">Years of professional<br>experience</span>
                </div>

                <div class="overview-item">
                    <span class="overview-number">01</span>
                    <span class="overview-label">Full-time engineering<br>role</span>
                </div>

                <div class="overview-item">
                    <span class="overview-number">∞</span>
                    <span class="overview-label">Problems solved through<br>engineering</span>
                </div>

                <div class="overview-item">
                    <span class="overview-number">01</span>
                    <span class="overview-label">Award of<br>Excellence</span>
                </div>

            </div>

        </div>
    </section>


    <!-- PROFESSIONAL JOURNEY -->
    <section class="section career-section" id="career-timeline">

        <div class="container">

            <div class="section-heading">
                <div>
                    <div class="experience-eyebrow">
                        <span class="eyebrow-line"></span>
                        WHERE I'VE WORKED
                    </div>

                    <h2>Professional <span>journey.</span></h2>
                </div>

                <p>
                    A closer look at the teams, systems, and responsibilities
                    that have shaped my engineering experience.
                </p>
            </div>


            <div class="career-timeline">

                <?php foreach ($experience as $index => $job): ?>

                    <article class="career-entry">

                        <div class="timeline-marker">
                            <span><?= str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                        </div>

                        <div class="career-card">

                            <div class="career-card-top">

                                <div class="career-company">
                                    <div class="company-logo">
                                        <img
                                            src="/assets/images/turbo.png"
                                            alt="TurboDebt logo"
                                            loading="lazy"
                                        >
                                    </div>

                                    <div>
                                        <span class="career-company-label">
                                            COMPANY
                                        </span>

                                        <h3><?= e($job['employer']) ?></h3>
                                    </div>
                                </div>

                                <span class="career-period">
                                    <?= e($job['period']) ?>
                                </span>

                            </div>


                            <div class="career-role">
                                <h4><?= e($job['role']) ?></h4>

                                <div class="career-employment">
                                    <span>Full-time</span>
                                    <span class="employment-separator"></span>
                                    <span>Remote</span>
                                </div>
                            </div>


                            <p class="career-description">
                                <?= e($job['description']) ?>
                            </p>


                            <div class="career-card-bottom">
                                <span>
                                    <span class="status-dot"></span>
                                    Professional Experience
                                </span>

                                <span>UNITED STATES · REMOTE</span>
                            </div>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- ENGINEERING CONTRIBUTIONS -->
    <section class="section engineering-section">

        <div class="container">

            <div class="engineering-header">
                <div>
                    <div class="experience-eyebrow">
                        <span class="eyebrow-line"></span>
                        BEHIND THE WORK
                    </div>

                    <h2>What I worked <span>on.</span></h2>
                </div>

                <p>
                    Beyond writing code, my work involved engineering
                    reliable systems, integrating services, and
                    supporting applications in production.
                </p>
            </div>


            <div class="engineering-grid">

                <article class="engineering-card engineering-featured">
                    <span class="engineering-index">01 / BACKEND</span>
                    <div class="engineering-icon">⌘</div>

                    <h3>Backend Engineering</h3>

                    <p>
                        Building and maintaining backend services,
                        business logic, REST APIs, authentication
                        and authorization systems.
                    </p>

                    <div class="engineering-tags">
                        <span>Laravel</span>
                        <span>Node.js</span>
                        <span>PHP</span>
                        <span>REST APIs</span>
                    </div>
                </article>


                <article class="engineering-card">
                    <span class="engineering-index">02 / DATA</span>
                    <div class="engineering-icon">◈</div>

                    <h3>Databases & Performance</h3>

                    <p>
                        Working with relational databases, query
                        optimization, data structures and
                        performance-aware application design.
                    </p>

                    <div class="engineering-tags">
                        <span>PostgreSQL</span>
                        <span>Redis</span>
                        <span>AWS RDS</span>
                    </div>
                </article>


                <article class="engineering-card">
                    <span class="engineering-index">03 / INTEGRATIONS</span>
                    <div class="engineering-icon">⌘</div>

                    <h3>System Integrations</h3>

                    <p>
                        Connecting external platforms, managing
                        authentication tokens, processing queues,
                        and building reliable data ingestion pipelines.
                    </p>

                    <div class="engineering-tags">
                        <span>Salesforce</span>
                        <span>Iterable</span>
                        <span>Ytel</span>
                        <span>APIs</span>
                    </div>
                </article>


                <article class="engineering-card">
                    <span class="engineering-index">04 / INFRASTRUCTURE</span>
                    <div class="engineering-icon">⌁</div>

                    <h3>Cloud & Infrastructure</h3>

                    <p>
                        Working with cloud-hosted applications,
                        Linux servers, containerized environments,
                        web servers and production troubleshooting.
                    </p>

                    <div class="engineering-tags">
                        <span>AWS EC2</span>
                        <span>Docker</span>
                        <span>Linux</span>
                        <span>nginx</span>
                    </div>
                </article>


                <article class="engineering-card">
                    <span class="engineering-index">05 / RELIABILITY</span>
                    <div class="engineering-icon">◎</div>

                    <h3>Production Reliability</h3>

                    <p>
                        Investigating production issues, monitoring
                        application behavior, troubleshooting failures
                        and reviewing potential single points of failure.
                    </p>

                    <div class="engineering-tags">
                        <span>Sentry</span>
                        <span>Mattermost</span>
                        <span>Monitoring</span>
                    </div>
                </article>


                <article class="engineering-card">
                    <span class="engineering-index">06 / ASYNCHRONOUS</span>
                    <div class="engineering-icon">↗</div>

                    <h3>Queues & Background Jobs</h3>

                    <p>
                        Implementing asynchronous workflows,
                        queue processing, background workers,
                        scheduled tasks and integration retries.
                    </p>

                    <div class="engineering-tags">
                        <span>Redis</span>
                        <span>Laravel Queues</span>
                        <span>Workers</span>
                    </div>
                </article>

            </div>

        </div>

    </section>


    <!-- RECOGNITION -->
    <section class="section recognition-section">

        <div class="container">

            <div class="recognition-card">

                <div class="recognition-decoration" aria-hidden="true">
                    ✳
                </div>

                <div class="recognition-content">

                    <div class="experience-eyebrow">
                        <span class="eyebrow-line"></span>
                        RECOGNITION
                    </div>

                    <h2>Good work deserves<br><span>recognition.</span></h2>

                    <p>
                        Received an Award of Excellence from the
                        Operations Manager at TurboDebt in recognition
                        of my contributions and work.
                    </p>

                    <span class="recognition-company">
                        <span class="recognition-star">✦</span>
                        TURBODEBT · AWARD OF EXCELLENCE
                    </span>

                </div>

                <div class="award-visual" aria-hidden="true">
                    <div class="award-ring">
                        <div class="award-inner">
                            <span>✦</span>
                            <strong>EXCELLENCE</strong>
                            <small>RECOGNITION</small>
                        </div>
                    </div>
                    <span class="award-year">2023 — 2026</span>
                </div>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="section experience-cta">

        <div class="container">

            <div class="experience-cta-inner">

                <div>
                    <div class="experience-eyebrow">
                        <span class="eyebrow-line"></span>
                        WHAT'S NEXT
                    </div>

                    <h2>Let's build something<br><span>meaningful.</span></h2>

                    <p>
                        Interested in my technical background?
                        Explore my projects or take a look at my resume.
                    </p>
                </div>

                <div class="experience-cta-actions">
                    <a href="/resume" class="btn btn-primary">
                        View my resume <span>↗</span>
                    </a>

                    <a href="/projects" class="btn btn-secondary">
                        Explore projects <span>→</span>
                    </a>
                </div>

            </div>

        </div>

    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
