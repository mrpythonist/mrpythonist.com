<?php declare(strict_types=1);

// Expects $projects from data/portfolio.php.
// Set $show_all = true to display every project.
$show_all = $show_all ?? false;
$shown = $show_all ? $projects : array_slice($projects, 0, 3);
?>

<section id="projects" class="section projects-section"
         aria-labelledby="projects-title">

  <div class="container">

    <div class="projects-heading">
      <div class="projects-heading-copy">
        <p class="projects-eyebrow">
          <span class="projects-eyebrow-line" aria-hidden="true"></span>
          SELECTED WORK
        </p>

        <h2 id="projects-title">
          Ideas into
          <span>engineered solutions.</span>
        </h2>

        <p class="projects-description">
          A selection of projects focused on solving real problems,
          building reliable systems, and engineering for growth.
        </p>
      </div>

      <?php if (empty($show_all)): ?>
        <a class="projects-view-all" href="/projects">
          <span>Explore all projects</span>
          <span class="projects-view-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M5 12h14m-6-6 6 6-6 6"
                stroke="currentColor" stroke-width="1.7"
                stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </a>
      <?php endif; ?>
    </div>

    <div class="projects-grid">

      <?php foreach ($shown as $index => $project): ?>
        <article class="project-card">

          <div class="project-art project-art-<?= e($project['slug']) ?>"
               aria-hidden="true">

            <div class="project-art-grid"></div>
            <div class="project-art-glow"></div>

            <span class="project-number">
              <?= sprintf('%02d', $index + 1) ?>
              <span>/ <?= sprintf('%02d', count($shown)) ?></span>
            </span>

            <div class="project-art-content">
              <span class="project-art-label">ENGINEERED PROJECT</span>
              <h3><?= e($project['title']) ?></h3>
            </div>

            <div class="project-art-symbol">
              <?php if ($project['slug'] === 'food-delivery-system'): ?>

                <svg viewBox="0 0 120 120" fill="none">
                  <path d="M24 49h72l-7 44H31l-7-44Z"
                    stroke="currentColor" stroke-width="2"/>
                  <path d="M43 49c0-11 7-19 17-19s17 8 17 19"
                    stroke="currentColor" stroke-width="2"
                    stroke-linecap="round"/>
                  <path d="M43 67h34M43 78h23"
                    stroke="currentColor" stroke-width="2"
                    stroke-linecap="round"/>
                  <circle cx="88" cy="31" r="12"
                    fill="currentColor" fill-opacity=".13"
                    stroke="currentColor" stroke-width="2"/>
                  <path d="m83 31 4 4 7-8"
                    stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

              <?php elseif ($project['slug'] === 'backend-engineering-api-systems'): ?>

                <svg viewBox="0 0 120 120" fill="none">
                  <rect x="24" y="24" width="72" height="72" rx="13"
                    stroke="currentColor" stroke-width="2"/>
                  <path d="m47 47-12 13 12 13M73 47l12 13-12 13M66 42l-12 36"
                    stroke="currentColor" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round"/>
                  <circle cx="91" cy="29" r="8"
                    fill="currentColor" fill-opacity=".14"
                    stroke="currentColor" stroke-width="2"/>
                </svg>

              <?php elseif ($project['slug'] === 'cloud-devops-lab'): ?>

                <svg viewBox="0 0 120 120" fill="none">
                  <path d="M36 77h49a17 17 0 0 0 0-34h-3a24 24 0 0 0-46-2
                    18 18 0 0 0 0 36Z"
                    stroke="currentColor" stroke-width="2"/>
                  <rect x="39" y="54" width="42" height="29" rx="5"
                    stroke="currentColor" stroke-width="2"/>
                  <path d="m51 64 6 5-6 5M62 74h8"
                    stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"/>
                  <circle cx="88" cy="29" r="9"
                    fill="currentColor" fill-opacity=".14"
                    stroke="currentColor" stroke-width="2"/>
                </svg>

              <?php else: ?>

                <svg viewBox="0 0 120 120" fill="none">
                  <rect x="25" y="25" width="70" height="70" rx="16"
                    stroke="currentColor" stroke-width="2"/>
                  <path d="M42 60h36M60 42v36"
                    stroke="currentColor" stroke-width="2"
                    stroke-linecap="round"/>
                  <circle cx="88" cy="32" r="8"
                    fill="currentColor" fill-opacity=".14"
                    stroke="currentColor" stroke-width="2"/>
                </svg>

              <?php endif; ?>
            </div>

            <span class="project-art-orbit project-art-orbit-one"></span>
            <span class="project-art-orbit project-art-orbit-two"></span>

            <span class="project-art-corner" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M7 17 17 7M7 7h10v10"
                  stroke="currentColor" stroke-width="1.7"
                  stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
          </div>

          <div class="project-card-body">

            <div class="project-card-topline">
              <span class="project-card-category">
                <?= e($project['status']) ?>
              </span>
              <span class="project-card-index">
                PROJECT <?= sprintf('%02d', $index + 1) ?>
              </span>
            </div>

            <h3 class="project-card-title">
              <?= e($project['title']) ?>
            </h3>

            <p class="project-card-description">
              <?= e($project['description']) ?>
            </p>

            <?php if (!empty($show_all)): ?>
              <p class="project-card-detail">
                <?= e($project['detail']) ?>
              </p>
            <?php endif; ?>

            <ul class="project-tags" aria-label="Technologies used">
              <?php foreach ($project['tags'] as $tag): ?>
                <li><?= e($tag) ?></li>
              <?php endforeach; ?>
            </ul>

          </div>
        </article>
      <?php endforeach; ?>

    </div>

    <?php if (empty($show_all)): ?>
      <div class="projects-bottom">
        <span class="projects-bottom-mark" aria-hidden="true">✳</span>
        <p>Thoughtful engineering. Practical solutions. Continuous improvement.</p>
        <a href="/projects">More of my work <span aria-hidden="true">↗</span></a>
      </div>
    <?php endif; ?>

  </div>
</section>
