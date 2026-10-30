<?php
declare(strict_types=1);

// Extended project details for the /projects/{slug} pages.
// Base fields (title, description, detail, tags, status) live in
// data/portfolio.php; only verified extra content is added here.

// Block direct web access: this file is included by pages, never served.
if (($_SERVER['SCRIPT_FILENAME'] ?? '') !== '' && realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) {
    http_response_code(404);
    exit;
}

$project_details = [
    'food-delivery-system' => [
        'role' => 'Sole developer — architecture, backend, APIs, admin interface and customer app.',
        'features' => [
            'Laravel REST API with token authentication (Laravel Sanctum) and role-based access (Spatie Permission).',
            'PostgreSQL as the primary database with Redis for caching and queues.',
            'Next.js administration interface for managing restaurants, menus and orders.',
            'React Native (Expo) customer application with TypeScript.',
            'Real-time order updates planned via Laravel Reverb.',
            'Background jobs for notifications and order processing via Laravel Horizon.',
            'Docker-based development environment for a consistent setup.',
        ],
        'architecture' => 'A Laravel monolith serves the REST API and queue workers; PostgreSQL stores orders, menus and users while Redis backs caching, sessions and the Horizon queue. The Next.js admin and the React Native customer app are separate clients consuming the same API. Docker Compose keeps the local stack (PHP, PostgreSQL, Redis) reproducible.',
        'note' => 'This project is in active development. Repository and demo links are not published yet, and no performance or business metrics are claimed.',
    ],
    'backend-engineering-api-systems' => [
        'role' => 'Software Engineer — backend features, API integrations and production troubleshooting at TurboDebt.',
        'features' => [
            'REST API design and implementation in Laravel and Node.js/Express.',
            'Authentication and authorization: JWT, Laravel Sanctum, role-based access.',
            'Queue-based background processing with Redis-backed workers.',
            'Third-party integrations: Salesforce (token refresh, queue processing), Iterable, Ytel, Apten.',
            'Lead ingestion pipelines (TrustedForm, Jornaya) with validation.',
            'PostgreSQL on AWS RDS: schema design, queries, performance awareness.',
            'Production monitoring with Sentry and Mattermost alerts.',
        ],
        'architecture' => 'Production Laravel and Node.js services behind nginx on Ubuntu EC2, with PostgreSQL on RDS and Redis for queues and caching. External integrations run through queued jobs so third-party latency and failures never block web requests; Sentry and Mattermost surface errors and queue problems for fast response.',
        'note' => 'This page describes production experience across systems at TurboDebt (March 2023 – October 2026), not a single repository. No proprietary code or customer data is shared.',
    ],
    'cloud-devops-lab' => [
        'role' => 'Self-directed learning — Linux, networking, Docker, CI/CD, AWS and Terraform, in that order.',
        'features' => [
            'Linux fundamentals: processes, permissions, filesystems, shell scripting, SSH, logs.',
            'Networking: DNS, TCP/IP, HTTP/HTTPS, TLS, ports, routing, firewalls.',
            'Docker: images, Compose multi-service stacks, development environments.',
            'CI/CD: build, test and deploy pipelines with GitHub Actions.',
            'AWS: IAM, VPC, EC2, S3, RDS, CloudFront, Route 53, CloudWatch, Secrets Manager.',
            'Infrastructure as code with Terraform; containers with Kubernetes and Helm later.',
        ],
        'architecture' => 'A progression of labs rather than one system: hardened Linux hosts, containerized services with Docker Compose, automated pipelines, then the same workloads on AWS (VPC networking, EC2/ECS compute, RDS data, S3 storage, CloudFront delivery) with Terraform describing the infrastructure.',
        'note' => 'A structured learning lab following a 20-week cloud/DevOps roadmap alongside the job search. Presented as learning in progress — not production infrastructure and not a client project.',
    ],
];
