<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

$trail = [['Home', '/'], ['Open Source', null]];

$page = [
    'title' => 'Open Source | Muhammad Aqib',
    'description' => 'Explore open-source projects and contributions by Muhammad Aqib, including Log Anomaly Watcher and community documentation contributions.',
    'path' => '/open-source',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Open Source',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];

$active = '';

require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>

<section class="os-hero">
  <div class="container">

    <div class="os-hero-grid">

      <div class="os-hero-content">
        <span class="os-eyebrow">
          <span class="os-status-dot"></span>
          BUILDING IN PUBLIC
        </span>

        <h1>
          Open source.<br>
          <span>Shared progress.</span>
        </h1>

        <p>
          I believe good software gets better when knowledge is shared.
          I build practical tools, improve existing projects, and contribute
          to the developer community.
        </p>

        <div class="os-hero-actions">
          <a class="btn btn-primary"
             href="<?= e(GITHUB_URL) ?>"
             target="_blank"
             rel="me noopener">
            Explore my GitHub
            <span aria-hidden="true">↗</span>
          </a>

          <a href="#projects" class="os-text-link">
            Explore contributions <span>↓</span>
          </a>
        </div>

        <div class="os-hero-meta">
          <div class="os-meta-item">
            <span class="os-meta-icon">⌘</span>
            <span>Building useful tools</span>
          </div>
          <div class="os-meta-item">
            <span class="os-meta-icon">✳</span>
            <span>Contributing to community</span>
          </div>
        </div>
      </div>

      <div class="os-visual">
        <div class="os-visual-glow"></div>

        <div class="os-terminal">
          <div class="os-terminal-top">
            <div class="os-terminal-dots">
              <i></i><i></i><i></i>
            </div>
            <span>open-source.js</span>
            <span class="os-terminal-menu">···</span>
          </div>

          <div class="os-terminal-body">
            <div class="os-terminal-line">
              <span class="os-line-number">01</span>
              <span><b>const</b> developer = {</span>
            </div>
            <div class="os-terminal-line indent">
              <span class="os-line-number">02</span>
              <span>name: <em>'Muhammad Aqib'</em>,</span>
            </div>
            <div class="os-terminal-line indent">
              <span class="os-line-number">03</span>
              <span>focus: <em>'Open Source'</em>,</span>
            </div>
            <div class="os-terminal-line indent">
              <span class="os-line-number">04</span>
              <span>building: <em>'Useful software'</em>,</span>
            </div>
            <div class="os-terminal-line indent">
              <span class="os-line-number">05</span>
              <span>approach: <em>'Learn. Build. Share.'</em></span>
            </div>
            <div class="os-terminal-line">
              <span class="os-line-number">06</span>
              <span>};</span>
            </div>
            <div class="os-terminal-line os-terminal-output">
              <span class="os-line-number">07</span>
              <span> <i></i> Ready to contribute.</span>
            </div>
          </div>

          <div class="os-terminal-bottom">
            <span>NODE.JS</span>
            <span>TYPESCRIPT</span>
            <span>GITHUB</span>
          </div>
        </div>

        <div class="os-float-card os-float-top">
          <span class="os-float-symbol">✳</span>
          <div>
            <strong>Build together</strong>
            <small>Better through collaboration</small>
          </div>
        </div>

        <div class="os-float-card os-float-bottom">
          <span class="os-float-check">✓</span>
          <div>
            <strong>PR merged</strong>
            <small>Community contribution</small>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="os-section" id="projects">
  <div class="container">

    <div class="os-section-heading">
      <div>
        <span class="os-kicker">01 / SELECTED WORK</span>
        <h2>Projects & contributions<span>.</span></h2>
        <p>Tools I build and improvements I contribute to the ecosystem.</p>
      </div>
      <span class="os-heading-decoration">01 — 02</span>
    </div>

    <div class="os-project-grid">

      <article class="os-project os-project-featured">

        <div class="os-project-top">
          <span class="os-project-type">
            <span></span> PERSONAL PROJECT
          </span>
          <span class="os-project-number">01</span>
        </div>

        <div class="os-project-art">
          <div class="os-art-grid"></div>
          <div class="os-art-content">
            <div class="os-art-icon">
              <svg viewBox="0 0 48 48" fill="none" aria-hidden="true">
                <path d="M8 35V13M8 35H40" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M12 29L19 22L25 26L36 12" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="36" cy="12" r="3" fill="#A55704"/>
                <path d="M13 8H35" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" opacity=".4"/>
              </svg>
            </div>

            <div class="os-art-label">LOG MONITORING SYSTEM</div>
            <div class="os-art-title">Detect. Analyze.<br>Understand.</div>

            <div class="os-art-chart">
              <span style="height:30%"></span>
              <span style="height:45%"></span>
              <span style="height:35%"></span>
              <span style="height:65%"></span>
              <span style="height:48%"></span>
              <span style="height:85%"></span>
              <span style="height:55%"></span>
              <span style="height:100%"></span>
              <span style="height:68%"></span>
              <span style="height:42%"></span>
              <span style="height:75%"></span>
              <span style="height:50%"></span>
            </div>
          </div>
          <span class="os-art-corner">PROJECT / 001</span>
        </div>

        <div class="os-project-info">
          <div class="os-project-title-row">
            <h3>Log Anomaly Watcher</h3>
            <span class="os-project-badge">OPEN SOURCE</span>
          </div>

          <p>
            A lightweight log anomaly detection service built with
            Node.js and TypeScript. It ingests logs, fingerprints messages,
            and identifies spikes and new-signature anomalies using
            transparent, rule-based detection — no machine learning required.
          </p>

          <ul class="os-tags">
            <li>Node.js</li>
            <li>TypeScript</li>
            <li>Express</li>
            <li>PostgreSQL</li>
            <li>Docker</li>
          </ul>

          <a class="os-project-link"
             href="https://github.com/mrpythonist/log-anomaly-watcher"
             target="_blank"
             rel="noopener">
            <span>Explore repository</span>
            <span>↗</span>
          </a>
        </div>
      </article>

      <article class="os-project os-contribution">

        <div class="os-project-top">
          <span class="os-project-type">
            <span></span> COMMUNITY CONTRIBUTION
          </span>
          <span class="os-project-number">02</span>
        </div>

        <div class="os-contribution-art">
          <div class="os-pr-window">
            <div class="os-pr-window-top">
              <span>github.com</span>
              <span>↗</span>
            </div>

            <div class="os-pr-content">
              <div class="os-pr-icon">M</div>
              <div>
                <span class="os-pr-label">PULL REQUEST #447</span>
                <strong>Documentation improvement</strong>
                <small>markdown-reader</small>
              </div>
            </div>

            <div class="os-pr-divider"></div>

            <div class="os-pr-status">
              <span>✓</span>
              <div>
                <strong>Merged upstream</strong>
                <small>Issue #446 · Documentation</small>
              </div>
            </div>

            <div class="os-pr-lines">
              <i></i><i></i><i></i>
            </div>
          </div>

          <span class="os-art-corner">CONTRIBUTION / 001</span>
        </div>

        <div class="os-project-info">
          <div class="os-project-title-row">
            <h3>markdown-reader</h3>
            <span class="os-merged-badge">
              <span>✓</span> MERGED
            </span>
          </div>

          <p>
            Improved README documentation to make the project easier
            to understand and more approachable for new users.
            Submitted against issue #446 and merged upstream the same day.
          </p>

          <ul class="os-tags">
            <li>Documentation</li>
            <li>Markdown</li>
            <li>Git</li>
            <li>Collaboration</li>
          </ul>

          <a class="os-project-link"
             href="https://github.com/mrpythonist"
             target="_blank"
             rel="me noopener">
            <span>View GitHub profile</span>
            <span>↗</span>
          </a>
        </div>
      </article>

    </div>
  </div>
</section>

<section class="os-philosophy">
  <div class="container">
    <div class="os-philosophy-inner">

      <div class="os-philosophy-heading">
        <span class="os-kicker">02 / MY APPROACH</span>
        <h2>Contribute with<br><span>purpose.</span></h2>
      </div>

      <div class="os-philosophy-content">
        <p>
          I prefer meaningful, sustained contributions over drive-by commits.
          Before changing code, I take time to understand the architecture,
          conventions, and problems a project is trying to solve.
        </p>

        <div class="os-principles">
          <div class="os-principle">
            <span>01</span>
            <div>
              <strong>Understand first</strong>
              <small>Read the codebase, documentation, and existing discussions.</small>
            </div>
          </div>

          <div class="os-principle">
            <span>02</span>
            <div>
              <strong>Make it meaningful</strong>
              <small>Focus on useful fixes, tests, documentation, and features.</small>
            </div>
          </div>

          <div class="os-principle">
            <span>03</span>
            <div>
              <strong>Collaborate openly</strong>
              <small>Respect project conventions and take feedback seriously.</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="os-focus">
  <div class="container">
    <div class="os-focus-inner">
      <div>
        <span class="os-kicker">03 / WHAT'S NEXT</span>
        <h2>Currently exploring<span>.</span></h2>
        <p>
          My contribution track is focused on backend engineering
          and modern JavaScript ecosystems.
        </p>
      </div>

      <div class="os-focus-stack">
        <span>Next.js</span>
        <span>Node.js</span>
        <span>TypeScript</span>
        <span>Backend Systems</span>
        <span>Developer Tools</span>
      </div>
    </div>
  </div>
</section>

<section class="os-cta">
  <div class="container">
    <div class="os-cta-inner">
      <div class="os-cta-icon">
        <svg viewBox="0 0 48 48" fill="currentColor" aria-hidden="true">
          <path d="M24 3C12.4 3 3 12.4 3 24c0 9.3 6 17.2 14.3 20 .9.2 1.2-.4 1.2-.9v-3.2c-5.8 1.3-7-2.5-7-2.5-.9-2.4-2.3-3-2.3-3-1.9-1.3.1-1.3.1-1.3 2.1.1 3.2 2.2 3.2 2.2 1.9 3.2 4.9 2.3 6.1 1.8.2-1.4.7-2.3 1.2-2.8-4.6-.5-9.4-2.3-9.4-10.4 0-2.3.8-4.1 2.2-5.6-.2-.5-1-2.7.2-5.5 0 0 1.8-.6 5.8 2.1a20 20 0 0 1 10.5 0c4-2.7 5.8-2.1 5.8-2.1 1.2 2.8.4 5 .2 5.5a8 8 0 0 1 2.2 5.6c0 8.1-4.9 9.9-9.5 10.4.7.6 1.3 1.7 1.3 3.4v5.4c0 .5.3 1.1 1.2.9A21 21 0 0 0 45 24C45 12.4 35.6 3 24 3Z"/>
        </svg>
      </div>

      <span class="os-kicker">LET'S BUILD SOMETHING USEFUL</span>
      <h2>Good software is<br>better <span>together.</span></h2>
      <p>
        Explore my repositories, follow my work, or connect
        if you're building something interesting.
      </p>

      <a class="btn btn-primary"
         href="<?= e(GITHUB_URL) ?>"
         target="_blank"
         rel="me noopener">
        Find me on GitHub <span>↗</span>
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
