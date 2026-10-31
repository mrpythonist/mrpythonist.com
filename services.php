<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [['Home', '/'], ['Services', null]];

$page = [
    'title' => 'Services | Muhammad Aqib — Full-Stack & Backend Development',
    'description' => 'Full-stack web development, backend API engineering, production troubleshooting and cloud infrastructure support by Muhammad Aqib.',
    'path' => '/services',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Software Engineer',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];

$active = '';

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>


<main class="services-page">

    <!-- HERO -->
    <section class="services-hero" aria-labelledby="page-title">
        <div class="container">

            <div class="services-hero-grid">

                <div>
                    <div class="services-eyebrow">
                        What I can help you build
                    </div>

                    <h1 id="page-title">
                        Engineering<br>
                        that makes<br>
                        <span>things work.</span>
                    </h1>

                    <p class="services-hero-description">
                        Practical software engineering for businesses and
                        product teams. From robust backend systems to
                        complete web applications and reliable infrastructure.
                    </p>

                    <div class="services-hero-actions">
                        <a href="/contact" class="btn btn-primary">
                            Discuss a project
                        </a>

                        <a href="#offerings" class="services-text-link">
                            Explore services <span>↘</span>
                        </a>
                    </div>
                </div>

                <div class="services-visual" aria-hidden="true">

                    <div class="services-visual-ring"></div>

                    <div class="services-core">
                        <svg viewBox="0 0 64 64" fill="none">
                            <path d="M22 19L9 32L22 45M42 19L55 32L42 45M37 13L27 51"
                                stroke="#F3D2AF"
                                stroke-width="3"
                                stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                        <strong>ENGINEERED</strong>
                        <small>with purpose.</small>
                    </div>

                    <div class="services-orbit one">
    <img src="/assets/images/tech/php.svg" alt="">
</div>

<div class="services-orbit two">
    <img src="/assets/images/tech/javascript.svg" alt="">
</div>

<div class="services-orbit three">
    <img src="/assets/images/tech/postgresql.svg" alt="">
</div>

<div class="services-orbit four">
    <img src="/assets/images/tech/aws.svg" alt="">
</div>

                    <div class="services-visual-label">
                        Design · Build · Deliver
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- INTRO STRIP -->
    <div class="services-intro-strip">
        <div class="container">
            <div class="services-intro-inner">
                <p>Software engineering services</p>
                <span>Thoughtful solutions. Reliable execution. Maintainable code.</span>
            </div>
        </div>
    </div>

    <!-- OFFERINGS -->
    <section class="services-offerings" id="offerings"
        aria-labelledby="services-heading">

        <div class="container">

            <div class="services-section-heading">
                <div>
                    <div class="services-eyebrow">Areas of expertise</div>
                    <h2 id="services-heading">
                        From first commit<br>
                        to <span>production.</span>
                    </h2>
                </div>

                <p>
                    Focused engineering support across the application
                    lifecycle — building, improving and maintaining
                    software that businesses depend on.
                </p>
            </div>

            <div class="services-card-grid">

                <!-- SERVICE 01 -->
                <article class="service-card">
                    <div class="service-card-top">
                        <span class="service-number">01 / DEVELOPMENT</span>

                        <div class="service-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="15" rx="2"/>
                                <path d="M3 9h18M8 14l-2 2 2 2M12 18h4"/>
                            </svg>
                        </div>
                    </div>

                    <h3>Full-Stack Web Applications</h3>

                    <p>
                        End-to-end web application development, from
                        intuitive interfaces to scalable backend systems.
                        Build new products or extend existing platforms
                        with clean architecture.
                    </p>

                    <div class="service-card-bottom">
                        <ul class="service-tags" aria-label="Technologies">
                            <li>Laravel</li>
                            <li>Next.js</li>
                            <li>React</li>
                            <li>PostgreSQL</li>
                        </ul>
                        <span class="service-arrow" aria-hidden="true">↗</span>
                    </div>
                </article>

                <!-- SERVICE 02 -->
                <article class="service-card">
                    <div class="service-card-top">
                        <span class="service-number">02 / BACKEND</span>

                        <div class="service-icon">
                            <svg viewBox="0 0 24 24">
                                <ellipse cx="12" cy="5" rx="8" ry="3"/>
                                <path d="M4 5v7c0 1.7 3.6 3 8 3s8-1.3 8-3V5"/>
                                <path d="M4 12v7c0 1.7 3.6 3 8 3s8-1.3 8-3v-7"/>
                            </svg>
                        </div>
                    </div>

                    <h3>Backend &amp; API Engineering</h3>

                    <p>
                        Reliable APIs, authentication, database architecture,
                        asynchronous jobs and third-party integrations
                        designed to handle real-world application demands.
                    </p>

                    <div class="service-card-bottom">
                        <ul class="service-tags" aria-label="Technologies">
                            <li>Node.js</li>
                            <li>Express</li>
                            <li>Laravel</li>
                            <li>Redis</li>
                        </ul>
                        <span class="service-arrow" aria-hidden="true">↗</span>
                    </div>
                </article>

                <!-- SERVICE 03 -->
                <article class="service-card">
                    <div class="service-card-top">
                        <span class="service-number">03 / OPTIMIZATION</span>

                        <div class="service-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M4 18V6M4 18h16"/>
                                <path d="M7 15l4-5 3 2 5-7"/>
                                <path d="M15 5h4v4"/>
                            </svg>
                        </div>
                    </div>

                    <h3>Production Troubleshooting</h3>

                    <p>
                        Investigate slow endpoints, failing background jobs,
                        database bottlenecks and deployment problems.
                        Identify root causes and implement lasting fixes.
                    </p>

                    <div class="service-card-bottom">
                        <ul class="service-tags" aria-label="Technologies">
                            <li>Linux</li>
                            <li>nginx</li>
                            <li>Sentry</li>
                            <li>SQL</li>
                        </ul>
                        <span class="service-arrow" aria-hidden="true">↗</span>
                    </div>
                </article>

                <!-- SERVICE 04 -->
                <article class="service-card">
                    <div class="service-card-top">
                        <span class="service-number">04 / INFRASTRUCTURE</span>

                        <div class="service-icon">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="3" width="8" height="8" rx="2"/>
                                <rect x="13" y="13" width="8" height="8" rx="2"/>
                                <path d="M13 7h5a3 3 0 0 1 3 3v3M11 17H6a3 3 0 0 1-3-3v-3"/>
                            </svg>
                        </div>
                    </div>

                    <h3>Cloud &amp; DevOps Support</h3>

                    <p>
                        Containerized development environments, deployment
                        workflows and cloud infrastructure fundamentals
                        configured with consistency and clear documentation.
                    </p>

                    <div class="service-card-bottom">
                        <ul class="service-tags" aria-label="Technologies">
                            <li>Docker</li>
                            <li>AWS</li>
                            <li>CI/CD</li>
                            <li>Linux</li>
                        </ul>
                        <span class="service-arrow" aria-hidden="true">↗</span>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="services-process" aria-labelledby="process-heading">
        <div class="container">

            <div class="services-process-heading">
                <div class="services-eyebrow">A straightforward process</div>

                <h2 id="process-heading">
                    Good engineering.<br>
                    <span>No unnecessary complexity.</span>
                </h2>

                <p>
                    A transparent, collaborative approach that keeps
                    priorities clear and progress visible at every stage.
                </p>
            </div>

            <div class="services-process-grid">

                <article class="process-item">
                    <span>01 / UNDERSTAND</span>
                    <h3>Understand the problem</h3>
                    <p>
                        Discuss your goals, existing systems,
                        technical challenges and expected outcomes.
                    </p>
                </article>

                <article class="process-item">
                    <span>02 / PLAN</span>
                    <h3>Define the approach</h3>
                    <p>
                        Break the work into practical milestones,
                        technical decisions and clear deliverables.
                    </p>
                </article>

                <article class="process-item">
                    <span>03 / BUILD</span>
                    <h3>Build and validate</h3>
                    <p>
                        Develop, test and review the implementation
                        while sharing regular progress updates.
                    </p>
                </article>

                <article class="process-item">
                    <span>04 / DELIVER</span>
                    <h3>Ship with confidence</h3>
                    <p>
                        Deliver maintainable code, documentation
                        and a clear handover of the completed work.
                    </p>
                </article>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="services-cta">
        <div class="container">

            <div class="services-cta-inner">

                <div class="services-cta-content">
                    <div class="services-eyebrow">
                        Have something in mind?
                    </div>

                    <h2>
                        Let's build something<br>
                        <span>that matters.</span>
                    </h2>

                    <p>
                        Have a product to develop, an existing system
                        to improve or a technical challenge to solve?
                        Let's talk about what you need.
                    </p>

                    <div class="services-cta-actions">
                        <a href="/contact" class="btn btn-primary">
                            Start a conversation <span aria-hidden="true">↗</span>
                        </a>

                        <a href="/projects" class="services-text-link">
                            Explore my projects <span>→</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
