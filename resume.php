<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [['Home', '/'], ['Resume', null]];

$page = [
    'title' => 'Resume | Muhammad Aqib, Software Engineer',
    'description' => 'Resume of Muhammad Aqib: software engineer with production experience in full-stack development, backend APIs and cloud infrastructure. Based in Multan, Pakistan.',
    'path' => '/resume',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Resume',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];

$active = '';

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>

<main class="resume-page">

    <!-- HERO -->
    <section class="resume-hero" aria-labelledby="page-title">
        <div class="container">

            <div class="resume-hero-grid">

                <div class="resume-hero-content">

                    <span class="resume-eyebrow">
                        <span class="resume-status-dot"></span>
                        PROFESSIONAL PROFILE
                    </span>

                    <h1 id="page-title">
                        The work behind
                        <span>the code.</span>
                    </h1>

                    <p class="resume-hero-description">
                        I'm Muhammad Aqib, a Software Engineer focused on
                        building reliable applications, engineering backend
                        systems, and working with cloud infrastructure.
                    </p>

                    <div class="resume-hero-meta">
                        <span>
                            <i data-lucide="map-pin"></i>
                            <?= e(LOCATION) ?>
                        </span>

                        <span>
                            <i data-lucide="briefcase-business"></i>
                            Software Engineer
                        </span>

                        <span>
                            <i data-lucide="calendar-days"></i>
                            3+ Years Experience
                        </span>
                    </div>

                    <div class="resume-hero-actions">

                        <a
                            href="mailto:<?= e(CONTACT_EMAIL) ?>"
                            class="resume-btn resume-btn-primary"
                        >
                            <i data-lucide="mail"></i>
                            Get in touch
                        </a>

                        <a
                            href="<?= e(GITHUB_URL) ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="resume-btn resume-btn-outline"
                        >
                            <i data-lucide="github"></i>
                            GitHub
                        </a>

                    </div>

                </div>

                <div class="resume-hero-visual">

                    <div class="resume-visual-glow"></div>

                    <div class="resume-document">

                        <div class="resume-document-top">
                            <span class="resume-document-icon">
                                <i data-lucide="file-text"></i>
                            </span>

                            <span class="resume-document-label">
                                PROFESSIONAL RESUME
                            </span>

                            <span class="resume-document-menu">
                                <i data-lucide="ellipsis"></i>
                            </span>
                        </div>

                        <div class="resume-document-body">

                            <div class="resume-document-avatar">
    <img
        src="/assets/images/mrpythonist.png"
        alt="Muhammad Aqib"
        loading="eager"
    >
</div>

                            <h2>Muhammad Aqib</h2>

                            <p>Software Engineer</p>

                            <div class="resume-document-line"></div>

                            <div class="resume-document-stat-grid">

                                <div>
                                    <strong>03+</strong>
                                    <span>Years</span>
                                </div>

                                <div>
                                    <strong>Full</strong>
                                    <span>Stack</span>
                                </div>

                                <div>
                                    <strong>AWS</strong>
                                    <span>Cloud</span>
                                </div>

                            </div>

                            <div class="resume-document-skills">
                                <span>Laravel</span>
                                <span>React</span>
                                <span>Node.js</span>
                                <span>PostgreSQL</span>
                                <span>AWS</span>
                            </div>

                        </div>

                        <div class="resume-document-footer">
                            <span>ENGINEERING · DEVELOPMENT · CLOUD</span>
                            <i data-lucide="arrow-up-right"></i>
                        </div>

                    </div>

                    <div class="resume-floating-note">
                        <i data-lucide="award"></i>
                        <div>
                            <strong>Award of Excellence</strong>
                            <span>TurboDebt Operations</span>
                        </div>
                    </div>

                    <div class="resume-visual-decoration decoration-one"></div>
                    <div class="resume-visual-decoration decoration-two"></div>

                </div>

            </div>

            <div class="resume-hero-bottom">
                <span>ENGINEERING EXPERIENCE</span>
                <span>01 — PROFESSIONAL PROFILE</span>
            </div>

        </div>
    </section>


    <!-- CONTENT -->
    <section class="resume-content section" aria-label="Resume details">

        <div class="container">

            <div class="resume-layout">

                <!-- SIDEBAR -->
                <aside class="resume-sidebar">

                    <div class="resume-sidebar-inner">

                        <span class="resume-sidebar-label">
                            ON THIS PAGE
                        </span>

                        <nav class="resume-nav" aria-label="Resume navigation">

                            <a href="#summary" class="active">
                                <i data-lucide="user-round"></i>
                                Overview
                            </a>

                            <a href="#experience">
                                <i data-lucide="briefcase-business"></i>
                                Experience
                            </a>

                            <a href="#skills">
                                <i data-lucide="layers"></i>
                                Technical skills
                            </a>

                            <a href="#education">
                                <i data-lucide="graduation-cap"></i>
                                Education
                            </a>

                            <a href="#opensource">
                                <i data-lucide="git-branch"></i>
                                Open source
                            </a>

                            <a href="#recognition">
                                <i data-lucide="award"></i>
                                Recognition
                            </a>

                        </nav>

                        <div class="resume-sidebar-divider"></div>

                        <div class="resume-sidebar-contact">

                            <span>LET'S CONNECT</span>

                            <a href="mailto:<?= e(CONTACT_EMAIL) ?>">
                                <i data-lucide="mail"></i>
                                Email me
                            </a>

                            <a
                                href="<?= e(LINKEDIN_URL) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <i data-lucide="linkedin"></i>
                                LinkedIn
                            </a>

                        </div>

                    </div>

                </aside>


                <!-- MAIN RESUME -->
                <div class="resume-main">


                    <!-- SUMMARY -->
                    <section
                        class="resume-block"
                        id="summary"
                        aria-labelledby="summary-title"
                    >

                        <div class="resume-section-heading">

                            <div>
                                <span class="resume-section-index">01 / ABOUT</span>
                                <h2 id="summary-title">Professional summary</h2>
                            </div>

                            <span class="resume-heading-icon">
                                <i data-lucide="user-round"></i>
                            </span>

                        </div>

                        <div class="resume-summary-card">

                            <span class="resume-summary-quote">“</span>

                            <p>
                                Software engineer with 3+ years of production
                                experience in full-stack and backend development.
                                Built and maintained Laravel and Node.js APIs,
                                PostgreSQL-backed systems, Redis queues and
                                third-party integrations, deployed on AWS and
                                Linux infrastructure. Focused on reliable,
                                maintainable systems and clear API design.
                            </p>

                            <div class="resume-summary-tags">
                                <span>Backend Engineering</span>
                                <span>Full-Stack Development</span>
                                <span>Cloud Infrastructure</span>
                            </div>

                        </div>

                    </section>


                    <!-- EXPERIENCE -->
                    <section
                        class="resume-block"
                        id="experience"
                        aria-labelledby="experience-title"
                    >

                        <div class="resume-section-heading">

                            <div>
                                <span class="resume-section-index">02 / CAREER</span>
                                <h2 id="experience-title">Professional experience</h2>
                            </div>

                            <span class="resume-heading-icon">
                                <i data-lucide="briefcase-business"></i>
                            </span>

                        </div>

                        <article class="resume-experience-card">

                            <div class="resume-experience-top">

                                <div class="resume-company-identity">

                                    <div class="resume-company-logo">
    <img
        src="/assets/images/turbo.png"
        alt="TurboDebt logo"
        loading="lazy"
    >
</div>

                                    <div>
                                        <h3>Software Engineer</h3>
                                        <span>TurboDebt · Full-time</span>
                                    </div>

                                </div>

                                <span class="resume-employment-type">
                                    REMOTE
                                </span>

                            </div>

                            <div class="resume-experience-meta">

                                <span>
                                    <i data-lucide="calendar"></i>
                                    March 2023 – October 2026
                                </span>

                                <span>
                                    <i data-lucide="map-pin"></i>
                                    Remote
                                </span>

                            </div>

                            <div class="resume-experience-divider"></div>

                            <h4>Key contributions</h4>

                            <ul class="resume-achievements">

                                <li>
                                    <span class="achievement-marker"></span>
                                    Engineered and maintained production backend
                                    systems and REST APIs in Laravel and Node.js.
                                </li>

                                <li>
                                    <span class="achievement-marker"></span>
                                    Designed PostgreSQL schemas and queries on
                                    AWS RDS; used Redis for queues, caching and
                                    background workers.
                                </li>

                                <li>
                                    <span class="achievement-marker"></span>
                                    Built and maintained third-party integrations:
                                    Salesforce (token refresh, queue processing),
                                    Iterable, Ytel and Apten.
                                </li>

                                <li>
                                    <span class="achievement-marker"></span>
                                    Implemented lead ingestion pipelines
                                    (TrustedForm, Jornaya) with validation.
                                </li>

                                <li>
                                    <span class="achievement-marker"></span>
                                    Deployed and troubleshot services on Ubuntu
                                    EC2 behind nginx; used Docker for development
                                    environments.
                                </li>

                                <li>
                                    <span class="achievement-marker"></span>
                                    Monitored production with Sentry and Mattermost;
                                    performed single-point-of-failure reviews
                                    across DNS, third parties and AWS.
                                </li>

                                <li>
                                    <span class="achievement-marker"></span>
                                    Received an Award of Excellence from the
                                    Operations Manager.
                                </li>

                            </ul>

                            <div class="resume-experience-footer">
                                <span>
                                    <i data-lucide="check-circle-2"></i>
                                    Production systems & engineering
                                </span>
                                <span>2023 — 2026</span>
                            </div>

                        </article>

                    </section>


                    
<!-- SKILLS -->
<section
    class="resume-block"
    id="skills"
    aria-labelledby="skills-title"
>

    <div class="resume-section-heading">

        <div>
            <span class="resume-section-index">03 / TOOLKIT</span>
            <h2 id="skills-title">Technical expertise</h2>
        </div>

        <span class="resume-heading-icon">
            <i data-lucide="layers"></i>
        </span>

    </div>

    <?php
    $skill_groups = [
        [
            'title' => 'Backend Engineering',
            'description' => 'Server-side development and API engineering',
            'skills' => [
                ['name' => 'PHP', 'icon' => 'php.svg'],
                ['name' => 'Laravel', 'icon' => 'laravel.svg'],
                ['name' => 'Node.js', 'icon' => 'nodejs.svg'],
                ['name' => 'Express.js', 'icon' => 'express.svg'],
                ['name' => 'Python', 'icon' => 'python.svg'],
                ['name' => 'Django', 'icon' => 'django.svg'],
            ],
        ],
        [
            'title' => 'Frontend Development',
            'description' => 'Modern interfaces and application development',
            'skills' => [
                ['name' => 'JavaScript', 'icon' => 'javascript.svg'],
                ['name' => 'TypeScript', 'icon' => 'typescript.svg'],
                ['name' => 'React', 'icon' => 'react.svg'],
                ['name' => 'Next.js', 'icon' => 'nextjs.svg'],
            ],
        ],
        [
            'title' => 'Databases & Caching',
            'description' => 'Data modeling, storage and performance',
            'skills' => [
                ['name' => 'PostgreSQL', 'icon' => 'postgresql.svg'],
                ['name' => 'MongoDB', 'icon' => 'mongodb.svg'],
                ['name' => 'Redis', 'icon' => 'redis.svg'],
            ],
        ],
        [
            'title' => 'Cloud, Infrastructure & DevOps',
            'description' => 'Deployment, infrastructure and development workflows',
            'skills' => [
                ['name' => 'AWS', 'icon' => 'aws.svg'],
                ['name' => 'Docker', 'icon' => 'docker.svg'],
                ['name' => 'Linux', 'icon' => 'linux.svg'],
                ['name' => 'Terraform', 'icon' => 'terraform.svg'],
                ['name' => 'Nginx', 'icon' => 'nginx.svg'],
                ['name' => 'Apache', 'icon' => 'apache.svg'],
                ['name' => 'Git', 'icon' => 'git.svg'],
                ['name' => 'GitHub', 'icon' => 'github.svg'],
                ['name' => 'GitHub Actions', 'icon' => 'githubactions.svg'],
                ['name' => 'Bash', 'icon' => 'gnubash.svg'],
            ],
        ],
    ];
    ?>

    <div class="resume-skills-grid">

        <?php foreach ($skill_groups as $group): ?>

            <article class="resume-skill-card">

                <div class="resume-skill-card-heading">
                    <h3><?= e($group['title']) ?></h3>
                    <p><?= e($group['description']) ?></p>
                </div>

                <div class="resume-skill-logos">

                    <?php foreach ($group['skills'] as $skill): ?>

                        <div
                            class="resume-skill-logo"
                            title="<?= e($skill['name']) ?>"
                        >

                            <img
                                src="/assets/images/tech/<?= e($skill['icon']) ?>"
                                alt=""
                                loading="lazy"
                                width="26"
                                height="26"
                            >

                            <span><?= e($skill['name']) ?></span>

                        </div>

                    <?php endforeach; ?>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

</section>

                    <!-- EDUCATION -->
                    <section
                        class="resume-block"
                        id="education"
                        aria-labelledby="education-title"
                    >

                        <div class="resume-section-heading">

                            <div>
                                <span class="resume-section-index">04 / ACADEMICS</span>
                                <h2 id="education-title">Education</h2>
                            </div>

                            <span class="resume-heading-icon">
                                <i data-lucide="graduation-cap"></i>
                            </span>

                        </div>

                        <article class="resume-education-card">

                            <div class="resume-education-logo">
                                <img
                                    src="/assets/images/comsats.png"
                                    alt="COMSATS University Islamabad logo"
                                    loading="lazy"
                                >
                            </div>

                            <div class="resume-education-details">
                                <span class="resume-education-year">
                                    2019 — 2023
                                </span>

                                <h3>Bachelor of Science in Computer Science</h3>

                                <p>COMSATS University Islamabad</p>

                                <span class="resume-education-location">
                                    <i data-lucide="map-pin"></i>
                                    Pakistan
                                </span>
                            </div>

                            <div class="resume-education-badge">
                                <i data-lucide="book-open"></i>
                                BSCS
                            </div>

                        </article>

                    </section>


                    <!-- OPEN SOURCE -->
                    <section
                        class="resume-block"
                        id="opensource"
                        aria-labelledby="opensource-title"
                    >

                        <div class="resume-section-heading">

                            <div>
                                <span class="resume-section-index">05 / COMMUNITY</span>
                                <h2 id="opensource-title">Open source contributions</h2>
                            </div>

                            <span class="resume-heading-icon">
                                <i data-lucide="github"></i>
                            </span>

                        </div>

                        <div class="resume-open-source-list">

                            <article class="resume-open-source-card">

                                <div class="resume-open-source-icon">
                                    <i data-lucide="activity"></i>
                                </div>

                                <div class="resume-open-source-content">

                                    <div class="resume-open-source-title">
                                        <h3>Log Anomaly Watcher</h3>
                                        <span>PERSONAL PROJECT</span>
                                    </div>

                                    <p>
                                        Node.js + TypeScript + Express service
                                        that ingests logs and surfaces spike
                                        and new-signature anomalies with
                                        transparent rules.
                                    </p>

                                    <div class="resume-open-source-tech">
                                        <span>Node.js</span>
                                        <span>TypeScript</span>
                                        <span>Express</span>
                                    </div>

                                    <a
                                        href="https://github.com/mrpythonist/log-anomaly-watcher"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        View repository
                                        <i data-lucide="arrow-up-right"></i>
                                    </a>

                                </div>

                            </article>


                            <article class="resume-open-source-card">

                                <div class="resume-open-source-icon">
                                    <i data-lucide="git-pull-request"></i>
                                </div>

                                <div class="resume-open-source-content">

                                    <div class="resume-open-source-title">
                                        <h3>markdown-reader</h3>
                                        <span>MERGED CONTRIBUTION</span>
                                    </div>

                                    <p>
                                        Contributed documentation improvements
                                        through PR #447, enhancing README
                                        readability.
                                    </p>

                                    <div class="resume-open-source-tech">
                                        <span>Documentation</span>
                                        <span>Open Source</span>
                                    </div>

                                </div>

                            </article>

                        </div>

                    </section>


                    <!-- RECOGNITION -->
                    <section
                        class="resume-block"
                        id="recognition"
                        aria-labelledby="recognition-title"
                    >

                        <div class="resume-section-heading">

                            <div>
                                <span class="resume-section-index">06 / RECOGNITION</span>
                                <h2 id="recognition-title">Recognition & awards</h2>
                            </div>

                            <span class="resume-heading-icon">
                                <i data-lucide="award"></i>
                            </span>

                        </div>

                        <article class="resume-award-card">

                            <div class="resume-award-icon">
                                <i data-lucide="trophy"></i>
                            </div>

                            <div>
                                <span class="resume-award-label">
                                    PROFESSIONAL RECOGNITION
                                </span>

                                <h3>Award of Excellence</h3>

                                <p>
                                    TurboDebt Operations — recognized for
                                    contributions to production systems.
                                </p>
                            </div>

                            <span class="resume-award-star">
                                <i data-lucide="sparkles"></i>
                            </span>

                        </article>

                    </section>


                    <!-- FOOTNOTE -->
                    <div class="resume-end-note">

                        <div class="resume-end-icon">
                            <i data-lucide="file-check-2"></i>
                        </div>

                        <div>
                            <h3>More about my work</h3>
                            <p>
                                Explore my professional journey and selected
                                engineering projects.
                            </p>
                            <div class="resume-end-links">
                                <a href="/experience">
                                    Experience
                                    <i data-lucide="arrow-up-right"></i>
                                </a>

                                <a href="/projects">
                                    Projects
                                    <i data-lucide="arrow-up-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>