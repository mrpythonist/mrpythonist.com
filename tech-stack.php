<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/tech.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [['Home', '/'], ['Tech Stack', null]];

$page = [
    'title' => 'Tech Stack | Muhammad Aqib, Software Engineer',
    'description' => 'Explore the technology stack of Muhammad Aqib, including PHP, Laravel, JavaScript, TypeScript, React, Next.js, Node.js, PostgreSQL, Redis, Docker, AWS and Linux.',
    'path' => '/tech-stack',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Software Engineer',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];

$active = 'tech-stack';

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);

$groups = [
    'Languages' => [
        'number' => '01',
        'description' => 'The foundations behind the software I build.',
        'icon' => 'code-2',
        'slugs' => ['php', 'javascript', 'typescript'],
    ],
    'Frontend Engineering' => [
        'number' => '02',
        'description' => 'Building intuitive, responsive user experiences.',
        'icon' => 'monitor',
        'slugs' => ['react', 'nextjs'],
    ],
    'Backend Engineering' => [
        'number' => '03',
        'description' => 'Designing APIs, application logic and scalable systems.',
        'icon' => 'server',
        'slugs' => ['laravel', 'nodejs', 'express'],
    ],
    'Databases & Caching' => [
        'number' => '04',
        'description' => 'Working with structured data, storage and performance.',
        'icon' => 'database',
        'slugs' => ['postgresql', 'mongodb', 'redis'],
    ],
    'Cloud & DevOps' => [
        'number' => '05',
        'description' => 'Infrastructure, deployment and production environments.',
        'icon' => 'cloud',
        'slugs' => ['docker', 'aws', 'linux', 'terraform'],
    ],
];

$level_descriptions = [
    'production' => 'Used in production',
    'professional' => 'Professional experience',
    'familiarity' => 'Working familiarity',
    'learning' => 'Currently learning',
];
?>


<?php
$tech_icons = [
    'php' => 'php',
    'javascript' => 'javascript',
    'typescript' => 'typescript',
    'react' => 'react',
    'nextjs' => 'nextdotjs',
    'laravel' => 'laravel',
    'nodejs' => 'nodedotjs',
    'express' => 'express',
    'postgresql' => 'postgresql',
    'mongodb' => 'mongodb',
    'redis' => 'redis',
    'docker' => 'docker',
    'aws' => 'amazonaws',
    'linux' => 'linux',
    'terraform' => 'terraform',
];

function tech_icon(string $slug): string
{
    $allowed = [
        'php',
        'javascript',
        'typescript',
        'react',
        'nextjs',
        'laravel',
        'nodejs',
        'express',
        'postgresql',
        'mongodb',
        'redis',
        'docker',
        'aws',
        'linux',
        'terraform',
    ];

    if (!in_array($slug, $allowed, true)) {
        return '';
    }

    $path = __DIR__ . '/assets/images/tech/' . $slug . '.svg';

    if (!is_file($path)) {
        return '';
    }

    return file_get_contents($path) ?: '';
}
?>


<main class="tech-page">

    <!-- HERO -->
    <section class="tech-hero section">
        <div class="container">
            <div class="tech-hero-grid">

                <div class="tech-hero-content">
                    <span class="tech-eyebrow">
                        <span class="tech-eyebrow-dot"></span>
                        TECHNOLOGY & ENGINEERING
                    </span>

                    <h1>
                        The tools behind
                        <span>the things I build.</span>
                    </h1>

                    <p class="tech-hero-description">
                        A collection of technologies I use to engineer
                        web applications, build backend systems and
                        work with cloud infrastructure.
                    </p>

                    <div class="tech-hero-actions">
                        <a href="#technology-groups" class="tech-primary-link">
                            Explore my stack
                            <span aria-hidden="true">↘</span>
                        </a>

                        <a href="/projects" class="tech-secondary-link">
                            View projects
                            <span aria-hidden="true">↗</span>
                        </a>
                    </div>

                    <div class="tech-hero-note">
                        <span class="tech-note-line"></span>
                        <span>Built through professional experience and continuous learning.</span>
                    </div>
                </div>

                <div class="tech-visual" aria-label="Illustration of interconnected development technologies">

                    <div class="tech-visual-glow"></div>

                    <div class="tech-orbit tech-orbit-one"></div>
                    <div class="tech-orbit tech-orbit-two"></div>

                    <div class="tech-orbit-label tech-orbit-label-one">FRONTEND</div>
                    <div class="tech-orbit-label tech-orbit-label-two">BACKEND</div>
                    <div class="tech-orbit-label tech-orbit-label-three">CLOUD</div>

                    <div class="tech-center">
                        <span class="tech-center-bracket">&lt;/&gt;</span>
                        <span>ENGINEERING</span>
                    </div>

                    <div class="tech-floating-node tech-node-php">
                        <?= tech_icon('php') ?>
                    </div>

                    <div class="tech-floating-node tech-node-react">
                        <?= tech_icon('react') ?>
                    </div>

                    <div class="tech-floating-node tech-node-node">
                        <?= tech_icon('nodejs') ?>
                    </div>

                    <div class="tech-floating-node tech-node-docker">
                        <?= tech_icon('docker') ?>
                    </div>

                    <div class="tech-floating-node tech-node-db">
                        <?= tech_icon('postgresql') ?>
                    </div>
                    <div class="tech-visual-caption">
                        <span class="tech-caption-dot"></span>
                        FULL-STACK DEVELOPMENT
                    </div>
                </div>

            </div>

            <div class="tech-hero-bottom">
                <span>MY TECHNOLOGY ECOSYSTEM</span>
                <span>01 — 05</span>
            </div>
        </div>
    </section>


    <!-- INTRODUCTION -->
    <section class="tech-intro">
        <div class="container tech-intro-grid">
            <div>
                <span class="tech-section-label">BEYOND THE TOOLS</span>
                <h2>
                    Technology is a tool.
                    <span>Engineering is the craft.</span>
                </h2>
            </div>

            <p>
                I focus on understanding how technologies work together —
                from frontend interfaces and backend architecture to
                databases, infrastructure and deployment. My priority is
                choosing the right tool for the problem, not simply
                following trends.
            </p>
        </div>
    </section>


    <!-- TECHNOLOGY GROUPS -->
    <section class="tech-groups-section" id="technology-groups">
        <div class="container">

            <div class="tech-section-heading">
                <div>
                    <span class="tech-section-label">THE TOOLKIT</span>
                    <h2>My technology stack<span>.</span></h2>
                </div>

                <p>
                    Explore the technologies, frameworks and tools
                    behind my engineering workflow.
                </p>
            </div>

            <div class="tech-groups">

                <?php foreach ($groups as $group => $data): ?>

                    <section class="tech-group">

                        <div class="tech-group-heading">

                            <div class="tech-group-heading-left">
                                <span class="tech-group-number">
                                    <?= e($data['number']) ?>
                                </span>

                                <div>
                                    <h3><?= e($group) ?></h3>
                                    <p><?= e($data['description']) ?></p>
                                </div>
                            </div>

                            <span class="tech-group-icon" aria-hidden="true">
                                <?php
                                $group_icons = [
                                    'Languages' => 'code-2',
                                    'Frontend Engineering' => 'monitor',
                                    'Backend Engineering' => 'server',
                                    'Databases & Caching' => 'database',
                                    'Cloud & DevOps' => 'cloud',
                                ];
                                ?>
                                <i data-lucide="<?= e($group_icons[$group] ?? 'code') ?>"></i>
                            </span>

                        </div>

                        <div class="tech-card-grid">

                            <?php foreach ($data['slugs'] as $slug):

                                if (!isset($tech_pages[$slug])) {
                                    continue;
                                }

                                $t = $tech_pages[$slug];

                                $level = $tech_levels[$t['level']] ?? 'Experience level not specified';

                                $level_description = $level_descriptions[$t['level']] ?? '';

                                $level_class = preg_replace(
                                    '/[^a-z0-9-]/',
                                    '',
                                    strtolower((string) $t['level'])
                                );

                            ?>

                                <article class="tech-card">

                                    <div class="tech-card-top">
                                        <span class="tech-card-logo">
                                            <?= tech_icon($slug) ?>
                                        </span>

                                        <span class="tech-card-arrow" aria-hidden="true">
                                            ↗
                                        </span>
                                    </div>

                                    <div class="tech-card-content">
                                        <h4>
                                            <a href="/tech-stack/<?= e($slug) ?>">
                                                <?= e($t['name']) ?>
                                            </a>
                                        </h4>

                                        <p><?= e($t['tagline']) ?></p>
                                    </div>

                                    <div class="tech-card-footer">

                                        <span class="tech-status-dot <?= e($level_class) ?>"></span>

                                        <div>
                                            <span class="tech-card-level">
                                                <?= e($level) ?>
                                            </span>

                                            <?php if ($level_description !== ''): ?>
                                                <span class="tech-card-level-detail">
                                                    <?= e($level_description) ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>

                                    </div>

                                    <a
                                        class="tech-card-full-link"
                                        href="/tech-stack/<?= e($slug) ?>"
                                        aria-label="Explore <?= e($t['name']) ?> experience"></a>

                                </article>

                            <?php endforeach; ?>

                        </div>

                    </section>

                <?php endforeach; ?>

            </div>

        </div>
    </section>


    <!-- ENGINEERING PHILOSOPHY -->
    <section class="tech-philosophy">
        <div class="container">
            <div class="tech-philosophy-card">

                <div class="tech-philosophy-content">
                    <span class="tech-section-label">MY APPROACH</span>

                    <h2>
                        AI-enabled,
                        <span>not AI-dependent.</span>
                    </h2>

                    <p>
                        I use modern development tools, including AI,
                        to improve productivity and accelerate workflows.
                        But understanding the underlying code, architecture
                        and engineering decisions remains essential.
                    </p>

                    <a href="/about" class="tech-philosophy-link">
                        More about my approach
                        <span>↗</span>
                    </a>
                </div>

                <div class="tech-philosophy-art" aria-hidden="true">
                    <div class="tech-art-ring tech-art-ring-one"></div>
                    <div class="tech-art-ring tech-art-ring-two"></div>

                    <div class="tech-art-center">
                        <span>&lt;/&gt;</span>
                    </div>

                    <span class="tech-art-symbol tech-art-symbol-one">{ }</span>
                    <span class="tech-art-symbol tech-art-symbol-two">01</span>
                    <span class="tech-art-symbol tech-art-symbol-three">∞</span>
                </div>

            </div>
        </div>
    </section>


    <!-- CTA -->
    <section class="tech-cta">
        <div class="container">
            <span class="tech-section-label">LET'S BUILD SOMETHING</span>

            <h2>
                Good engineering starts
                <span>with the right conversation.</span>
            </h2>

            <p>
                Have a project, an interesting technical challenge
                or an opportunity? Let's talk.
            </p>

            <a href="/contact" class="tech-primary-link">
                Get in touch
                <span aria-hidden="true">↗</span>
            </a>
        </div>
    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>