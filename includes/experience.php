<?php

declare(strict_types=1);

// Expects $experience from the portfolio data.
$experience = $experience ?? [];
?>

<section id="experience" class="section experience-section" aria-labelledby="experience-title">
  <div class="container">
    <div class="experience-layout">
      <div class="experience-intro">
        <p class="experience-eyebrow">
          <span class="experience-eyebrow-line" aria-hidden="true"></span>
          THE JOURNEY SO FAR
        </p>

        <h2 id="experience-title">
          Experience built
          <span>through impact.</span>
        </h2>

        <p class="experience-lead">
          Building, improving, and maintaining software that solves
          real problems in production.
        </p>

        <div class="experience-aside" aria-hidden="true">
          <span class="experience-aside-symbol">&ldquo;</span>
          <p>Good engineering is more than writing code. It’s making systems dependable.</p>
        </div>
      </div>

      <div class="experience-timeline">
        <?php if (!empty($experience)): ?>
          <?php foreach ($experience as $index => $job): ?>
            <article class="experience-item">
              <div class="experience-rail" aria-hidden="true">
                <span class="experience-rail-dot"></span>
                <?php if ($index < count($experience) - 1): ?>
                  <span class="experience-rail-line"></span>
                <?php endif; ?>
              </div>

              <div class="experience-card">
                <div class="experience-card-top">

                  <div class="experience-company-mark">
                    <?php if (!empty($job['logo'])): ?>
                      <img
                        src="<?= e($job['logo']) ?>"
                        alt="<?= e($job['employer'] ?? 'Company') ?> logo"
                        width="44"
                        height="44"
                        loading="lazy"
                        decoding="async">
                    <?php else: ?>
                      <span aria-hidden="true">
                        <?= e(strtoupper(substr((string) ($job['employer'] ?? 'EX'), 0, 1))) ?>
                      </span>
                      <span class="experience-mark-dot" aria-hidden="true"></span>
                    <?php endif; ?>
                  </div>


                  <span class="experience-period">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <rect x="3.5" y="5.5" width="17" height="15" rx="2"
                        stroke="currentColor" stroke-width="1.5" />
                      <path d="M7.5 3.5v4m9-4v4m-13 3h17"
                        stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" />
                    </svg>
                    <?= e($job['period'] ?? '') ?>
                  </span>
                </div>

                <p class="experience-company">
                  <?= e($job['employer'] ?? '') ?>
                </p>

                <h3 class="experience-role">
                  <?= e($job['role'] ?? '') ?>
                </h3>

                <div class="experience-card-divider" aria-hidden="true"></div>

                <p class="experience-description">
                  <?= e($job['description'] ?? '') ?>
                </p>

                <div class="experience-card-footer">
                  <span class="experience-footer-dot" aria-hidden="true"></span>
                  <span>Professional experience</span>
                  <span class="experience-card-number">
                    <?= sprintf('%02d', $index + 1) ?>
                  </span>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="experience-empty">Professional experience details are being updated.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>