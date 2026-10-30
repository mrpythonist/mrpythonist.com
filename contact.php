<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';

session_start();

// Contact form handling: validates input, protects with a CSRF token and a
// honeypot, rate-limits submissions, and attempts delivery via PHP mail().
// If the server cannot deliver mail, the visitor is told to email directly
// instead of being shown a false success.
$form_state = null; // 'sent' | 'error' | 'invalid'
$form_errors = [];
$form_values = ['name' => '', 'email' => '', 'topic' => 'project', 'message' => ''];
$allowed_topics = [
    'project' => 'A project',
    'job' => 'A job opportunity',
    'collab' => 'Open source / collaboration',
    'other' => 'Something else',
];

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    $token_ok = isset($_POST['csrf'], $_SESSION['csrf']) && hash_equals((string) $_SESSION['csrf'], (string) $_POST['csrf']);
    $honeypot = trim((string) ($_POST['website'] ?? ''));
    $last_sent = (int) ($_SESSION['last_sent'] ?? 0);

    $form_values['name'] = trim((string) ($_POST['name'] ?? ''));
    $form_values['email'] = trim((string) ($_POST['email'] ?? ''));
    $topic_key = (string) ($_POST['topic'] ?? 'project');
    $form_values['topic'] = isset($allowed_topics[$topic_key]) ? $topic_key : 'project';
    $form_values['message'] = trim((string) ($_POST['message'] ?? ''));

    if (!$token_ok) {
        $form_errors[] = 'Security check failed. Please reload the page and try again.';
    }
    if ($honeypot !== '') {
        $form_errors[] = 'Spam detected. Your message was not sent.';
    }
    if ($last_sent > 0 && (time() - $last_sent) < 60) {
        $form_errors[] = 'Please wait a minute before sending another message.';
    }
    if (mb_strlen($form_values['name']) < 2 || mb_strlen($form_values['name']) > 100) {
        $form_errors[] = 'Please enter your name (2–100 characters).';
    }
    if (!filter_var($form_values['email'], FILTER_VALIDATE_EMAIL) || mb_strlen($form_values['email']) > 254) {
        $form_errors[] = 'Please enter a valid email address.';
    }
    if (mb_strlen($form_values['message']) < 10 || mb_strlen($form_values['message']) > 5000) {
        $form_errors[] = 'Please write a message between 10 and 5000 characters.';
    }

    if ($form_errors === []) {
        // Header-injection safety: the address passed validation above and
        // newlines are stripped before it touches any header.
        $reply_to = str_replace(["\r", "\n"], '', $form_values['email']);
        $topic_label = $allowed_topics[$form_values['topic']];
        $subject = 'Website contact [' . $topic_label . '] from ' . mb_substr($form_values['name'], 0, 80);
        $body = "Name: {$form_values['name']}\nEmail: {$reply_to}\nTopic: {$topic_label}\n\n{$form_values['message']}\n";
        $headers = [
            'From: mrpythonist.com contact form <noreply@' . SITE_DOMAIN . '>',
            'Reply-To: ' . $reply_to,
            'Content-Type: text/plain; charset=UTF-8',
            'X-Mailer: mrpythonist.com contact form',
        ];
        $sent = function_exists('mail') && mail(CONTACT_EMAIL, $subject, $body, implode("\r\n", $headers));
        if ($sent) {
            $_SESSION['last_sent'] = time();
            $form_state = 'sent';
            $form_values = ['name' => '', 'email' => '', 'topic' => 'project', 'message' => ''];
        } else {
            $form_state = 'error';
        }
    } else {
        $form_state = 'invalid';
    }
}

if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}

$trail = [['Home', '/'], ['Contact', null]];
$page = [
    'title' => 'Muhammad Aqib | Contact',
    'description' => 'Contact Muhammad Aqib, software engineer in Multan, Pakistan, via the contact form, email, GitHub or LinkedIn.',
    'path' => '/contact',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Contact',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = 'contact';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Contact</h1>
    <p class="lede">Have a project in mind, a role to discuss, or just want to talk engineering? Send a message.</p>
    <p style="margin-top:1.25rem;display:flex;gap:.75rem;flex-wrap:wrap">
      <a class="btn btn-primary" href="#send-message">Discuss a project</a>
      <a class="btn btn-secondary" href="mailto:<?= e(CONTACT_EMAIL) ?>">Email directly</a>
    </p>
  </div>
</section>
<section class="section" id="send-message" aria-label="Contact form">
  <div class="container narrow">
    <h2>Send a message</h2>
    <?php if ($form_state === 'sent'): ?>
      <p class="form-success" role="status">Thanks — your message was sent. I usually reply within a couple of days.</p>
    <?php elseif ($form_state === 'error'): ?>
      <p class="form-error" role="alert">The message could not be sent from the server. Please email me directly at <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a> instead — that always works.</p>
    <?php endif; ?>
    <?php if ($form_state === 'invalid'): ?>
      <div class="form-error" role="alert">
        <p>Please fix the following:</p>
        <ul>
          <?php foreach ($form_errors as $err): ?><li><?= e($err) ?></li><?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <form class="contact-form" method="post" action="/contact">
      <input type="hidden" name="csrf" value="<?= e((string) $_SESSION['csrf']) ?>">
      <p class="honeypot" aria-hidden="true">
        <label>Leave this empty <input type="text" name="website" value="" tabindex="-1" autocomplete="off"></label>
      </p>
      <p>
        <label for="cf-name">Name</label>
        <input id="cf-name" name="name" type="text" required maxlength="100" autocomplete="name" value="<?= e($form_values['name']) ?>">
      </p>
      <p>
        <label for="cf-email">Email</label>
        <input id="cf-email" name="email" type="email" required maxlength="254" autocomplete="email" value="<?= e($form_values['email']) ?>">
      </p>
      <p>
        <label for="cf-topic">I'm contacting about</label>
        <select id="cf-topic" name="topic">
          <?php foreach ($allowed_topics as $key => $label): ?>
            <option value="<?= e($key) ?>"<?= $form_values['topic'] === $key ? ' selected' : '' ?>><?= e($label) ?></option>
          <?php endforeach; ?>
        </select>
      </p>
      <p>
        <label for="cf-message">Message</label>
        <textarea id="cf-message" name="message" required rows="6" maxlength="5000"><?= e($form_values['message']) ?></textarea>
      </p>
      <p><button class="btn btn-primary" type="submit">Send message</button></p>
    </form>
  </div>
</section>
<?php require __DIR__ . '/includes/contact-section.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
