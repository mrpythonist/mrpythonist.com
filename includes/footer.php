<?php declare(strict_types=1); ?>
</main>
<footer class="site-footer">
  <div class="container footer-inner">
    <div>
      <p class="brand">mrpythonist</p>
      <p>Muhammad Aqib — Software Engineer, <?= e(LOCATION) ?>.</p>
      <p>&copy; <?= e((string) date('Y')) ?> Muhammad Aqib. All rights reserved.</p>
    </div>
    <nav aria-label="Footer">
      <ul class="footer-nav">
        <li><a href="/">Home</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="<?= e(GITHUB_URL) ?>" rel="me noopener">GitHub</a></li>
        <li><a href="<?= e(LINKEDIN_URL) ?>" rel="me noopener">LinkedIn</a></li>
      </ul>
    </nav>
  </div>
</footer>
<script src="<?= e(asset_url('js/main.js')) ?>" defer></script>
</body>
</html>
