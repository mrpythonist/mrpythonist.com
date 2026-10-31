<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [['Home', '/'], ['About', null]];

$page = [
  'title' => 'About Muhammad Aqib | Software Engineer',
  'description' => 'Meet Muhammad Aqib, a software engineer based in Pakistan specializing in full-stack development, backend systems and cloud infrastructure.',
  'path' => '/about',
  'og_image' => '/assets/images/og-image.png',
  'og_image_alt' => 'Muhammad Aqib — Software Engineer',
  'jsonld' => [breadcrumbs_jsonld($trail)],
];

$active = 'about';

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>

<main class="about-page">

  <!-- HERO -->
  <section class="about-hero section">
    <div class="container">

      <div class="about-hero-content">
        <span class="eyebrow">
          <span class="status-dot"></span>
          THE PERSON BEHIND THE CODE
        </span>

        <h1 id="page-title">
          Building software.<br>
          <span>Understanding</span><br>
          what makes it work.
        </h1>

        <p class="about-hero-description">
          I'm Muhammad Aqib — a software engineer passionate about
          building reliable applications, engineering backend systems
          and understanding the infrastructure behind them.
        </p>

        <div class="about-hero-meta">
          <span>
            <span class="meta-icon">⌖</span>
            Multan, Pakistan
          </span>
          <span class="meta-divider"></span>
          <span>Full-Stack / Backend Engineer</span>
        </div>

        <div class="about-hero-actions">
          <a href="/resume" class="btn btn-primary">
            Explore my resume <span>↗</span>
          </a>
          <a href="/contact" class="btn btn-secondary">
            Let's talk <span>→</span>
          </a>
        </div>
      </div>

      <div class="about-hero-aside">
        <div class="about-monogram">
          <img
            src="/assets/images/mrpythonist.png"
            alt="Muhammad Aqib — Software Engineer"
            class="about-profile-image"
            width="400"
            height="400"
            fetchpriority="high">
          <span class="monogram-dot"></span>
        </div>

        <div class="about-aside-caption">
          <span>SOFTWARE ENGINEER</span>
          <span>ENGINEERING WITH INTENTION.</span>
        </div>
      </div>

    </div>
  </section>


  <!-- INTRODUCTION -->
  <section class="section about-intro">
    <div class="container">

      <div class="about-section-label">
        <span>01 / INTRODUCTION</span>
        <span>A LITTLE ABOUT ME</span>
      </div>

      <div class="about-intro-grid">

        <div>
          <h2>
            I care about more than
            <span>making things work.</span>
          </h2>

          <div class="engineering-visual" aria-label="Engineering principles: clarity, reliability, and scalability">
            <svg viewBox="0 0 560 230" role="img" aria-labelledby="engineering-title">
              <title id="engineering-title">Engineering principles</title>

              <!-- Connecting lines -->
              <path d="M280 105 L115 48 M280 105 L445 48 M280 105 L280 195"
                fill="none" stroke="#A55704" stroke-width="1.5"
                stroke-dasharray="5 6" opacity=".65" />

              <!-- Central element -->
              <circle cx="280" cy="105" r="49" fill="#09251C" />
              <circle cx="280" cy="105" r="39" fill="none"
                stroke="#F3D2AF" stroke-opacity=".3" />
              <path d="M264 94 L251 105 L264 116 M296 94 L309 105 L296 116 M287 88 L273 122"
                fill="none" stroke="#F3D2AF" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round" />

              <!-- Clarity -->
              <circle cx="115" cy="48" r="25" fill="#F3D2AF" />
              <path d="M105 48 H125 M115 38 V58"
                stroke="#09251C" stroke-width="2" stroke-linecap="round" />
              <text x="115" y="13" text-anchor="middle">CLARITY</text>

              <!-- Reliability -->
              <circle cx="445" cy="48" r="25" fill="#F3D2AF" />
              <path d="M445 34 L457 40 V49 C457 57 450 62 445 65 C440 62 433 57 433 49 V40 Z"
                fill="none" stroke="#09251C" stroke-width="2" />
              <path d="M439 49 L443 53 L451 44"
                fill="none" stroke="#09251C" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" />
              <text x="445" y="13" text-anchor="middle">RELIABILITY</text>

              <!-- Scalability -->
              <circle cx="280" cy="195" r="25" fill="#F3D2AF" />
              <path d="M268 204 V193 H274 V204 M277 204 V185 H283 V204 M286 204 V177 H292 V204"
                fill="none" stroke="#09251C" stroke-width="2" />
              <text x="280" y="232" text-anchor="middle">SCALABILITY</text>

              <!-- Small accent -->
              <circle cx="280" cy="105" r="4" fill="#A55704" />
            </svg>
            <p>Thoughtful engineering, from the first line of code to production.</p>
          </div>

        </div>

        <div class="about-intro-copy prose">
          <p>
            I'm Muhammad Aqib, a software engineer based in Multan,
            Punjab, Pakistan. My work spans frontend applications,
            backend engineering, APIs, databases and infrastructure.
          </p>

          <p>
            I enjoy understanding how things work beneath the surface —
            how an API handles requests, how a database performs under
            pressure, how services communicate, and how infrastructure
            keeps everything running.
          </p>

          <p>
            I believe good engineering isn't about using the newest
            technology. It's about making thoughtful decisions,
            solving real problems and building systems that remain
            reliable as they grow.
          </p>
        </div>

      </div>
    </div>
  </section>


  <!-- EXPERIENCE -->
  <section class="section about-experience">
    <div class="container">

      <div class="about-section-label">
        <span>02 / EXPERIENCE</span>
        <span>WHERE I'VE WORKED</span>
      </div>

      <div class="about-experience-card">

        <div class="experience-card-top">
          <span class="experience-kicker">PROFESSIONAL EXPERIENCE</span>
          <span class="experience-period">MAR 2023 — OCT 2026</span>
        </div>

        <div class="experience-main">
          <div>
            <h2>TurboDebt</h2>
            <p class="experience-role">Software Engineer</p>
          </div>

          <span class="experience-arrow">
            <img src="/assets/images/turbo.png" alt="" aria-hidden="true">
            <span>↗</span>
          </span>
        </div>

        <p class="experience-description">
          Worked remotely with an international team, building
          and maintaining production software systems and backend
          services.
        </p>

        <div class="experience-divider"></div>

        <div class="experience-details">
          <div>
            <span class="detail-label">ENGINEERING</span>
            <p>Backend services, REST APIs and integrations</p>
          </div>

          <div>
            <span class="detail-label">SYSTEMS</span>
            <p>Queues, databases and application infrastructure</p>
          </div>

          <div>
            <span class="detail-label">ENVIRONMENT</span>
            <p>Remote · International team</p>
          </div>
        </div>

      </div>

      <p class="about-footnote">
        Three years of professional experience building and
        maintaining production applications.
      </p>

    </div>
  </section>


  <!-- PHILOSOPHY -->
  <section class="section about-philosophy">
    <div class="container">

      <div class="about-section-label">
        <span>03 / PHILOSOPHY</span>
        <span>HOW I APPROACH ENGINEERING</span>
      </div>

      <div class="philosophy-heading">
        <h2>
          Principles behind<br>
          <span>my engineering.</span>
        </h2>

        <p>
          The tools change. The principles that make software
          dependable shouldn't.
        </p>
      </div>

      <div class="philosophy-grid">

        <article class="philosophy-card">
          <div class="philosophy-vector vector-ai" aria-hidden="true">
            <svg viewBox="0 0 180 180" fill="none">
              <circle cx="90" cy="90" r="65" />
              <circle cx="90" cy="90" r="42" />
              <circle cx="90" cy="90" r="18" />
              <path d="M90 5V175M5 90H175M30 30L150 150M150 30L30 150" />
              <circle cx="90" cy="90" r="5" class="vector-dot" />
            </svg>
          </div>
          <span class="philosophy-number">01</span>
          <div class="philosophy-icon">✳</div>
          <h3>AI-enabled,<br>not AI-dependent.</h3>
          <p>
            I use AI tools to accelerate development, but I believe
            in understanding the code, validating decisions and
            taking responsibility for everything I ship.
          </p>
        </article>

        <article class="philosophy-card">
          <div class="philosophy-vector vector-architecture" aria-hidden="true">
            <svg viewBox="0 0 180 180" fill="none">
              <rect x="35" y="35" width="110" height="110" rx="8" />
              <rect x="55" y="55" width="70" height="70" rx="5" />
              <path d="M90 15V165M15 90H165M35 35L145 145M145 35L35 145" />
              <circle cx="90" cy="90" r="7" class="vector-dot" />
            </svg>
          </div>
          <span class="philosophy-number">02</span>
          <div class="philosophy-icon">⌘</div>
          <h3>Understand<br>before building.</h3>
          <p>
            I value fundamentals, clear architecture and deliberate
            technical decisions over blindly following trends
            or adding unnecessary complexity.
          </p>
        </article>

        <article class="philosophy-card">
          <div class="philosophy-vector vector-growth" aria-hidden="true">
            <svg viewBox="0 0 180 180" fill="none">
              <path d="M25 145L65 105L92 120L150 48" />
              <path d="M112 48H150V86" />
              <path d="M25 160H155M25 20V160" />
              <circle cx="65" cy="105" r="6" class="vector-dot" />
              <circle cx="92" cy="120" r="6" class="vector-dot" />
              <circle cx="150" cy="48" r="6" class="vector-dot" />
            </svg>
          </div>
          <span class="philosophy-number">03</span>
          <div class="philosophy-icon">↗</div>
          <h3>Build. Break.<br>Fix. Improve.</h3>
          <p>
            I learn through hands-on experimentation, debugging,
            documentation and continuously improving what I've built.
          </p>
        </article>

      </div>

    </div>
  </section>


  <!-- CURRENT FOCUS -->
  <section class="section about-current">
    <div class="container">

      <div class="about-section-label">
        <span>04 / RIGHT NOW</span>
        <span>WHAT I'M EXPLORING</span>
      </div>

      <div class="current-grid">

        <div class="current-heading">
          <span class="eyebrow">ALWAYS EVOLVING</span>
          <h2>
            Still curious.<br>
            <span>Always building.</span>
          </h2>

          <p>
            I'm expanding my engineering depth beyond application
            development and getting closer to the infrastructure
            that powers modern software.
          </p>

          <a href="/now" class="text-link">
            What I'm working on now <span>↗</span>
          </a>
        </div>

        <div class="current-focus-list">

          <div class="focus-item">
            <span class="focus-index">01</span>
            <div>
              <h3>Cloud & AWS</h3>
              <p>Cloud infrastructure, networking, IAM and AWS services.</p>
            </div>
            <span class="focus-symbol">↗</span>
          </div>

          <div class="focus-item">
            <span class="focus-index">02</span>
            <div>
              <h3>DevOps & Automation</h3>
              <p>Docker, CI/CD, Linux, Terraform and deployment workflows.</p>
            </div>
            <span class="focus-symbol">↗</span>
          </div>

          <div class="focus-item">
            <span class="focus-index">03</span>
            <div>
              <h3>Backend Engineering</h3>
              <p>Scalable APIs, database design and dependable services.</p>
            </div>
            <span class="focus-symbol">↗</span>
          </div>

          <div class="focus-item">
            <span class="focus-index">04</span>
            <div>
              <h3>Open Source</h3>
              <p>Learning from real-world codebases and contributing back.</p>
            </div>
            <span class="focus-symbol">↗</span>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- EDUCATION -->
  <section class="section about-education">
    <div class="container">

      <div class="about-section-label">
        <span>05 / EDUCATION</span>
        <span>THE FOUNDATION</span>
      </div>

      <div class="education-card">

        <div class="education-mark">
          <img src="/assets/images/comsats.png" alt="COMSATS University Islamabad logo">
        </div>

        <div class="education-content">
          <span class="education-label">ACADEMIC BACKGROUND</span>
          <h2>COMSATS University Islamabad</h2>
          <p>Bachelor of Science in Computer Science</p>
        </div>

        <div class="education-period">
          <span>2019 — 2023</span>
          <span>CGPA 2.96 / 4.00</span>
        </div>

      </div>
    </div>
  </section>


  <!-- FINAL CTA -->
  <section class="section about-cta">
    <div class="container">

      <div class="about-cta-inner">
        <span class="eyebrow">HAVE SOMETHING INTERESTING IN MIND?</span>

        <h2>
          Let's build something<br>
          <span>worth building.</span>
        </h2>

        <p>
          I'm open to remote software engineering opportunities,
          interesting technical challenges and meaningful
          collaborations.
        </p>

        <div class="about-cta-actions">
          <a href="/contact" class="btn btn-primary">
            Get in touch <span>↗</span>
          </a>
          <a href="/projects" class="btn btn-secondary">
            Explore my work <span>→</span>
          </a>
        </div>
      </div>

    </div>
  </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>