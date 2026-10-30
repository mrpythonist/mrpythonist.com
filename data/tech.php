<?php
declare(strict_types=1);

// Technology pages data. Experience levels are honest:
// 'production'  — used in production systems at TurboDebt.
// 'professional'— used in professional projects and production-adjacent work.
// 'familiarity' — working familiarity; not production depth.
// 'learning'    — currently learning through the cloud/DevOps roadmap.

// Block direct web access: this file is included by pages, never served.
if (($_SERVER['SCRIPT_FILENAME'] ?? '') !== '' && realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) {
    http_response_code(404);
    exit;
}

$tech_levels = [
    'production'   => 'Production experience',
    'professional' => 'Professional use',
    'familiarity'  => 'Working familiarity',
    'learning'     => 'Currently learning',
];

$tech_pages = [
    'php' => [
        'name' => 'PHP',
        'tagline' => 'Server-side language behind years of production backend work.',
        'level' => 'production',
        'summary' => 'PHP is the language I have the most production hours in. At TurboDebt I worked on Laravel applications and legacy PHP systems (including Laravel v2-era code), and my current food delivery platform is built on modern PHP with Laravel.',
        'points' => [
            'Production Laravel and legacy PHP maintenance at TurboDebt (March 2023 – October 2026).',
            'Modern PHP 8 features in current projects: strict types, attributes, enums.',
            'Composer dependency management and PSR standards.',
            'Debugging production PHP behind nginx on Ubuntu with Sentry error tracking.',
        ],
        'related_projects' => ['food-delivery-system', 'backend-engineering-api-systems'],
        'related_posts' => ['deploying-php-on-litespeed-shared-hosting', 'clean-urls-mod-rewrite-shared-hosting'],
    ],
    'laravel' => [
        'name' => 'Laravel',
        'tagline' => 'The framework I reach for for APIs and full-stack backends.',
        'level' => 'production',
        'summary' => 'Laravel is my primary backend framework: production APIs and integrations at TurboDebt, and the backbone of the food delivery system I am building now — Sanctum authentication, Spatie permissions, Horizon queues, Reverb real-time.',
        'points' => [
            'REST API design, routing, validation and API resources.',
            'Authentication with Laravel Sanctum; authorization with Spatie Permission.',
            'Queues and scheduled jobs with Redis and Laravel Horizon.',
            'Eloquent ORM, migrations and seeders on PostgreSQL.',
            'Third-party API integrations (Salesforce, Iterable, Ytel, Apten) behind queued jobs.',
            'PHPUnit testing for API endpoints.',
        ],
        'related_projects' => ['food-delivery-system', 'backend-engineering-api-systems'],
        'related_posts' => ['deploying-php-on-litespeed-shared-hosting'],
    ],
    'javascript' => [
        'name' => 'JavaScript',
        'tagline' => 'The language of the interfaces I build.',
        'level' => 'production',
        'summary' => 'JavaScript across the stack: React and Next.js frontends, Node.js backends, and the small vanilla script that powers this site\'s mobile navigation. Comfortable with modern syntax, async patterns and the DOM.',
        'points' => [
            'React and Next.js application development.',
            'Node.js and Express backend services.',
            'Async patterns: promises, async/await, event-driven code.',
            'Vanilla JavaScript for lightweight progressive enhancement (this site uses no frontend framework).',
        ],
        'related_projects' => ['food-delivery-system', 'backend-engineering-api-systems'],
        'related_posts' => [],
    ],
    'typescript' => [
        'name' => 'TypeScript',
        'tagline' => 'Types where they pay for themselves: APIs and app code.',
        'level' => 'professional',
        'summary' => 'I use TypeScript for the React Native customer app and Node.js services where static types catch real bugs — API contracts, domain models and shared types between client and server.',
        'points' => [
            'TypeScript in the React Native (Expo) customer app of the food delivery system.',
            'Typed Express services with interfaces for API contracts.',
            'Practical typing: strict enough to help, pragmatic enough to ship.',
        ],
        'related_projects' => ['food-delivery-system', 'backend-engineering-api-systems'],
        'related_posts' => [],
    ],
    'react' => [
        'name' => 'React',
        'tagline' => 'Component-driven interfaces, including React Native.',
        'level' => 'professional',
        'summary' => 'React for admin interfaces and React Native for the customer mobile app. I think in components, hooks and data flow, and keep state management boring and predictable.',
        'points' => [
            'React Native (Expo, TypeScript, Expo Router) customer application in the food delivery system.',
            'Admin interfaces with React, Vite and Material UI.',
            'Hooks, context and server-state patterns with TanStack Query.',
        ],
        'related_projects' => ['food-delivery-system'],
        'related_posts' => [],
    ],
    'nextjs' => [
        'name' => 'Next.js',
        'tagline' => 'React with routing, rendering control and performance defaults.',
        'level' => 'professional',
        'summary' => 'Next.js powers the administration interface of the food delivery system. I use the App Router, server components where they fit, and care about the performance defaults: code splitting, image optimization and sensible caching.',
        'points' => [
            'Next.js admin interface for the food delivery platform.',
            'App Router, server and client components, data fetching patterns.',
            'Performance awareness: bundle size, loading states, caching.',
        ],
        'related_projects' => ['food-delivery-system'],
        'related_posts' => [],
    ],
    'nodejs' => [
        'name' => 'Node.js',
        'tagline' => 'JavaScript on the server for APIs and tooling.',
        'level' => 'professional',
        'summary' => 'Node.js for Express APIs and for tooling — including a log anomaly detection service I built and open-sourced. Comfortable with the event loop, streams and the npm ecosystem.',
        'points' => [
            'Express REST APIs with validation, auth and structured logging.',
            'Log Anomaly Watcher: an open-source Node.js + TypeScript + Express service for detecting spikes and new signatures in log streams.',
            'Background workers and queue consumers.',
        ],
        'related_projects' => ['backend-engineering-api-systems'],
        'related_posts' => [],
    ],
    'express' => [
        'name' => 'Express',
        'tagline' => 'Minimal, explicit HTTP servers in Node.js.',
        'level' => 'professional',
        'summary' => 'Express is my default for Node.js HTTP services: thin route layers, middleware for cross-cutting concerns, and business logic kept out of the framework.',
        'points' => [
            'REST API structure: routers, middleware, error handling.',
            'JWT authentication middleware and request validation.',
            'Used in production-adjacent services and the open-source Log Anomaly Watcher.',
        ],
        'related_projects' => ['backend-engineering-api-systems'],
        'related_posts' => [],
    ],
    'postgresql' => [
        'name' => 'PostgreSQL',
        'tagline' => 'The relational database I trust with real data.',
        'level' => 'production',
        'summary' => 'PostgreSQL on AWS RDS in production at TurboDebt and as the primary store in the food delivery system. I design schemas, write careful queries and migrations, and think about indexes before performance becomes a problem.',
        'points' => [
            'Schema design, migrations and constraints.',
            'Query writing with joins, aggregations and performance awareness.',
            'PostgreSQL on AWS RDS in production; local PostgreSQL via Docker.',
            'Backups and point-in-time recovery concepts from production operations.',
        ],
        'related_projects' => ['food-delivery-system', 'backend-engineering-api-systems'],
        'related_posts' => [],
    ],
    'mongodb' => [
        'name' => 'MongoDB',
        'tagline' => 'Document database familiarity for the right-shaped data.',
        'level' => 'familiarity',
        'summary' => 'I have working familiarity with MongoDB — document modeling, CRUD and aggregation basics — from learning and personal projects. My production database experience is in PostgreSQL, which remains my default for relational data.',
        'points' => [
            'Document modeling and schema design trade-offs.',
            'CRUD operations and aggregation pipeline basics.',
            'Used in learning projects; not production depth.',
        ],
        'related_projects' => [],
        'related_posts' => [],
    ],
    'redis' => [
        'name' => 'Redis',
        'tagline' => 'Caching, queues and the fast layer in front of the database.',
        'level' => 'production',
        'summary' => 'Redis in production for queues and caching at TurboDebt, and in the food delivery system for the Horizon queue, caching and sessions. I treat Redis as infrastructure with eviction policies and failure modes, not magic.',
        'points' => [
            'Queue backends for Laravel Horizon and Node.js workers in production.',
            'Caching strategies: cache-aside patterns, TTLs, invalidation.',
            'Sessions and rate limiting use cases.',
        ],
        'related_projects' => ['food-delivery-system', 'backend-engineering-api-systems'],
        'related_posts' => [],
    ],
    'docker' => [
        'name' => 'Docker',
        'tagline' => 'Reproducible environments from laptop to server.',
        'level' => 'professional',
        'summary' => 'Docker for development environments: multi-service Compose stacks with PHP, PostgreSQL and Redis that new contributors can start with one command. Currently extending into production-style container workflows as part of the DevOps roadmap.',
        'points' => [
            'Docker Compose stacks for local development (PHP, PostgreSQL, Redis).',
            'Dockerfile authoring: multi-stage builds, layer caching, minimal images.',
            'Volumes, networks and environment configuration.',
        ],
        'related_projects' => ['food-delivery-system', 'cloud-devops-lab'],
        'related_posts' => [],
    ],
    'aws' => [
        'name' => 'AWS',
        'tagline' => 'Production exposure plus a structured learning path.',
        'level' => 'production',
        'summary' => 'Production exposure at TurboDebt — EC2, S3, RDS, IAM in real systems — combined with a structured roadmap now covering VPC networking, CloudFront, Route 53, CloudWatch, Secrets Manager and ECS in hands-on labs.',
        'points' => [
            'EC2 (Ubuntu + nginx), S3 and RDS in production environments.',
            'IAM: least-privilege roles and policies — the subject of an upcoming blog post.',
            'Learning labs: VPC, ALB, Auto Scaling, CloudFront, Route 53, CloudWatch, Secrets Manager, ECS.',
            'Cost awareness: free-tier discipline while learning.',
        ],
        'related_projects' => ['backend-engineering-api-systems', 'cloud-devops-lab'],
        'related_posts' => [],
    ],
    'linux' => [
        'name' => 'Linux',
        'tagline' => 'Where production actually runs.',
        'level' => 'production',
        'summary' => 'Ubuntu servers in production: deploying behind nginx, reading logs, managing permissions and SSH, and troubleshooting when things break at 2 AM. This site itself runs on LiteSpeed shared hosting, which I administer through cPanel.',
        'points' => [
            'Ubuntu server administration: users, permissions, services, systemd.',
            'nginx configuration and troubleshooting; LiteSpeed shared hosting in practice.',
            'Bash scripting for automation and log analysis.',
            'SSH, key management and secure access patterns.',
        ],
        'related_projects' => ['backend-engineering-api-systems', 'cloud-devops-lab'],
        'related_posts' => ['deploying-php-on-litespeed-shared-hosting', 'cpanel-file-manager-http-406-modsecurity'],
    ],
    'terraform' => [
        'name' => 'Terraform',
        'tagline' => 'Infrastructure as code — currently learning, deliberately.',
        'level' => 'learning',
        'summary' => 'Terraform is on my active learning roadmap, after Linux, networking, Docker and CI/CD. I am learning it to describe AWS infrastructure as versioned, reviewable code — not claiming production experience I do not have yet.',
        'points' => [
            'HCL syntax, resources, variables and outputs.',
            'State management concepts and remote backends.',
            'Learning goal: provision a VPC, EC2/RDS and supporting services from code.',
        ],
        'related_projects' => ['cloud-devops-lab'],
        'related_posts' => [],
    ],
];
