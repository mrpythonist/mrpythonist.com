<?php declare(strict_types=1); ?>

<section id="contact" class="section contact-section" aria-labelledby="contact-title">
  <div class="container">
    <div class="contact-shell">
      <div class="contact-decoration" aria-hidden="true">
        <span class="contact-orbit contact-orbit-one"></span>
        <span class="contact-orbit contact-orbit-two"></span>
        <span class="contact-decoration-cross">✳</span>
        <span class="contact-decoration-dot"></span>
      </div>

      <div class="contact-content">
        <p class="contact-eyebrow">
          <span class="contact-eyebrow-dot" aria-hidden="true"></span>
          HAVE A GOOD ONE IN MIND?
        </p>

        <h2 id="contact-title">
          Let's build
          <span>something meaningful.</span>
        </h2>

        <p class="contact-description">
          Have a project, an interesting engineering challenge, or an opportunity
          to work together? I'd love to hear what you're building.
        </p>

        <a class="contact-email-cta" href="mailto:<?= e(CONTACT_EMAIL) ?>">
          <span class="contact-cta-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none">
              <rect x="3" y="5" width="18" height="14" rx="2.5"
                stroke="currentColor" stroke-width="1.6"/>
              <path d="m4 7 8 6 8-6"
                stroke="currentColor" stroke-width="1.6"
                stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          <span class="contact-cta-copy">
            <span class="contact-cta-label">GET IN TOUCH</span>
            <span class="contact-cta-address"><?= e(CONTACT_EMAIL) ?></span>
          </span>
          <span class="contact-cta-arrow" aria-hidden="true">↗</span>
        </a>

        <div class="contact-divider" aria-hidden="true"></div>

        <div class="contact-links-heading">
          <span>ELSEWHERE ON THE INTERNET</span>
          <span class="contact-links-line" aria-hidden="true"></span>
        </div>

        <ul class="contact-links">
          <li>
            <a href="<?= e(GITHUB_URL) ?>" rel="me noopener noreferrer"
               target="_blank" aria-label="Visit mrpythonist on GitHub">
              <span class="contact-link-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 6v-3.9a3.4 3.4 0 0 0-.9-2.7c3-.3 6.2-1.5 6.2-6.7a5.2 5.2 0 0 0-1.4-3.6 4.8 4.8 0 0 0-.1-3.6S17.7 1.2 15 3.3a13 13 0 0 0-7 0C5.3 1.2 3.2 1.5 3.2 1.5a4.8 4.8 0 0 0-.1 3.6 5.2 5.2 0 0 0-1.4 3.6c0 5.2 3.2 6.4 6.2 6.7A3.4 3.4 0 0 0 7 18.1V22"
                    stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
              <span class="contact-link-copy">
                <strong>GitHub</strong>
                <span>Code & projects</span>
              </span>
              <span class="contact-link-arrow" aria-hidden="true">↗</span>
            </a>
          </li>

          <li>
            <a href="<?= e(LINKEDIN_URL) ?>" rel="me noopener noreferrer"
               target="_blank" aria-label="Visit mrpythonist on LinkedIn">
              <span class="contact-link-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M5 8.5V19M5 5v.1M10 19v-6a3 3 0 0 1 6 0v6m0-6v-1a3 3 0 0 1 6 0v7"
                    stroke="currentColor" stroke-width="1.7"
                    stroke-linecap="round" stroke-linejoin="round"/>
                  <rect x="2.5" y="2.5" width="19" height="19" rx="3"
                    stroke="currentColor" stroke-width="1.4"/>
                </svg>
              </span>
              <span class="contact-link-copy">
                <strong>LinkedIn</strong>
                <span>Professional network</span>
              </span>
              <span class="contact-link-arrow" aria-hidden="true">↗</span>
            </a>
          </li>
        </ul>

        <div class="contact-bottom">
          <span class="contact-location">
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z"
                stroke="currentColor" stroke-width="1.5"/>
              <circle cx="12" cy="10" r="2.2"
                stroke="currentColor" stroke-width="1.5"/>
            </svg>
            <?= e(LOCATION) ?>
          </span>

          <span class="contact-response-note">
            <span aria-hidden="true"></span>
            Open to meaningful conversations
          </span>
        </div>
      </div>
    </div>

    <p class="contact-footnote">
      Prefer a direct route? The email link opens your email app—no contact form,
      no fake submission, just a straightforward way to reach me.
    </p>
  </div>
</section>
