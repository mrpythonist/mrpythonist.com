<?php
declare(strict_types=1);

// $page must be set by the calling page before including this file.
// $active: home | about | experience | tech-stack | projects | blog | contact
require_once __DIR__ . '/seo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php render_head($page); ?>
</head>
<body>
<a class="skip-link" href="#main">Skip to main content</a>

<header class="site-header">
  <div class="container header-inner">

    <a class="brand" href="/" aria-label="mrpythonist — home">
      <span class="brand-symbol" aria-hidden="true">
        <svg viewBox="0 0 40 40" fill="none">
          <rect x="1" y="1" width="38" height="38" rx="11"
            stroke="currentColor" stroke-opacity=".35"/>
          <path d="m14 14-6 6 6 6M26 14l6 6-6 6M23 11l-6 18"
            stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"/>
          <circle cx="31" cy="9" r="2" fill="#A55704"/>
        </svg>
      </span>

      <span class="brand-word">mrpythonist<span class="brand-period">.</span></span>
      <span class="brand-caption">ENGINEERING WITH INTENTION</span>
    </a>

    <nav class="site-nav" aria-label="Primary navigation">
      <button
        class="nav-toggle"
        type="button"
        aria-expanded="false"
        aria-controls="nav-list"
        aria-label="Open navigation menu">
        <span class="nav-toggle-label">Menu</span>
        <span class="nav-toggle-icon" aria-hidden="true">
          <span></span>
          <span></span>
        </span>
      </button>

      <ul id="nav-list" class="nav-list">
        <li>
          <a href="/"
   <?= ($active ?? '') === 'home' ? 'aria-current="location"' : '' ?>>
            <span>Home</span>
          </a>
        </li>
        <li><a href="/about"<?= ($active?? '') === 'about'? ' aria-current="page"': ''?>><span>About</span></a></li>
        <li><a href="/experience"<?= ($active?? '') === 'experience'? ' aria-current="page"': ''?>><span>Experience</span></a></li>
        <li><a href="/tech-stack"<?= ($active?? '') === 'tech-stack'? ' aria-current="page"': ''?>><span>Tech Stack</span></a></li>
        <li><a href="/projects"<?= ($active?? '') === 'projects'? ' aria-current="page"': ''?>><span>Projects</span></a></li>
        <li><a href="/blog"<?= ($active?? '') === 'blog'? ' aria-current="page"': ''?>><span>Blog</span></a></li>
          </ul>
    </nav>

    <a class="header-contact"
       href="/contact"
       <?= ($active ?? '') === 'contact' ? 'aria-current="page"' : '' ?>>
      <span>Let's talk</span>
      <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M5 12h14m-6-6 6 6-6 6"
          stroke="currentColor" stroke-width="1.7"
          stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>

  </div>
</header>

<main id="main">
