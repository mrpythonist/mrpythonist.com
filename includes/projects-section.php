<?php
declare(strict_types=1);

$show_all = $show_all ?? false;
$shown = $show_all ? $projects : array_slice($projects, 0, 3);
?>

<section id="projects" class="section projects-section"
         aria-labelledby="projects-title">

    <div class="container">

        <div class="projects-heading">
            <div>
                <span class="projects-eyebrow">
                    <span></span>
                    THE SELECTED WORK
                </span>

                <h2 id="projects-title">
                    Engineering in<br>
                    <em>practice.</em>
                </h2>
            </div>

            <?php if (empty($show_all)): ?>
                <a class="projects-view-all" href="/projects">
                    Explore all projects <span>↗</span>
                </a>
            <?php else: ?>
                <p class="projects-heading-note">
                    A closer look at the applications, systems,
                    and infrastructure behind my work.
                </p>
            <?php endif; ?>
        </div>


        <div class="projects-grid">

            <?php foreach ($shown as $index => $project): ?>

                <?php
                    $featured = ($index === 0);
                    $slug = $project['slug'];
                ?>

                <article class="project-card <?= $featured ? 'project-card-featured' : 'project-card-standard' ?>">

                    <!-- VISUAL -->
                    <div class="project-art project-art-<?= e($slug) ?>">

                        <div class="project-art-grid"></div>
                        <div class="project-art-glow"></div>

                        <div class="project-art-top">
                            <span>SELECTED PROJECT</span>
                            <span><?= sprintf('%02d', $index + 1) ?> / <?= sprintf('%02d', count($shown)) ?></span>
                        </div>

                        <div class="project-art-content">
                            <span>ENGINEERING / <?= sprintf('%02d', $index + 1) ?></span>
                            <h3><?= e($project['title']) ?></h3>
                        </div>

                        <div class="project-art-symbol">

                            <?php if ($slug === 'food-delivery-system'): ?>

                                <svg viewBox="0 0 160 160" fill="none">
                                    <rect x="28" y="29" width="104" height="102"
                                          rx="15" stroke="currentColor"
                                          stroke-width="1.5" opacity=".5"/>

                                    <path d="M47 53h66M47 66h42"
                                          stroke="currentColor"
                                          stroke-width="2"
                                          stroke-linecap="round"/>

                                    <rect x="47" y="80" width="66" height="34"
                                          rx="5" stroke="currentColor"
                                          stroke-width="1.5"/>

                                    <path d="M58 91h23M58 101h40"
                                          stroke="currentColor"
                                          stroke-width="2"
                                          stroke-linecap="round"/>

                                    <circle cx="113" cy="49" r="13"
                                            fill="currentColor"
                                            fill-opacity=".12"
                                            stroke="currentColor"/>

                                    <path d="m108 49 4 4 7-8"
                                          stroke="currentColor"
                                          stroke-width="2"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                            <?php elseif ($slug === 'backend-engineering-api-systems'): ?>

                                <svg viewBox="0 0 160 160" fill="none">
                                    <rect x="29" y="29" width="102" height="102"
                                          rx="18" stroke="currentColor"
                                          stroke-width="1.5"/>

                                    <path d="m65 60-19 20 19 20M95 60l19 20-19 20M87 51 72 109"
                                          stroke="currentColor"
                                          stroke-width="3"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>

                                    <circle cx="125" cy="35" r="10"
                                            fill="currentColor"
                                            fill-opacity=".15"
                                            stroke="currentColor"/>
                                </svg>

                            <?php elseif ($slug === 'cloud-devops-lab'): ?>

                                <svg viewBox="0 0 160 160" fill="none">
                                    <path d="M44 100h73a22 22 0 0 0 0-44h-5a32 32 0 0 0-61-2 23 23 0 0 0-7 46Z"
                                          stroke="currentColor"
                                          stroke-width="2"/>

                                    <rect x="49" y="72" width="62" height="39"
                                          rx="7" stroke="currentColor"
                                          stroke-width="2"/>

                                    <path d="m67 84 8 7-8 7M83 98h15"
                                          stroke="currentColor"
                                          stroke-width="2"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>

                                    <circle cx="125" cy="37" r="11"
                                            fill="currentColor"
                                            fill-opacity=".12"
                                            stroke="currentColor"/>
                                </svg>

                            <?php else: ?>

                                <svg viewBox="0 0 160 160" fill="none">
                                    <rect x="30" y="30" width="100" height="100"
                                          rx="18" stroke="currentColor"
                                          stroke-width="2"/>
                                    <path d="M55 80h50M80 55v50"
                                          stroke="currentColor"
                                          stroke-width="2.5"
                                          stroke-linecap="round"/>
                                </svg>

                            <?php endif; ?>

                        </div>

                        <span class="project-art-orbit project-art-orbit-one"></span>
                        <span class="project-art-orbit project-art-orbit-two"></span>

                        <span class="project-art-corner">↗</span>

                        <div class="project-art-bottom">
                            <span><?= e(strtoupper($project['status'])) ?></span>
                            <span>MRPYTHONIST / WORK</span>
                        </div>

                    </div>


                    <!-- INFORMATION -->
                    <div class="project-card-body">

                        <div class="project-card-meta">
                            <span class="project-card-category">
                                <?= e($project['status']) ?>
                            </span>

                            <span>PROJECT <?= sprintf('%02d', $index + 1) ?></span>
                        </div>

                        <h3 class="project-card-title">
                            <?= e($project['title']) ?>
                        </h3>

                        <p class="project-card-description">
                            <?= e($project['description']) ?>
                        </p>

                        <?php if (!empty($show_all) && !empty($project['detail'])): ?>
                            <p class="project-card-detail">
                                <?= e($project['detail']) ?>
                            </p>
                        <?php endif; ?>

                        <div class="project-tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span><?= e($tag) ?></span>
                            <?php endforeach; ?>
                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

        <?php if (empty($show_all)): ?>
            <div class="projects-bottom">
                <span>MORE WORK, MORE LEARNING.</span>
                <a href="/projects">VIEW ALL PROJECTS ↗</a>
            </div>
        <?php endif; ?>

    </div>
</section>