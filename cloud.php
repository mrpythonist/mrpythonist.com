<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [['Home', '/'], ['Cloud & DevOps', null]];

$page = [
    'title' => 'Cloud & DevOps | Muhammad Aqib',
    'description' => 'Practical cloud and DevOps engineering by Muhammad Aqib: AWS, Linux, Docker, networking, infrastructure automation and production systems.',
    'path' => '/cloud',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Cloud & DevOps',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];

$active = '';

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>

<main class="cloud-page">

    <!-- HERO -->
    <section class="cloud-hero" aria-labelledby="cloud-title">
        <div class="container">

            <div class="cloud-hero-grid">

                <div class="cloud-hero-content">

                    <div class="cloud-eyebrow">
                        <span class="cloud-status-dot"></span>
                        INFRASTRUCTURE & ENGINEERING
                    </div>

                    <h1 id="cloud-title">
                        Building beyond
                        <span>the application.</span>
                    </h1>

                    <p class="cloud-hero-description">
                        Exploring the systems behind reliable software —
                        cloud infrastructure, deployment pipelines,
                        automation and production operations.
                    </p>

                    <div class="cloud-hero-actions">
                        <a href="/projects/cloud-devops-lab" class="cloud-button primary">
                            Explore my lab
                            <i data-lucide="arrow-up-right"></i>
                        </a>

                        <a href="#production" class="cloud-text-link">
                            Production experience
                            <i data-lucide="arrow-down"></i>
                        </a>
                    </div>

                    <div class="cloud-hero-meta">
                        <span><i data-lucide="server"></i> Infrastructure</span>
                        <span><i data-lucide="terminal"></i> Automation</span>
                        <span><i data-lucide="cloud"></i> AWS & Cloud</span>
                    </div>

                </div>

                <!-- INFRASTRUCTURE VISUAL -->
                <div class="cloud-visual" aria-label="Illustration of a cloud infrastructure environment">

                    <div class="cloud-visual-top">
                        <span>INFRASTRUCTURE OVERVIEW</span>
                        <span class="cloud-live-indicator">
                            <span></span> LAB ENVIRONMENT
                        </span>
                    </div>

                    <div class="cloud-diagram">

                        <div class="cloud-node cloud-node-main">
                            <div class="cloud-node-icon">
                                <i data-lucide="cloud"></i>
                            </div>
                            <div>
                                <strong>Cloud Infrastructure</strong>
                                <small>AWS Environment</small>
                            </div>
                            <span class="cloud-node-check">
                                <i data-lucide="layers"></i>
                            </span>
                        </div>

                        <div class="cloud-connector">
                            <span></span>
                        </div>

                        <div class="cloud-node-row">

                            <div class="cloud-node">
                                <i data-lucide="server"></i>
                                <strong>Compute</strong>
                                <small>EC2</small>
                            </div>

                            <div class="cloud-node">
                                <i data-lucide="database"></i>
                                <strong>Database</strong>
                                <small>RDS</small>
                            </div>

                        </div>

                        <div class="cloud-connector split">
                            <span></span>
                            <span></span>
                        </div>

                        <div class="cloud-node-row bottom">

                            <div class="cloud-mini-node">
                                <i data-lucide="container"></i>
                                Docker
                            </div>

                            <div class="cloud-mini-node">
                                <i data-lucide="workflow"></i>
                                CI/CD
                            </div>

                            <div class="cloud-mini-node">
                                <i data-lucide="activity"></i>
                                Monitoring
                            </div>

                        </div>

                    </div>

                    <div class="cloud-visual-footer">
                        <span>01 / SYSTEM ARCHITECTURE</span>
                        <span>LEARN · BUILD · DEPLOY</span>
                    </div>

                    <div class="cloud-orbit orbit-one"></div>
                    <div class="cloud-orbit orbit-two"></div>

                </div>

            </div>

            <div class="cloud-hero-bottom">
                <span>MY ENGINEERING FOCUS</span>
                <span>01 — BUILD RELIABLE SYSTEMS</span>
                <span>02 — AUTOMATE OPERATIONS</span>
                <span>03 — ENGINEER FOR SCALE</span>
            </div>

        </div>
    </section>


    <!-- PRODUCTION EXPERIENCE -->
    <section class="cloud-section cloud-production" id="production">

        <div class="container">

            <div class="cloud-section-heading">

                <div>
                    <span class="cloud-kicker">01 / REAL-WORLD EXPERIENCE</span>
                    <h2>Production exposure.<br><span>Practical engineering.</span></h2>
                </div>

                <p>
                    Experience working with the infrastructure and
                    operational tools that support real-world web applications.
                </p>

            </div>

            <div class="cloud-experience-grid">

                <article class="cloud-experience-card featured">
                    <div class="cloud-card-top">
                        <span class="cloud-card-number">01</span>
                        <i data-lucide="server"></i>
                    </div>
                    <h3>Cloud & Compute</h3>
                    <p>
                        Worked with Ubuntu-based AWS EC2 environments,
                        nginx and application services running Laravel
                        and Node.js.
                    </p>
                    <div class="cloud-tags">
                        <span>AWS EC2</span>
                        <span>Ubuntu</span>
                        <span>nginx</span>
                    </div>
                </article>

                <article class="cloud-experience-card">
                    <div class="cloud-card-top">
                        <span class="cloud-card-number">02</span>
                        <i data-lucide="database"></i>
                    </div>
                    <h3>Data & Storage</h3>
                    <p>
                        Worked with managed PostgreSQL databases,
                        object storage and access management
                        in cloud environments.
                    </p>
                    <div class="cloud-tags">
                        <span>RDS</span>
                        <span>S3</span>
                        <span>IAM</span>
                    </div>
                </article>

                <article class="cloud-experience-card">
                    <div class="cloud-card-top">
                        <span class="cloud-card-number">03</span>
                        <i data-lucide="container"></i>
                    </div>
                    <h3>Containerization</h3>
                    <p>
                        Used Docker to create reproducible development
                        environments and support multi-service
                        application workflows.
                    </p>
                    <div class="cloud-tags">
                        <span>Docker</span>
                        <span>Compose</span>
                        <span>Linux</span>
                    </div>
                </article>

                <article class="cloud-experience-card">
                    <div class="cloud-card-top">
                        <span class="cloud-card-number">04</span>
                        <i data-lucide="activity"></i>
                    </div>
                    <h3>Monitoring & Troubleshooting</h3>
                    <p>
                        Worked with Sentry, Mattermost and application
                        logs to investigate issues and support
                        production troubleshooting.
                    </p>
                    <div class="cloud-tags">
                        <span>Sentry</span>
                        <span>Mattermost</span>
                        <span>Logs</span>
                    </div>
                </article>

                <article class="cloud-experience-card">
                    <div class="cloud-card-top">
                        <span class="cloud-card-number">05</span>
                        <i data-lucide="globe"></i>
                    </div>
                    <h3>Web Infrastructure</h3>
                    <p>
                        Deployed and administered this portfolio using
                        cPanel and LiteSpeed, including DNS, HTTPS,
                        permissions and rewrite rules.
                    </p>
                    <div class="cloud-tags">
                        <span>cPanel</span>
                        <span>LiteSpeed</span>
                        <span>DNS</span>
                    </div>
                </article>

                <article class="cloud-experience-card cloud-next-card">
                    <div class="cloud-next-icon">
                        <i data-lucide="arrow-up-right"></i>
                    </div>
                    <span class="cloud-kicker">THE NEXT STEP</span>
                    <h3>From managing applications to engineering infrastructure.</h3>
                    <p>
                        Expanding my foundation through structured,
                        hands-on cloud and DevOps projects.
                    </p>
                </article>

            </div>

        </div>

    </section>


    <!-- LEARNING ROADMAP -->
    <section class="cloud-section cloud-roadmap">

        <div class="container">

            <div class="cloud-section-heading">

                <div>
                    <span class="cloud-kicker">02 / CURRENT LEARNING PATH</span>
                    <h2>Learning by <span>building.</span></h2>
                </div>

                <p>
                    A structured roadmap focused on understanding
                    infrastructure from the operating system
                    to cloud-native deployment.
                </p>

            </div>

            <div class="cloud-roadmap-layout">

                <div class="cloud-roadmap-intro">
                    <span class="cloud-roadmap-label">ENGINEERING ROADMAP</span>
                    <div class="cloud-roadmap-big-number">05</div>
                    <h3>Core learning stages.</h3>
                    <p>
                        Each stage builds on the previous one through
                        practical exercises, infrastructure labs
                        and real implementations.
                    </p>
                    <a href="/projects/cloud-devops-lab">
                        View the hands-on lab
                        <i data-lucide="arrow-up-right"></i>
                    </a>
                </div>

                <div class="cloud-roadmap-list">

                    <article class="cloud-roadmap-item">
                        <div class="cloud-roadmap-marker">
                            <i data-lucide="terminal"></i>
                        </div>
                        <div class="cloud-roadmap-content">
                            <div class="cloud-roadmap-meta">
                                <span>STAGE 01</span>
                                <span class="cloud-stage-status">FOUNDATION</span>
                            </div>
                            <h3>Linux & Networking</h3>
                            <p>
                                Processes, permissions, filesystems,
                                shell scripting, DNS, TCP/IP, TLS,
                                firewalls and SSH.
                            </p>
                            <div class="cloud-tags">
                                <span>Linux</span>
                                <span>Bash</span>
                                <span>Networking</span>
                                <span>SSH</span>
                            </div>
                        </div>
                    </article>

                    <article class="cloud-roadmap-item">
                        <div class="cloud-roadmap-marker">
                            <i data-lucide="container"></i>
                        </div>
                        <div class="cloud-roadmap-content">
                            <div class="cloud-roadmap-meta">
                                <span>STAGE 02</span>
                                <span class="cloud-stage-status">IN PROGRESS</span>
                            </div>
                            <h3>Docker & CI/CD</h3>
                            <p>
                                Multi-service Compose stacks,
                                container image best practices
                                and automated GitHub Actions pipelines.
                            </p>
                            <div class="cloud-tags">
                                <span>Docker</span>
                                <span>Compose</span>
                                <span>GitHub Actions</span>
                            </div>
                        </div>
                    </article>

                    <article class="cloud-roadmap-item">
                        <div class="cloud-roadmap-marker">
                            <i data-lucide="cloud"></i>
                        </div>
                        <div class="cloud-roadmap-content">
                            <div class="cloud-roadmap-meta">
                                <span>STAGE 03</span>
                                <span class="cloud-stage-status">UP NEXT</span>
                            </div>
                            <h3>AWS Cloud Architecture</h3>
                            <p>
                                IAM, VPC, EC2, S3, RDS, ElastiCache,
                                Route 53, CloudFront, ALB, Auto Scaling,
                                CloudWatch, Secrets Manager and ECS.
                            </p>
                            <div class="cloud-tags">
                                <span>AWS</span>
                                <span>VPC</span>
                                <span>IAM</span>
                                <span>ECS</span>
                            </div>
                        </div>
                    </article>

                    <article class="cloud-roadmap-item">
                        <div class="cloud-roadmap-marker">
                            <i data-lucide="workflow"></i>
                        </div>
                        <div class="cloud-roadmap-content">
                            <div class="cloud-roadmap-meta">
                                <span>STAGE 04</span>
                                <span class="cloud-stage-status">PLANNED</span>
                            </div>
                            <h3>Infrastructure as Code</h3>
                            <p>
                                Provisioning and managing AWS
                                infrastructure through reusable,
                                version-controlled configurations.
                            </p>
                            <div class="cloud-tags">
                                <span>Terraform</span>
                                <span>IaC</span>
                                <span>Automation</span>
                            </div>
                        </div>
                    </article>

                    <article class="cloud-roadmap-item">
                        <div class="cloud-roadmap-marker">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="cloud-roadmap-content">
                            <div class="cloud-roadmap-meta">
                                <span>STAGE 05</span>
                                <span class="cloud-stage-status">PLANNED</span>
                            </div>
                            <h3>Observability & Kubernetes</h3>
                            <p>
                                Metrics, structured logging,
                                monitoring, container orchestration
                                and deployment management.
                            </p>
                            <div class="cloud-tags">
                                <span>Prometheus</span>
                                <span>Kubernetes</span>
                                <span>Helm</span>
                            </div>
                        </div>
                    </article>

                </div>

            </div>

        </div>

    </section>


    <!-- ENGINEERING PRINCIPLES -->
    <section class="cloud-principles">

        <div class="container">

            <div class="cloud-principles-heading">
                <span class="cloud-kicker">03 / ENGINEERING MINDSET</span>
                <h2>Infrastructure is more than servers.</h2>
                <p>
                    My approach to building and operating dependable systems.
                </p>
            </div>

            <div class="cloud-principles-grid">

                <div>
                    <i data-lucide="shield-check"></i>
                    <h3>Reliability</h3>
                    <p>Build systems that remain dependable under real-world conditions.</p>
                </div>

                <div>
                    <i data-lucide="zap"></i>
                    <h3>Automation</h3>
                    <p>Reduce repetitive work through scripts and repeatable processes.</p>
                </div>

                <div>
                    <i data-lucide="gauge"></i>
                    <h3>Performance</h3>
                    <p>Understand the infrastructure behind fast, scalable applications.</p>
                </div>

                <div>
                    <i data-lucide="lock"></i>
                    <h3>Security</h3>
                    <p>Apply sensible access controls and secure configuration practices.</p>
                </div>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="cloud-cta-section">

        <div class="container">

            <div class="cloud-cta">

                <div class="cloud-cta-decoration">
                    <i data-lucide="cloud-cog"></i>
                </div>

                <div class="cloud-cta-content">
                    <span class="cloud-kicker">04 / EXPLORE THE WORK</span>
                    <h2>From theory to <span>working infrastructure.</span></h2>
                    <p>
                        Follow my Cloud & DevOps Lab to see practical
                        experiments, infrastructure configurations
                        and the things I'm building along the way.
                    </p>

                    <div class="cloud-cta-actions">
                        <a href="/projects/cloud-devops-lab" class="cloud-button primary">
                            Explore Cloud & DevOps Lab
                            <i data-lucide="arrow-up-right"></i>
                        </a>

                        <a href="/tech-stack/aws" class="cloud-button secondary">
                            Explore my tech stack
                        </a>
                    </div>
                </div>

                <div class="cloud-cta-index">04<span>/04</span></div>

            </div>

        </div>

    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>