<?php declare(strict_types=1); // Expects $tech_stack. ?>
<section id="tech-stack" class="section section-alt" aria-labelledby="tech-title">
  <div class="container">
    <h2 id="tech-title">Tech Stack</h2>
    <ul class="stack-list">
      <?php foreach ($tech_stack as $tech): ?><li><?= e($tech) ?></li><?php endforeach; ?>
    </ul>
  </div>
</section>
