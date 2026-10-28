<?php declare(strict_types=1); ?>
<section id="contact" class="section" aria-labelledby="contact-title">
  <div class="container narrow">
    <h2 id="contact-title">Contact</h2>
    <p>Find me on GitHub and LinkedIn, or email me directly.</p>
    <ul class="contact-list">
      <li><a href="<?= e(GITHUB_URL) ?>" rel="me noopener">GitHub: mrpythonist</a></li>
      <li><a href="<?= e(LINKEDIN_URL) ?>" rel="me noopener">LinkedIn: mrpythonist</a></li>
      <li><a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a></li>
      <li><?= e(LOCATION) ?></li>
    </ul>
    <p class="note">No contact form is included on purpose: a form that does not actually deliver mail would be misleading. The email link above is the real route in.</p>
  </div>
</section>
