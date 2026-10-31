<?php declare(strict_types=1); ?>
</main>

<footer class="site-footer" aria-label="Site footer">
  <div class="container">
    <div class="footer-main">
      <div class="footer-brand-block">
        <a class="footer-brand" href="/" aria-label="mrpythonist — back to home">
          <span class="footer-brand-mark" aria-hidden="true"><svg viewBox="0 0 40 40" fill="none">
          <rect x="1" y="1" width="38" height="38" rx="11"
            stroke="currentColor" stroke-opacity=".35"/>
          <path d="m14 14-6 6 6 6M26 14l6 6-6 6M23 11l-6 18"
            stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"/>
          <circle cx="31" cy="9" r="2" fill="#A55704"/>
        </svg></span>
          <span class="footer-brand-name">mrpythonist<span class="footer-brand-period">.</span></span>
        </a>

        <p class="footer-tagline">
          Thoughtful code.<br>
          <span>Reliable software.</span>
        </p>

        <p class="footer-description">
          Muhammad Aqib — Software Engineer based in <?= e(LOCATION) ?>,
          building modern applications and dependable backend systems.
        </p>

        <a class="footer-email-link" href="mailto:<?= e(CONTACT_EMAIL) ?>">
          <span class="footer-email-indicator" aria-hidden="true"></span>
          <span><?= e(CONTACT_EMAIL) ?></span>
          <span class="footer-email-arrow" aria-hidden="true">↗</span>
        </a>
      </div>

      <div class="footer-right">
        <div class="footer-nav-group">
          <p class="footer-label">EXPLORE</p>
          <nav aria-label="Footer navigation">
            <ul class="footer-nav">
              <li><a href="/"><span>Home</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/about"><span>About</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/experience"><span>Experience</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/tech-stack"><span>Tech stack</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/projects"><span>Projects</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/services"><span>Services</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/blog"><span>Blog</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/open-source"><span>Open source</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/resume"><span>Resume</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/contact"><span>Contact</span><span aria-hidden="true">↗</span></a></li>
            </ul>
          </nav>
        </div>

        <div class="footer-nav-group footer-social-group">
          <p class="footer-label">FIND ME ONLINE</p>
          <ul class="footer-nav footer-social-nav">
            <li>
              <a href="<?= e(GITHUB_URL) ?>" target="_blank" rel="me noopener noreferrer">
                <span class="footer-social-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 6v-3.9a3.4 3.4 0 0 0-.9-2.7c3-.3 6.1-1.5 6.1-6.7a5.2 5.2 0 0 0-1.4-3.6 4.8 4.8 0 0 0-.1-3.6s-1.2-.4-3.7 1.4a12.8 12.8 0 0 0-6.8 0C5.7 1.1 4.5 1.5 4.5 1.5a4.8 4.8 0 0 0-.1 3.6A5.2 5.2 0 0 0 3 8.7c0 5.2 3.1 6.4 6.1 6.7a3.4 3.4 0 0 0-.9 2.7V22" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </span>
                <span>GitHub</span>
                <span class="footer-link-arrow" aria-hidden="true">↗</span>
              </a>
            </li>
            <li>
              <a href="<?= e(LINKEDIN_URL) ?>" target="_blank" rel="me noopener noreferrer">
                <span class="footer-social-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M5 8.5V19M5 5v.1M10 19v-6.1a4 4 0 0 1 8 0V19M10 9v10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    <circle cx="5" cy="5" r="1.4" fill="currentColor"/>
                  </svg>
                </span>
                <span>LinkedIn</span>
                <span class="footer-link-arrow" aria-hidden="true">↗</span>
              </a>
            </li>
          </ul>

          <p class="footer-label footer-sub-label">ENGINEERING &amp; NOTES</p>
          <nav aria-label="Additional pages">
            <ul class="footer-nav">
              <li><a href="/cloud"><span>Cloud &amp; DevOps</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/certifications"><span>Certifications</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/engineering-principles"><span>Principles</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/uses"><span>Uses</span><span aria-hidden="true">↗</span></a></li>
              <li><a href="/now"><span>Now</span><span aria-hidden="true">↗</span></a></li>
            </ul>
          </nav>
          
        </div>
      </div>
    </div>

    <div class="footer-marquee" aria-hidden="true">
      <span>DESIGN WITH INTENT</span>
      <span class="footer-marquee-star">✳</span>
      <span>ENGINEER FOR RELIABILITY</span>
      <span class="footer-marquee-star">✳</span>
      <span>KEEP LEARNING</span>
      <span class="footer-marquee-star">✳</span>
    </div>

    <div class="footer-bottom">
      <p class="footer-copyright">
        &copy; <?= e((string) date('Y')) ?> Muhammad Aqib.
        <span>Built with care.</span>
      </p>

      <a class="footer-back-top" href="#top" aria-label="Back to top">
        <span>Back to top</span>
        <span class="footer-back-top-icon" aria-hidden="true">↑</span>
      </a>

      <p class="footer-location">
        <span class="footer-location-dot" aria-hidden="true"></span>
        <?= e(LOCATION) ?>
      </p>
    </div>
  </div>
</footer>

<script src="<?= e(asset_url('js/main.js')) ?>" defer></script>
<script src="https://unpkg.com/lucide@latest"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (window.lucide) {
        lucide.createIcons();
    }
});
</script>
</body>
</html>
