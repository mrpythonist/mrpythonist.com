<?php
declare(strict_types=1);
$page = [
    'title' => 'Muhammad Aqib | Contact',
    'description' => 'Contact Muhammad Aqib, software engineer in Multan, Pakistan, via GitHub, LinkedIn or email.',
    'path' => '/contact',
];
$active = 'contact';
require __DIR__ . '/includes/header.php';
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container">
    <h1 id="page-title">Contact</h1>
  </div>
</section>
<?php require __DIR__ . '/includes/contact-section.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
