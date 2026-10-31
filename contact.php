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


<?php require __DIR__ . '/includes/contact-section.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
