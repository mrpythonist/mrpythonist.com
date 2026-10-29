<?php
declare(strict_types=1);

// Expects $tech_stack from the portfolio data.
$tech_stack = $tech_stack ?? [];
?>

<section id="tech-stack" class="section tech-section" aria-labelledby="tech-title">
  <div class="container">
    <div class="tech-layout">
      <div class="tech-intro">
        <p class="tech-eyebrow">
          <span class="tech-eyebrow-dot" aria-hidden="true"></span>
          THE TOOLS BEHIND THE WORK
        </p>

        <h2 id="tech-title">
          Built with the
          <span>right tools.</span>
        </h2>

        <p class="tech-description">
          A practical toolkit for building modern applications,
          reliable backends, and production-ready infrastructure.
        </p>

        <div class="tech-note">
          <span class="tech-note-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 3v3m0 12v3M3 12h3m12 0h3M5.64 5.64l2.12 2.12m8.48 8.48 2.12 2.12m0-12.72-2.12 2.12m-8.48 8.48-2.12 2.12"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.5"/>
            </svg>
          </span>
          <span>Tools matter. <strong>How you engineer with them matters more.</strong></span>
        </div>
      </div>

      <div class="tech-panel">
        <div class="tech-panel-header">
          <div>
            <span class="tech-panel-label">MY TOOLKIT</span>
            <p>Technologies I work with</p>
          </div>

          <span class="tech-panel-status">
            <span aria-hidden="true"></span>
            HANDS-ON
          </span>
        </div>

        <div class="tech-divider" aria-hidden="true"></div>

        <?php if (!empty($tech_stack)): ?>
          <ul class="tech-cloud" aria-label="Technologies and tools">
            <?php foreach ($tech_stack as $index => $tech): ?>
              <li
                class="tech-chip<?= $index % 4 === 0 ? ' tech-chip-featured' : '' ?>"
                style="--chip-index: <?= (int) $index ?>;"
              >
                <span class="tech-chip-marker" aria-hidden="true"></span>
                <span><?= e($tech) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php else: ?>
          <p class="tech-empty">My technology toolkit is being updated.</p>
        <?php endif; ?>

        <div class="tech-panel-footer">
          <span class="tech-footer-symbol" aria-hidden="true">↗</span>
          <span>Learning continuously. Engineering deliberately.</span>
          <span class="tech-footer-index">STACK / 01</span>
        </div>
      </div>
    </div>
  </div>
</section>
