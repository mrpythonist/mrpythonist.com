<?php declare(strict_types=1); // Expects $experience. ?>
<section id="experience" class="section" aria-labelledby="experience-title">
  <div class="container">
    <h2 id="experience-title">Experience</h2>
    <?php foreach ($experience as $job): ?>
    <article class="job">
      <p class="job-mark" aria-hidden="true">TD</p>
      <div>
        <h3><?= e($job['role']) ?> — <?= e($job['employer']) ?></h3>
        <p class="job-period"><?= e($job['period']) ?></p>
        <p><?= e($job['description']) ?></p>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
</section>
