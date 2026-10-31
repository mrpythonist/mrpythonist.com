<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [['Home', '/'], ['Certifications', null]];

$page = [
    'title' => 'Certifications & Badges | Muhammad Aqib',
    'description' => 'Verified credentials of Muhammad Aqib: Salesforce Trailhead badges and professional recognition. No vendor certifications are claimed.',
    'path' => '/certifications',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Certifications',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];

$active = '';

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>

<main class="certifications-page">

    <!-- HERO -->
    <section class="cert-hero" aria-labelledby="page-title">
        <div class="container">

            <div class="cert-hero-grid">

                <div class="cert-hero-content">

                    <span class="cert-eyebrow">
                        <span class="cert-eyebrow-dot"></span>
                        PROFESSIONAL DEVELOPMENT
                    </span>

                    <h1 id="page-title">
                        Credentials that reflect
                        <span>continuous growth.</span>
                    </h1>

                    <p class="cert-hero-description">
                        A transparent record of technical learning, platform
                        achievements, and professional recognition earned
                        throughout my engineering journey.
                    </p>

                    <a href="https://trailblazer.me/id/mrpythonist"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="cert-hero-link">
                        Explore my Trailblazer profile
                        <i data-lucide="arrow-up-right"></i>
                    </a>

                </div>

                <div class="cert-hero-visual" aria-hidden="true">

                    <div class="cert-orbit cert-orbit-outer"></div>
                    <div class="cert-orbit cert-orbit-inner"></div>

                    <div class="cert-hero-icon">
                        <i data-lucide="award"></i>
                    </div>

                    <div class="cert-floating-card cert-float-top">
                        <i data-lucide="badge-check"></i>
                        <span>Verified learning</span>
                    </div>

                    <div class="cert-floating-card cert-float-bottom">
                        <i data-lucide="trending-up"></i>
                        <span>Always improving</span>
                    </div>

                    <span class="cert-decoration cert-decoration-one"></span>
                    <span class="cert-decoration cert-decoration-two"></span>

                </div>

            </div>

            <div class="cert-hero-bottom">
                <span>LEARNING & DEVELOPMENT</span>
                <span class="cert-hero-line"></span>
                <span>HONESTLY EARNED. CLEARLY PRESENTED.</span>
            </div>

        </div>
    </section>


    <!-- CREDENTIAL OVERVIEW -->
    <section class="cert-overview">
        <div class="container">

            <div class="cert-overview-grid">

                <div class="cert-overview-item">
                    <span class="cert-overview-number">04</span>
                    <span class="cert-overview-label">Trailhead badges</span>
                </div>

                <div class="cert-overview-item">
                    <span class="cert-overview-number">01</span>
                    <span class="cert-overview-label">Virtual event stamp</span>
                </div>

                <div class="cert-overview-item">
                    <span class="cert-overview-number">01</span>
                    <span class="cert-overview-label">Professional award</span>
                </div>

                <div class="cert-overview-item">
                    <span class="cert-overview-number">100%</span>
                    <span class="cert-overview-label">Transparent credentials</span>
                </div>

            </div>

        </div>
    </section>


    <!-- TRAILHEAD BADGES -->
    <section class="section cert-section" aria-labelledby="trailhead-title">

        <div class="container">

            <div class="cert-section-heading">

                <div>
                    <span class="cert-section-kicker">
                        01 / PLATFORM LEARNING
                    </span>

                    <h2 id="trailhead-title">
                        Salesforce <span>Trailhead.</span>
                    </h2>

                    <p>
                        Hands-on learning achievements covering Salesforce
                        development workflows, application development,
                        and package management.
                    </p>
                </div>

                <div class="cert-platform-mark">
                    <i data-lucide="cloud"></i>
                    <span>SALESFORCE</span>
                </div>

            </div>


            <div class="cert-badge-grid">

                <article class="cert-badge-card">
                    <div class="cert-card-top">
                        <span class="cert-card-index">01</span>
                        <span class="cert-card-type">TRAILHEAD BADGE</span>
                    </div>

                    <div class="cert-badge-icon">
                        <i data-lucide="rocket"></i>
                    </div>

                    <h3>Quick Start: Salesforce DX</h3>

                    <p>
                        An introduction to Salesforce DX and its
                        development environment.
                    </p>

                    <div class="cert-card-footer">
                        <span><i data-lucide="check-circle-2"></i> Earned badge</span>
                        <i data-lucide="arrow-up-right"></i>
                    </div>
                </article>


                <article class="cert-badge-card">
                    <div class="cert-card-top">
                        <span class="cert-card-index">02</span>
                        <span class="cert-card-type">TRAILHEAD BADGE</span>
                    </div>

                    <div class="cert-badge-icon">
                        <i data-lucide="workflow"></i>
                    </div>

                    <h3>The DX Development Model</h3>

                    <p>
                        Understanding the development model and
                        collaborative Salesforce workflows.
                    </p>

                    <div class="cert-card-footer">
                        <span><i data-lucide="check-circle-2"></i> Earned badge</span>
                        <i data-lucide="arrow-up-right"></i>
                    </div>
                </article>


                <article class="cert-badge-card">
                    <div class="cert-card-top">
                        <span class="cert-card-index">03</span>
                        <span class="cert-card-type">TRAILHEAD BADGE</span>
                    </div>

                    <div class="cert-badge-icon">
                        <i data-lucide="code-2"></i>
                    </div>

                    <h3>App Development with Salesforce DX</h3>

                    <p>
                        Exploring application development practices
                        using Salesforce DX.
                    </p>

                    <div class="cert-card-footer">
                        <span><i data-lucide="check-circle-2"></i> Earned badge</span>
                        <i data-lucide="arrow-up-right"></i>
                    </div>
                </article>


                <article class="cert-badge-card">
                    <div class="cert-card-top">
                        <span class="cert-card-index">04</span>
                        <span class="cert-card-type">TRAILHEAD BADGE</span>
                    </div>

                    <div class="cert-badge-icon">
                        <i data-lucide="package-check"></i>
                    </div>

                    <h3>Package Development Readiness</h3>

                    <p>
                        Learning the foundations of package development
                        and release readiness.
                    </p>

                    <div class="cert-card-footer">
                        <span><i data-lucide="check-circle-2"></i> Earned badge</span>
                        <i data-lucide="arrow-up-right"></i>
                    </div>
                </article>

            </div>


            <!-- DREAMFORCE -->
            <div class="cert-event-card">

                <div class="cert-event-icon">
                    <i data-lucide="calendar-check"></i>
                </div>

                <div class="cert-event-content">
                    <span class="cert-event-kicker">VIRTUAL EVENT RECOGNITION</span>
                    <h3>Dreamforce '25</h3>
                    <p>
                        Participated in the Dreamforce '25 virtual experience
                        and earned the associated Trailhead event stamp.
                    </p>
                </div>

                <div class="cert-event-stamp">
                    <i data-lucide="stamp"></i>
                    <span>2025</span>
                    <small>VIRTUAL STAMP</small>
                </div>

            </div>


            <div class="cert-profile-link">
                <div>
                    <span class="cert-profile-label">PUBLIC LEARNING PROFILE</span>
                    <h3>Explore my Trailblazer achievements.</h3>
                </div>

                <a href="https://trailblazer.me/id/mrpythonist"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="cert-button">
                    View Trailblazer profile
                    <i data-lucide="external-link"></i>
                </a>
            </div>

        </div>

    </section>


    <!-- PROFESSIONAL RECOGNITION -->
    <section class="cert-recognition-section"
             aria-labelledby="recognition-title">

        <div class="container">

            <div class="cert-recognition-grid">

                <div class="cert-recognition-heading">
                    <span class="cert-section-kicker">
                        02 / PROFESSIONAL RECOGNITION
                    </span>

                    <h2 id="recognition-title">
                        Work that makes
                        <span>an impact.</span>
                    </h2>

                    <p>
                        Recognition earned through real-world engineering
                        contributions and collaboration.
                    </p>
                </div>


                <article class="cert-award-card">

                    <div class="cert-award-top">
                        <div class="cert-award-icon">
                            <i data-lucide="trophy"></i>
                        </div>

                        <span class="cert-award-label">
                            PROFESSIONAL AWARD
                        </span>
                    </div>

                    <div class="cert-award-body">
                        <span class="cert-award-year">TURBODEBT</span>

                        <h3>Award of Excellence</h3>

                        <p>
                            Presented by the Operations Manager at TurboDebt
                            in recognition of contributions to production
                            systems and engineering work.
                        </p>
                    </div>

                    <div class="cert-award-footer">
                        <span>Professional recognition</span>
                        <i data-lucide="award"></i>
                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- TRANSPARENCY -->
    <section class="cert-transparency-section">

        <div class="container">

            <div class="cert-transparency-card">

                <div class="cert-transparency-icon">
                    <i data-lucide="shield-check"></i>
                </div>

                <div class="cert-transparency-content">
                    <span class="cert-section-kicker">
                        A NOTE ON CREDENTIALS
                    </span>

                    <h2>Learning badges are not vendor certifications.</h2>

                    <p>
                        I currently hold no formal vendor certifications,
                        including AWS certifications. The Salesforce
                        credentials listed above are Trailhead learning
                        badges and an event stamp, not professional
                        Salesforce certifications. I believe in presenting
                        qualifications accurately and transparently.
                    </p>
                </div>

                <div class="cert-transparency-status">
                    <span class="cert-status-dot"></span>
                    <span>Accurate &amp; transparent</span>
                </div>

            </div>

        </div>

    </section>


    <!-- FINAL CTA -->
    <section class="cert-cta-section">

        <div class="container">

            <div class="cert-cta">

                <div>
                    <span class="cert-section-kicker">
                        BEYOND THE BADGES
                    </span>

                    <h2>
                        Skills are built
                        <span>through practice.</span>
                    </h2>

                    <p>
                        Explore the technologies, engineering projects,
                        and practical cloud work behind my learning journey.
                    </p>
                </div>

                <div class="cert-cta-actions">
                    <a href="/projects" class="cert-button cert-button-light">
                        Explore projects
                        <i data-lucide="arrow-up-right"></i>
                    </a>

                    <a href="/tech-stack" class="cert-cta-secondary">
                        Explore tech stack
                        <i data-lucide="arrow-right"></i>
                    </a>
                </div>

                <div class="cert-cta-decoration" aria-hidden="true">
                    <i data-lucide="graduation-cap"></i>
                </div>

            </div>

        </div>

    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
