<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/data/portfolio.php';

$creative_works = [];

foreach ($projects as $p) {
    $creative_works[] = [
        '@type' => 'CreativeWork',
        'name' => $p['title'],
        'description' => $p['description'],
        'author' => ['@id' => SITE_URL . '/#person'],
        'keywords' => implode(', ', $p['tags']),
    ];
}

$page = [
    'title' => 'Projects | Muhammad Aqib — Software Engineer',
    'description' => 'Explore Muhammad Aqib’s software engineering projects, including full-stack applications, backend systems, API engineering, and cloud infrastructure.',
    'path' => '/projects',
    'jsonld' => [[
        '@type' => 'ItemList',
        'name' => 'Software Engineering Projects',
        'itemListElement' => $creative_works,
    ]],
];

$active = 'projects';

require __DIR__ . '/includes/header.php';
?>

<main class="projects-page">

    <section class="projects-intro">
        <div class="container">

            <div class="projects-intro-meta">
                <span><i></i> SOFTWARE ENGINEERING PORTFOLIO</span>
                <span>SELECTED WORK / 2023—2026</span>
            </div>

            <div class="projects-intro-content">
                <div>
                    <h1>
                        Built with<br>
                        <span>purpose.</span>
                    </h1>
                </div>

                <div class="projects-intro-aside">
                    <span class="intro-aside-number">03</span>
                    <p>
                        Projects exploring full-stack development,
                        backend engineering, and cloud infrastructure.
                        Built around practical problems and reliable systems.
                    </p>
                    <a href="#projects">
                        EXPLORE PROJECTS
                        <span>↓</span>
                    </a>
                </div>
            </div>

            <div class="projects-intro-footer">
                <span>01 — APPLICATIONS</span>
                <span>02 — BACKEND SYSTEMS</span>
                <span>03 — CLOUD INFRASTRUCTURE</span>
            </div>

        </div>
    </section>

    <?php
        $show_all = true;
        require __DIR__ . '/includes/projects-section.php';
    ?>

    <section class="projects-contact">
        <div class="container">

            <div class="projects-contact-top">
                <span>HAVE AN IDEA?</span>
                <span>LET'S BUILD SOMETHING MEANINGFUL.</span>
            </div>

            <div class="projects-contact-content">
                <h2>
                    Good ideas<br>
                    deserve <em>good engineering.</em>
                </h2>

                <a href="/contact">
                    START A CONVERSATION
                    <span>↗</span>
                </a>
            </div>

        </div>
    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>