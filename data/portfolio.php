<?php
declare(strict_types=1);

// Structured content for the portfolio. No metrics, testimonials,
// awards, certifications or project URLs are claimed here — only
// the descriptions Aqib supplied in the project brief.

$projects = [
    [
        'slug' => 'food-delivery-system',
        'title' => 'Food Delivery System',
        'description' => 'Full-stack food delivery platform with a Laravel backend, a Next.js administration interface and a React Native customer application.',
        'detail' => 'Built around a Laravel backend with PostgreSQL and Redis. The administration interface is built with Next.js and the customer application with React Native. Docker is used for the development environment.',
        'tags' => ['Laravel', 'Next.js', 'React Native', 'PostgreSQL', 'Redis', 'Docker'],
        'status' => 'In development',
    ],
    [
        'slug' => 'backend-engineering-api-systems',
        'title' => 'Backend Engineering & API Systems',
        'description' => 'Backend architecture, API design, authentication, data handling and maintainable server-side systems.',
        'detail' => 'Focus on reliable backend systems: clear API design, authentication, sensible data handling and code that stays maintainable as it grows. This reflects production backend work rather than a single demo application.',
        'tags' => ['Node.js', 'Express', 'PostgreSQL', 'APIs'],
        'status' => 'Production experience',
    ],
    [
        'slug' => 'cloud-devops-lab',
        'title' => 'Cloud & DevOps Lab',
        'description' => 'Practical AWS, Linux, Docker, networking and infrastructure automation learning.',
        'detail' => 'Hands-on learning in cloud engineering and DevOps: AWS, Linux, Docker, networking and infrastructure automation. Presented honestly as a learning lab, not as a production application.',
        'tags' => ['AWS', 'Docker', 'Linux', 'Networking'],
        'status' => 'Learning lab',
    ],
];

$tech_stack = [
    'PHP', 'Laravel', 'JavaScript', 'TypeScript', 'React', 'Next.js',
    'Node.js', 'PostgreSQL', 'Redis', 'Docker', 'Linux', 'AWS',
];

$experience = [
    [
        'role' => 'Software Engineer',
        'employer' => 'TurboDebt',
        'period' => 'March 2023 – October 2026',
        'description' => 'Full-stack and backend engineering work on production systems, APIs and infrastructure.',
    ],
];
