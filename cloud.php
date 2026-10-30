<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/breadcrumbs.php';
$trail = [['Home', '/'], ['Cloud & DevOps', null]];
$page = [
    'title' => 'Cloud & DevOps | Muhammad Aqib',
    'description' => 'Practical cloud and DevOps work by Muhammad Aqib: AWS, Linux, Docker, networking and infrastructure automation — production exposure plus structured hands-on learning.',
    'path' => '/cloud',
    'og_image' => '/assets/images/og-image.png',
    'og_image_alt' => 'Muhammad Aqib — Cloud & DevOps',
    'jsonld' => [breadcrumbs_jsonld($trail)],
];
$active = '';
require __DIR__ . '/includes/header.php';
render_breadcrumbs($trail);
?>
<section class="page-head" aria-labelledby="page-title">
  <div class="container narrow">
    <h1 id="page-title">Cloud &amp; DevOps</h1>
    <p class="lede">Production exposure, plus a structured lab where I learn the rest hands-on.</p>
  </div>
</section>
<section class="section" aria-label="Cloud and DevOps work">
  <div class="container narrow prose">
    <h2>Production exposure</h2>
    <ul>
      <li>Ubuntu EC2 hosts behind nginx running Laravel and Node.js services.</li>
      <li>PostgreSQL on AWS RDS; S3 for storage; IAM roles and policies in real systems.</li>
      <li>Docker for reproducible development environments.</li>
      <li>Production monitoring with Sentry and Mattermost; log-driven troubleshooting.</li>
      <li>This site itself: deployed and administered on LiteSpeed shared hosting via cPanel — DNS, HTTPS, file permissions and rewrite rules included.</li>
    </ul>
    <h2>Learning lab (in progress)</h2>
    <p>Alongside the job search I'm working through a hands-on cloud/DevOps roadmap, in this order:</p>
    <ol>
      <li><strong>Linux &amp; networking</strong> — processes, permissions, filesystems, shell scripting, DNS, TCP/IP, TLS, firewalls, SSH.</li>
      <li><strong>Docker &amp; CI/CD</strong> — multi-service Compose stacks, image best practices, GitHub Actions pipelines.</li>
      <li><strong>AWS</strong> — IAM, VPC, EC2, S3, RDS, ElastiCache, Route 53, CloudFront, ALB, Auto Scaling, CloudWatch, Secrets Manager, ECS.</li>
      <li><strong>Terraform</strong> — infrastructure as code for the AWS labs.</li>
      <li><strong>Observability &amp; Kubernetes</strong> — Prometheus, structured logging, then Kubernetes and Helm.</li>
    </ol>
    <p><em>The lab is presented as learning in progress — not production infrastructure. See the <a href="/projects/cloud-devops-lab">Cloud &amp; DevOps Lab project page</a> and related <a href="/tech-stack/aws">AWS</a>, <a href="/tech-stack/docker">Docker</a>, <a href="/tech-stack/linux">Linux</a> and <a href="/tech-stack/terraform">Terraform</a> pages.</em></p>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
