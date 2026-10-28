<?php
declare(strict_types=1);
// $page must be set by the calling page before including this file.
// $active is the current nav key: home | projects | contact.
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
    <a class="brand" href="/" aria-label="mrpythonist — home">mrpythonist</a>
    <nav class="site-nav" aria-label="Primary">
      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="nav-list">Menu</button>
      <ul id="nav-list" class="nav-list">
        <li><a href="/" <?= ($active ?? '') === 'home' ? 'aria-current="page"' : '' ?>>Home</a></li>
        <li><a href="/projects" <?= ($active ?? '') === 'projects' ? 'aria-current="page"' : '' ?>>Projects</a></li>
        <li><a href="/#tech-stack">Tech Stack</a></li>
        <li><a href="/#experience">Experience</a></li>
        <li><a href="/#about">About</a></li>
        <li><a href="/contact" <?= ($active ?? '') === 'contact' ? 'aria-current="page"' : '' ?>>Contact</a></li>
      </ul>
    </nav>
  </div>
</header>
<main id="main">
