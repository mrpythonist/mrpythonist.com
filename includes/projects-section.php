<?php declare(strict_types=1);
// Expects $projects from data/portfolio.php. $show_all limits the home view.
$shown = ($show_all ?? false) ? $projects : array_slice($projects, 0, 3);
?>
<section id="projects" class="section" aria-labelledby="projects-title">
  <div class="container">
    <div class="section-head">
      <h2 id="projects-title">Featured Projects</h2>
      <?php if (empty($show_all)): ?><a class="section-link" href="/projects">View all &rarr;</a><?php endif; ?>
    </div>
    <div class="card-grid">
      <?php foreach ($shown as $project): ?>
      <article class="card">
        <div class="card-visual card-visual-<?= e($project['slug']) ?>" aria-hidden="true"><span><?= e($project['title']) ?></span></div>
        <h3><?= e($project['title']) ?></h3>
        <p><?= e($project['description']) ?></p>
        <?php if (!empty($show_all)): ?><p><?= e($project['detail']) ?></p><p class="card-status"><?= e($project['status']) ?></p><?php endif; ?>
        <ul class="tags" aria-label="Technologies">
          <?php foreach ($project['tags'] as $tag): ?><li><?= e($tag) ?></li><?php endforeach; ?>
        </ul>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
