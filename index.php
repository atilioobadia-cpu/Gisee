<?php
function siteIcon(string $name): string
{
    $icons = [
        'arrow' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17L17 7M9 7h8v8"/></svg>',
        'chevron-down' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>',
        'search' => '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="7"></circle><path d="M20 20l-3.5-3.5"/></svg>',
        'spark' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l1.9 4.8L19 10l-5.1 2.2L12 17l-1.9-4.8L5 10l5.1-2.2L12 3z"/></svg>',
        'shield' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l7 3v5c0 4.9-3 8.8-7 10-4-1.2-7-5.1-7-10V6l7-3z"/></svg>',
        'code' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 4l-4 16"/></svg>',
        'support' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 13a8 8 0 1116 0M6 14v3a2 2 0 002 2h2v-6H8a2 2 0 00-2 2zm12 0a2 2 0 00-2-2h-2v6h2a2 2 0 002-2v-2z"/></svg>',
        'layers' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 4l8 4-8 4-8-4 8-4zm8 8l-8 4-8-4m16 4l-8 4-8-4"/></svg>',
        'mobile' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 3h8a2 2 0 012 2v14a2 2 0 01-2 2H8a2 2 0 01-2-2V5a2 2 0 012-2zm4 15h.01"/></svg>',
        'analytics' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 19V9M12 19V5M19 19v-7"/></svg>',
        'rocket' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 4c3 0 6 3 6 6-4.5 2.5-8.5 6.5-11 11-3 0-6-3-6-6 4.5-2.5 8.5-6.5 11-11zm-1 6l4 1-5 5-1-4 2-2z"/></svg>',
        'story' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 5h14v14H5zM8 9h8M8 13h6"/></svg>',
        'update' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 12a8 8 0 10-2.3 5.7M20 4v6h-6"/></svg>',
        'workflow' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 7h6v4H6zM12 9h6M18 9v4M12 17h6M6 13v4h6"/></svg>',
        'monitor' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16v10H4zM9 19h6"/></svg>',
        'cart' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h2l2.4 9h8.8l2.3-6H8.2M10 19a1 1 0 100 2 1 1 0 000-2zm7 0a1 1 0 100 2 1 1 0 000-2z"/></svg>',
        'play' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 6l10 6-10 6z"/></svg>',
        'cloud-sync' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 18H7a4 4 0 010-8 5.5 5.5 0 0110.7-1.5A3.5 3.5 0 0118 18h-1"/><path d="M12 8v9M8.5 13.5L12 17l3.5-3.5"/></svg>',
        'monitor-code' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16v10H4zM8 19h8M10 9l-2 2 2 2M14 9l2 2-2 2"/></svg>',
        'team-user' => '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="3.3"></circle><path d="M6 19v-1.3A4.7 4.7 0 0110.7 13h2.6A4.7 4.7 0 0118 17.7V19"/></svg>',
        'database-stack' => '<svg viewBox="0 0 24 24" aria-hidden="true"><ellipse cx="10" cy="6" rx="5" ry="2.5"></ellipse><path d="M5 6v4c0 1.4 2.2 2.5 5 2.5s5-1.1 5-2.5V6M5 10v4c0 1.4 2.2 2.5 5 2.5s5-1.1 5-2.5v-4M17 9h2.5M17 13h2.5M17 17h2.5"/></svg>',
        'qa-check' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h11v8H4zM8 19h3"/><circle cx="17.5" cy="10.5" r="3.5"></circle><path d="M20.3 13.3l1.7 1.7"/></svg>',
        'ai-brain' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 4a3 3 0 00-3 3v.5A3.5 3.5 0 004 11a3.5 3.5 0 002 3.5V15a3 3 0 003 3h1V4H9zM15 4a3 3 0 013 3v.5A3.5 3.5 0 0120 11a3.5 3.5 0 01-2 3.5V15a3 3 0 01-3 3h-1V4h1z"/><path d="M9.5 9.5h5M12 7v10"/></svg>',
        'signal-grid' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 8h12M6 12h12M6 16h8"/><path d="M6 5h12v14H6z"/></svg>',
        'data-flow' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 7h4v4H6zM14 13h4v4h-4z"/><path d="M10 9h4M12 9v4"/></svg>',
        'shield-check' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l7 3v5c0 4.9-3 8.8-7 10-4-1.2-7-5.1-7-10V6l7-3z"/><path d="M9.3 12.4l1.9 1.9 3.8-4"/></svg>',
        'network-nodes' => '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="6" cy="6" r="2"/><circle cx="18" cy="7" r="2"/><circle cx="8" cy="18" r="2"/><circle cx="18" cy="17" r="2"/><path d="M7.7 7.1l2.8 2.2M15.9 8l-3.2 2M9.7 16.3l2.6-2.2M16.1 15.8l-2.7-2"/></svg>',
        'server-rack' => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="4" width="14" height="5" rx="1.5"/><rect x="5" y="10" width="14" height="5" rx="1.5"/><rect x="5" y="16" width="14" height="4" rx="1.5"/><path d="M8 6.5h.01M8 12.5h.01M8 18h.01M12 6.5h5M12 12.5h5M12 18h5"/></svg>',
        'speed-gauge' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 16a7 7 0 1114 0"/><path d="M12 13l4-4"/><path d="M7 16h10"/><circle cx="12" cy="16" r="1.4"/></svg>',
        'browser-layout' => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 9h18M7 7h.01M10 7h.01"/><path d="M7 12h4v4H7zM14 12h3M14 15h3"/></svg>',
        'api-merge' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 7h4v4H7zM13 13h4v4h-4z"/><path d="M11 9h3a2 2 0 012 2v2M9 11v2a2 2 0 002 2h2"/><path d="M15 7h4v4"/></svg>',
        'design-pen' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 18h6"/><path d="M13 5l6 6"/><path d="M11 7l6 6"/><path d="M7 17l-1 3 3-1 9-9-2-2-9 9z"/><path d="M14 4l2-2 4 4-2 2"/></svg>',
        'user' => '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="3.3"></circle><path d="M5 19v-1.1A5.9 5.9 0 0110.9 12h2.2A5.9 5.9 0 0119 17.9V19"/></svg>',
        'mail' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 7h16v10H4z"/><path d="M4 8l8 6 8-6"/></svg>',
        'lock' => '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="6" y="11" width="12" height="9" rx="2"></rect><path d="M8.5 11V8.5a3.5 3.5 0 117 0V11"/></svg>',
        'facebook' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.4 21v-7.2h2.4l.4-2.9h-2.8V9.1c0-.8.2-1.5 1.4-1.5h1.5V5.1c-.3 0-1.1-.1-2.2-.1-2.2 0-3.7 1.3-3.7 3.8v2.1H8v2.9h2.4V21z" fill="currentColor" stroke="none"></path></svg>',
        'instagram' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.8 3h8.4A4.8 4.8 0 0121 7.8v8.4a4.8 4.8 0 01-4.8 4.8H7.8A4.8 4.8 0 013 16.2V7.8A4.8 4.8 0 017.8 3zm0 1.8A3 3 0 004.8 7.8v8.4a3 3 0 003 3h8.4a3 3 0 003-3V7.8a3 3 0 00-3-3zm8.9 1.3a1.1 1.1 0 110 2.2 1.1 1.1 0 010-2.2zM12 7.6A4.4 4.4 0 1112 16.4 4.4 4.4 0 0112 7.6zm0 1.8A2.6 2.6 0 1012 14.6 2.6 2.6 0 0012 9.4z" fill="currentColor" stroke="none"></path></svg>',
        'linkedin' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5.4 8.6A1.6 1.6 0 115.4 5.4a1.6 1.6 0 010 3.2zM4 10h2.8v10H4zm4.6 0h2.7v1.4h.1c.4-.7 1.3-1.7 3-1.7 3.2 0 3.8 2.1 3.8 4.9v5.4h-2.8v-4.8c0-1.2 0-2.6-1.6-2.6s-1.9 1.2-1.9 2.5v4.9H8.6z" fill="currentColor" stroke="none"></path></svg>',
        'x-social' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 4h3.6l3.9 5.3L16.8 4H20l-6 7 6.3 9H16.7l-4.2-5.9L7.4 20H4.1l6.5-7.4z" fill="currentColor" stroke="none"></path></svg>',
        'whatsapp' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 2.2C6.48 2.2 2.2 6.48 2.2 12s4.28 9.8 9.8 9.8 9.8-4.28 9.8-9.8S17.52 2.2 12 2.2zm4.38 12.84c-.18.5-.98 1.08-1.42 1.18-.42.1-.62.14-1.1-.14-.48-.28-1.98-1.18-2.31-1.32-.33-.14-.56-.2-.8.2-.24.4-.93 1.32-1.14 1.6-.21.28-.4.32-.82.12-.42-.2-1.77-.65-3.36-2.08-1.24-1.18-2.06-2.64-2.3-3.06-.24-.42-.03-.65.18-.86.18-.18.42-.48.62-.72.2-.24.26-.42.4-.7.14-.28.07-.52-.04-.72-.11-.2-1.1-2.65-1.5-3.63-.4-.96-.81-.83-1.1-.85-.28-.02-.6-.02-.92-.02-.3 0-.78.11-1.18.53-.39.42-1.48 1.45-1.48 3.53 0 2.08 1.51 4.1 1.72 4.38.2.28 3.06 4.75 7.42 6.65.52.23.93.36 1.25.46.52.17 1 0 1.38-.1.42-.12 1.32-.54 1.5-1.07.18-.53.18-1.03.13-1.13-.05-.1-.18-.17-.4-.28z"/></svg>',
    ];

    return $icons[$name] ?? '';
}

function technologyIconPath(string $file): string
{
    return 'images/tech-icons/' . rawurlencode($file);
}

$navItems = [
    ['label' => 'Home', 'href' => '#home', 'icon' => false],
    [
        'label' => 'Services',
        'href' => '#services',
        'icon' => true,
        'submenu' => [
            [
                'group' => 'Consulting',
                'items' => [
                    ['label' => 'IT Strategy', 'href' => '#services'],
                    ['label' => 'Security Audits', 'href' => '#services'],
                    ['label' => 'Cloud Migration', 'href' => '#services'],
                ],
            ],
            [
                'group' => 'Development',
                'items' => [
                    ['label' => 'Web Applications', 'href' => '#softwares'],
                    ['label' => 'Mobile App Dev', 'href' => '#softwares'],
                    ['label' => 'E-commerce Platforms', 'href' => '#softwares'],
                ],
            ],
            [
                'group' => 'Support',
                'items' => [
                    ['label' => 'Managed Services', 'href' => '#services'],
                    ['label' => 'Help Desk', 'href' => '#services'],
                    ['label' => 'Legacy System Maintenance', 'href' => '#services'],
                ],
            ],
            [
                'group' => 'More',
                'items' => [
                    ['label' => 'Enterprise Solutions', 'href' => '#services'],
                    ['label' => 'Startup Projects', 'href' => '#services'],
                    ['label' => 'E-commerce Successes', 'href' => '#services'],
                    ['label' => 'AI & ML Integrations', 'href' => '#services'],
                ],
            ],
        ],
    ],
    [
        'label' => 'Softwares',
        'href' => '#softwares',
        'icon' => true,
        'submenu' => [
            [
                'group' => 'Products',
                'items' => [
                    ['label' => 'Business Systems', 'href' => '#softwares'],
                    ['label' => 'Commerce Experiences', 'href' => '#softwares'],
                    ['label' => 'Analytics Dashboards', 'href' => '#softwares'],
                ],
            ],
        ],
    ],
    [
        'label' => 'Portfolio',
        'href' => '#portfolio',
        'icon' => true,
        'submenu' => [
            [
                'group' => 'Highlights',
                'items' => [
                    ['label' => 'Web Platforms', 'href' => '#portfolio'],
                    ['label' => 'Apps & Integrations', 'href' => '#portfolio'],
                    ['label' => 'Digital Launches', 'href' => '#portfolio'],
                ],
            ],
        ],
    ],
    ['label' => 'About Us', 'href' => '#about', 'icon' => true],
    ['label' => 'Shop', 'href' => '#shop', 'icon' => false],
];

$heroStats = [
    [
        'value' => 50,
        'suffix' => '+',
        'label' => 'Satisfied Clients',
    ],
    [
        'value' => 10,
        'suffix' => '+',
        'label' => 'Years Of Experience',
    ],
    [
        'value' => 150,
        'suffix' => '+',
        'label' => 'Successful Projects',
    ],
    [
        'value' => 65,
        'suffix' => '%',
        'label' => 'Senior Developers',
    ],
];

$typedWords = ['Security.', 'Technology.', 'Systems.', 'Assets.'];

$serviceOverviewModes = [
    [
        'id' => 'it-services',
        'label' => 'IT Services',
        'headline' => 'Reliable operational support for businesses that need security, uptime, and fast response across every day technology.',
        'items' => [
            [
                'title' => 'Managed IT Support',
                'text' => 'Service desk, end-user support, device setup, and proactive issue resolution.',
                'icon' => 'support',
            ],
            [
                'title' => 'Cloud & DevOps / SRE',
                'text' => 'Cloud delivery, CI/CD, infrastructure automation, and uptime-focused operations.',
                'icon' => 'cloud-sync',
            ],
            [
                'title' => 'Cybersecurity & Compliance',
                'text' => 'Access control, hardening, monitoring, and practical security governance.',
                'icon' => 'shield-check',
            ],
            [
                'title' => 'Infrastructure & Networks',
                'text' => 'Servers, office connectivity, wireless, VPNs, and resilient core systems.',
                'icon' => 'network-nodes',
            ],
            [
                'title' => 'Data, Backup & Recovery',
                'text' => 'Backup strategy, storage management, disaster recovery, and business continuity.',
                'icon' => 'server-rack',
            ],
            [
                'title' => 'Monitoring & Performance',
                'text' => 'Observability, alerts, system health reviews, and ongoing optimization.',
                'icon' => 'speed-gauge',
            ],
        ],
    ],
    [
        'id' => 'software-development',
        'label' => 'Software Development',
        'headline' => 'Custom software and digital products built around the way your business actually works, not off-the-shelf assumptions.',
        'items' => [
            [
                'title' => 'Custom Web & SaaS Platforms',
                'text' => 'Web apps, SaaS tools, portals, and internal systems tailored to your workflow.',
                'icon' => 'browser-layout',
            ],
            [
                'title' => 'ERP, CRM & Business Systems',
                'text' => 'Operational software that connects teams, approvals, reporting, and process control.',
                'icon' => 'workflow',
            ],
            [
                'title' => 'API Integrations & Automation',
                'text' => 'Secure integrations between business tools, finance systems, CRMs, and external services.',
                'icon' => 'api-merge',
            ],
            [
                'title' => 'UI/UX & Product Design',
                'text' => 'Interfaces designed for adoption, clarity, conversion, and easier daily use.',
                'icon' => 'design-pen',
            ],
            [
                'title' => 'QA, Testing & Optimization',
                'text' => 'Structured testing, release confidence, performance tuning, and bug prevention.',
                'icon' => 'qa-check',
            ],
            [
                'title' => 'Maintenance & Ongoing Development',
                'text' => 'Enhancements, fixes, feature expansion, and long-term software support.',
                'icon' => 'update',
            ],
        ],
    ],
];

$services = [
    [
        'title' => 'General IT Services',
        'text' => 'Infrastructure support, networking, managed security, cloud guidance, and day-to-day IT operations that keep teams productive.',
        'icon' => 'shield',
    ],
    [
        'title' => 'Custom Software Delivery',
        'text' => 'Web applications, ERP systems, portals, and internal tools designed around the way your business actually works.',
        'icon' => 'code',
    ],
    [
        'title' => 'Product Care',
        'text' => 'Performance reviews, bug fixing, analytics, content updates, and ongoing optimization after launch so your platform keeps improving.',
        'icon' => 'support',
    ],
];

$softwareShowcase = [
    [
        'title' => 'Business systems',
        'text' => 'Operations, reporting, and workflow automation that reduce manual work.',
        'icon' => 'layers',
    ],
    [
        'title' => 'Commerce experiences',
        'text' => 'Storefronts and service flows that convert smoothly on desktop and mobile.',
        'icon' => 'mobile',
    ],
    [
        'title' => 'Analytics dashboards',
        'text' => 'Clear visual reporting that helps leaders act faster and with confidence.',
        'icon' => 'analytics',
    ],
];

$technologyLanes = [
    [
        'direction' => 'rtl',
        'duration' => '88s',
        'delay' => '-11s',
        'items' => [
            ['name' => 'Vue.js', 'icon' => 'vuejs.svg', 'soft' => 'rgba(66, 184, 131, 0.18)'],
            ['name' => 'React', 'icon' => 'react.svg', 'soft' => 'rgba(97, 218, 251, 0.18)'],
            ['name' => 'Svelte', 'icon' => 'svelte.svg', 'soft' => 'rgba(255, 90, 31, 0.18)'],
            ['name' => 'Next.js', 'icon' => 'nextjs.svg', 'soft' => 'rgba(17, 17, 17, 0.08)'],
            ['name' => 'Nuxt', 'icon' => 'nuxt.svg', 'soft' => 'rgba(0, 220, 130, 0.18)'],
            ['name' => 'Flutter', 'icon' => 'flutter.svg', 'soft' => 'rgba(71, 197, 251, 0.18)'],
        ],
    ],
    [
        'direction' => 'ltr',
        'duration' => '101s',
        'delay' => '-37s',
        'items' => [
            ['name' => 'MySQL', 'icon' => 'mysql.svg', 'soft' => 'rgba(68, 121, 161, 0.18)'],
            ['name' => 'Node.js', 'icon' => 'nodejs.svg', 'soft' => 'rgba(95, 160, 78, 0.18)'],
            ['name' => 'Python', 'icon' => 'python.svg', 'soft' => 'rgba(55, 118, 171, 0.18)'],
            ['name' => 'PHP', 'icon' => 'php.svg', 'soft' => 'rgba(119, 123, 180, 0.18)'],
            ['name' => 'Java', 'icon' => 'java.svg', 'soft' => 'rgba(248, 0, 0, 0.12)'],
            ['name' => 'C#', 'icon' => 'csharp.svg', 'soft' => 'rgba(155, 79, 150, 0.15)'],
        ],
    ],
    [
        'direction' => 'rtl',
        'duration' => '114s',
        'delay' => '-63s',
        'items' => [
            ['name' => 'Google Cloud', 'icon' => 'googlecloud.svg', 'soft' => 'rgba(66, 133, 244, 0.18)'],
            ['name' => 'Docker', 'icon' => 'docker.svg', 'soft' => 'rgba(36, 150, 237, 0.18)'],
            ['name' => 'Kubernetes', 'icon' => 'kubernetes.svg', 'soft' => 'rgba(50, 108, 229, 0.18)'],
            ['name' => 'Linux', 'icon' => 'linux.svg', 'soft' => 'rgba(17, 17, 17, 0.08)'],
            ['name' => 'WordPress', 'icon' => 'wordpress.svg', 'soft' => 'rgba(33, 117, 155, 0.18)'],
            ['name' => 'Metabase', 'icon' => 'metabase.svg', 'soft' => 'rgba(80, 158, 227, 0.18)'],
        ],
    ],
];

$technologyMarqueeCopies = 7;

$mediaCards = [
    [
        'title' => 'Launch Coverage',
        'text' => 'Campaign visuals, launch pages, and supporting digital assets that make a new release feel complete.',
        'icon' => 'rocket',
    ],
    [
        'title' => 'Brand Storytelling',
        'text' => 'Short-form media and polished content blocks that help your company explain value clearly.',
        'icon' => 'story',
    ],
    [
        'title' => 'Technical Updates',
        'text' => 'Service notices, product enhancements, and customer-facing updates presented with a more professional voice.',
        'icon' => 'update',
    ],
];

$transformationPoints = [
    ['label' => 'Modernization strategy', 'icon' => 'layers'],
    ['label' => 'Workflow solutions', 'icon' => 'workflow'],
    ['label' => 'Secure delivery', 'icon' => 'shield'],
];

$footerServices = [
    'Managed IT Support',
    'Cloud & DevOps',
    'Custom Software',
    'Cybersecurity',
];

$footerTechnologies = [
    'React & Vue',
    'Node.js & PHP',
    'Docker & Kubernetes',
    'Google Cloud & Linux',
];

$footerLegalLinks = [
    ['label' => 'About Us', 'href' => '#about'],
    ['label' => 'Services', 'href' => '#services'],
    ['label' => 'Privacy Policy', 'href' => '#home'],
];

$footerSocialLinks = [
    ['label' => 'Facebook', 'href' => 'https://www.facebook.com/', 'icon' => 'facebook'],
    ['label' => 'Instagram', 'href' => 'https://www.instagram.com/', 'icon' => 'instagram'],
    ['label' => 'LinkedIn', 'href' => 'https://www.linkedin.com/', 'icon' => 'linkedin'],
    ['label' => 'X', 'href' => 'https://x.com/', 'icon' => 'x-social'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gisee Infotech | General IT Services &amp; Software Development</title>
    <meta
        name="description"
        content="Gisee Infotech builds polished digital platforms, IT services, and custom software with an owner-level mindset."
    >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="images/giseepng.png">
    <link rel="shortcut icon" type="image/png" href="images/giseepng.png">
</head>
<body>
    <div class="site-shell">
        <header class="topbar">
            <a class="brand" href="#home" aria-label="Gisee Infotech home">
                <img src="images/giseepng.png" alt="Gisee logo" class="logo-image" width="150" height="44">
            </a>

            <div class="nav-panel">
                <nav class="nav-links" id="primary-navigation" aria-label="Primary navigation">
                    <?php foreach ($navItems as $item): ?>
                        <div class="nav-item">
                            <a class="nav-link" href="<?= $item['href'] ?>">
                                <span><?= $item['label'] ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </nav>
            </div>

            <div class="nav-tools" aria-label="Navigation tools">
                <button class="header-contact-pill" type="button" data-contact-open>
                    <span>Contact us</span>
                    <span class="header-contact-badge icon-inline"><?= siteIcon('arrow') ?></span>
                </button>
                <button
                    class="mobile-menu-toggle nav-tool menu-tool"
                    type="button"
                    aria-label="Open navigation"
                    aria-expanded="false"
                    aria-controls="primary-navigation"
                >
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>

        <main>
            <section class="hero showcase-hero" id="home">
                <div class="hero-showcase">
                    <div class="hero-artboard" aria-hidden="true">
                        <span class="art-square art-square-1"></span>
                        <span class="art-square art-square-2"></span>
                        <span class="art-square art-square-3"></span>
                        <span class="art-square art-square-4"></span>
                        <span class="art-square art-square-5"></span>
                        <span class="art-square art-square-6"></span>
                        <span class="art-square art-square-7"></span>
                        <span class="art-square art-square-8"></span>
                        <span class="art-square art-square-9"></span>
                        <span class="art-square art-square-10"></span>

                        <div class="art-card art-card-intro">
                            <div class="intro-card-shell">
                                <span class="intro-card-orbit intro-card-orbit-1"></span>
                                <span class="intro-card-orbit intro-card-orbit-2"></span>
                                <span class="intro-card-icon icon-inline"><?= siteIcon('team-user') ?></span>
                            </div>
                        </div>

                        <div class="art-connector art-connector-top"></div>

                        <div class="art-card art-card-device">
                            <div class="device-surface">
                                <div class="device-icon icon-inline"><?= siteIcon('shield') ?></div>
                            </div>
                        </div>

                        <div class="art-card art-card-profile">
                            <div class="profile-metric">
                                <strong>68K+</strong>
                                <span>28% &uarr;</span>
                            </div>
                            <div class="profile-silhouette"></div>
                        </div>

                        <div class="mini-chip mini-chip-gold">
                            <span class="icon-inline"><?= siteIcon('spark') ?></span>
                        </div>

                        <div class="art-connector art-connector-bottom"></div>

                        <div class="art-card art-card-chip">
                            <div class="chip-graphic">
                                <div class="chip-core"></div>
                            </div>
                        </div>

                        <div class="mini-chip mini-chip-dark">
                            <span class="icon-inline"><?= siteIcon('workflow') ?></span>
                        </div>

                        <div class="mini-chip mini-chip-accent">
                            <span class="icon-inline"><?= siteIcon('analytics') ?></span>
                        </div>
                    </div>

                    <div class="hero-summary-main">
                        <h1>
                            <span>Future Through</span>
                            <span>Cutting-Edge</span>
                            <span>Assets.</span>
                        </h1>
                        <p class="hero-text">
                            By empowering users with greater control over their data, identity, and assets.
                        </p>

                        <div class="hero-actions hero-actions-compact">
                            <button class="cta-pill cta-primary" type="button" data-contact-open>
                                <span>Get In Touch</span>
                                <span class="contact-pill-badge icon-inline"><?= siteIcon('arrow') ?></span>
                            </button>
                            <a class="inline-link" href="#auth" data-auth-open="signin">
                                <span>Log In</span>
                                <span class="icon-inline"><?= siteIcon('arrow') ?></span>
                            </a>
                        </div>
                    </div>

                    <div class="hero-stats">
                        <?php foreach ($heroStats as $stat): ?>
                            <article class="hero-stat">
                                <strong
                                    class="count-number"
                                    data-target="<?= $stat['value'] ?>"
                                    data-suffix="<?= $stat['suffix'] ?>"
                                >0</strong>
                                <span><?= $stat['label'] ?></span>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="content-section services-overview-section" id="services">
                <div class="services-overview-shell" data-reveal>
                    <div class="section-intro services-overview-intro">
                        <p class="eyebrow">WHAT WE DO</p>
                        <h2><span>Gisee</span> <em>services</em></h2>
                        <p class="services-overview-copy">
                            We cover both IT operations and software delivery, giving businesses one accountable
                            team for infrastructure, security, engineering, design, and long-term support.
                        </p>
                    </div>

                    <div class="services-mode-switch" role="tablist" aria-label="Service categories">
                        <?php foreach ($serviceOverviewModes as $index => $mode): ?>
                            <button
                                class="services-mode-tab<?= $index === 0 ? ' is-active' : '' ?>"
                                type="button"
                                role="tab"
                                data-service-tab="<?= $mode['id'] ?>"
                                aria-selected="<?= $index === 0 ? 'true' : 'false' ?>"
                            >
                                <?= $mode['label'] ?>
                            </button>
                        <?php endforeach; ?>
                    </div>

                    <?php foreach ($serviceOverviewModes as $index => $mode): ?>
                        <div
                            class="services-mode-panel<?= $index === 0 ? ' is-active' : '' ?>"
                            data-service-panel="<?= $mode['id'] ?>"
                            role="tabpanel"
                            <?= $index === 0 ? '' : 'hidden' ?>
                        >
                            <p class="services-mode-copy"><?= $mode['headline'] ?></p>

                            <div class="services-mode-grid">
                                <?php foreach ($mode['items'] as $item): ?>
                                    <article class="service-mode-card" data-service-motion>
                                        <div class="service-mode-visual" aria-hidden="true">
                                            <span class="service-mode-orb service-mode-orb-a"></span>
                                            <span class="service-mode-orb service-mode-orb-b"></span>
                                            <span class="service-mode-icon icon-inline"><?= siteIcon($item['icon']) ?></span>
                                        </div>
                                        <h3><?= $item['title'] ?></h3>
                                        <p><?= $item['text'] ?></p>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="content-section transformation-section" id="transformation">
                <div class="transform-card" data-reveal>
                    <div class="transform-content">
                        <p class="eyebrow eyebrow-light">DIGITAL TRANSFORMATION</p>
                        <h2>Accelerating Digital Transformation</h2>
                        <p>
                            We specialize in transforming businesses through modernization, digital technology
                            adoption, and innovative workflow solutions.
                        </p>

                        <a class="cta-pill transform-button" href="#services">
                            <span>Learn more</span>
                            <span class="contact-pill-badge icon-inline"><?= siteIcon('play') ?></span>
                        </a>

                        <div class="transform-points">
                            <?php foreach ($transformationPoints as $point): ?>
                                <div class="transform-point">
                                    <span class="mini-icon icon-inline"><?= siteIcon($point['icon']) ?></span>
                                    <span><?= $point['label'] ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content-section" id="delivery">
                <div class="section-intro" data-reveal>
                    <p class="eyebrow">DELIVERY</p>
                    <h2>Modern delivery for businesses that want design, engineering, and IT aligned.</h2>
                </div>

                <div class="card-grid services-grid">
                    <?php foreach ($services as $service): ?>
                        <article class="service-card" data-reveal>
                            <span class="card-icon icon-inline"><?= siteIcon($service['icon']) ?></span>
                            <h3><?= $service['title'] ?></h3>
                            <p><?= $service['text'] ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="content-section showcase-section" id="softwares">
                <div class="showcase-copy" data-reveal>
                    <p class="eyebrow">SOFTWARES</p>
                    <h2>Software experiences that feel clean, fast, and ready for real business use.</h2>
                    <p>
                        We build systems that do more than look modern. They reduce friction, support teams, and
                        create trust with customers through performance, structure, and clarity.
                    </p>
                </div>

                <div class="showcase-panel" data-reveal>
                    <div class="showcase-screen">
                        <div class="screen-bar"></div>
                        <div class="screen-grid">
                            <?php foreach ($softwareShowcase as $item): ?>
                                <div class="screen-tile">
                                    <span class="card-icon icon-inline"><?= siteIcon($item['icon']) ?></span>
                                    <strong><?= $item['title'] ?></strong>
                                    <span><?= $item['text'] ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content-section technologies-section" id="technologies">
                <div class="technologies-shell" data-reveal>
                    <div class="section-intro technologies-intro">
                        <h2>Technologies</h2>
                        <p class="technologies-copy">Tools we use.</p>
                    </div>

                    <div class="technologies-marquee" aria-label="Technologies we use">
                        <?php foreach ($technologyLanes as $lane): ?>
                            <div
                                class="technology-lane technology-lane--<?= $lane['direction'] ?>"
                                style="--marquee-duration: <?= $lane['duration'] ?>; --marquee-delay: <?= $lane['delay'] ?>; --marquee-repeat: <?= $technologyMarqueeCopies ?>;"
                            >
                                <div class="technology-lane-track">
                                    <?php for ($copy = 0; $copy < $technologyMarqueeCopies; $copy++): ?>
                                        <div class="technology-lane-group"<?= $copy > 0 ? ' aria-hidden="true"' : '' ?>>
                                            <?php foreach ($lane['items'] as $item): ?>
                                                <div
                                                    class="technology-pill"
                                                    aria-label="<?= htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') ?>"
                                                    style="--tech-soft: <?= $item['soft'] ?>;"
                                                >
                                                    <span class="technology-mark" aria-hidden="true">
                                                        <img
                                                            src="<?= technologyIconPath($item['icon']) ?>"
                                                            alt=""
                                                            loading="eager"
                                                            decoding="async"
                                                        >
                                                    </span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="content-section split-section" id="about">
                <div class="split-copy" data-reveal>
                    <p class="eyebrow">ABOUT US</p>
                    <h2>We balance polished visuals with practical delivery.</h2>
                    <p>
                        Gisee Infotech works across digital strategy, software development, and general IT support,
                        helping brands present themselves professionally while staying technically dependable behind
                        the scenes.
                    </p>
                </div>

                <div class="process-card" data-reveal>
                    <div class="process-step">
                        <strong>01</strong>
                        <span>Discover the problem, audience, and business goals.</span>
                    </div>
                    <div class="process-step">
                        <strong>02</strong>
                        <span>Design a cleaner user experience with clear hierarchy and motion.</span>
                    </div>
                    <div class="process-step">
                        <strong>03</strong>
                        <span>Build, test, optimize, and support the platform after launch.</span>
                    </div>
                </div>
            </section>

            <section class="content-section media-section" id="media">
                <div class="section-intro" data-reveal>
                    <p class="eyebrow">MEDIA</p>
                    <h2>Content and presentation support that makes technology feel easier to trust.</h2>
                </div>

                <div class="card-grid media-grid">
                    <?php foreach ($mediaCards as $card): ?>
                        <article class="media-card" data-reveal>
                            <span class="card-icon icon-inline"><?= siteIcon($card['icon']) ?></span>
                            <h3><?= $card['title'] ?></h3>
                            <p><?= $card['text'] ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="content-section shop-section" id="shop">
                <div class="shop-panel" data-reveal>
                    <div>
                        <p class="eyebrow">SHOP</p>
                        <h2>Need a storefront, catalog, or digital ordering experience?</h2>
                        <p>
                            We can shape a commerce-focused flow with strong presentation, trust-building layouts,
                            and a mobile-first buying experience.
                        </p>
                    </div>
                    <button class="cta-pill cta-primary" type="button" data-contact-open>
                        <span>Discuss your build</span>
                        <span class="contact-pill-badge icon-inline"><?= siteIcon('cart') ?></span>
                    </button>
                </div>
            </section>

            <section class="content-section auth-section" id="auth" hidden aria-hidden="true">
                <div class="auth-backdrop" data-auth-close></div>
                <div class="auth-stage" data-auth-stage data-auth-state="signin" role="dialog" aria-modal="true" aria-labelledby="auth-title">
                    <button class="auth-close" type="button" aria-label="Close form" data-auth-close>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="auth-card-head">
                        <span class="auth-card-logo">
                            <img src="images/giseepng.png" alt="Gisee" width="110" height="32">
                        </span>
                        <h2 id="auth-title" class="auth-card-title">
                            <span class="auth-title-signin">Log in to Gisee</span>
                            <span class="auth-title-signup">Create your account</span>
                        </h2>
                    </div>

                    <form class="auth-form-panel is-active" data-auth-panel="signin" novalidate>
                        <label class="auth-field">
                            <span class="auth-field-label">Email</span>
                            <span class="auth-input-wrap">
                                <span class="auth-input-icon icon-inline"><?= siteIcon('mail') ?></span>
                                <input type="email" name="signin_email" placeholder="hello@youremail.com" autocomplete="email">
                            </span>
                        </label>

                        <label class="auth-field">
                            <span class="auth-field-label">Password</span>
                            <span class="auth-input-wrap">
                                <span class="auth-input-icon icon-inline"><?= siteIcon('lock') ?></span>
                                <input type="password" name="signin_password" placeholder="Enter your password" autocomplete="current-password">
                                <button type="button" class="auth-show-toggle" data-password-toggle aria-label="Show password">Show</button>
                            </span>
                        </label>

                        <button class="auth-quiet-link auth-forgot" type="button" data-contact-open>
                            Forgot password?
                        </button>

                        <button class="auth-submit auth-submit-primary" type="submit">Login</button>

                        <p class="auth-switch">
                            Don't have an account?
                            <button type="button" class="auth-switch-link" data-auth-mode="signup">Sign up</button>
                        </p>
                    </form>

                    <form class="auth-form-panel" data-auth-panel="signup" novalidate hidden>
                        <label class="auth-field">
                            <span class="auth-field-label">Name</span>
                            <span class="auth-input-wrap">
                                <span class="auth-input-icon icon-inline"><?= siteIcon('user') ?></span>
                                <input type="text" name="signup_name" placeholder="Enter your name" autocomplete="name">
                            </span>
                        </label>

                        <label class="auth-field">
                            <span class="auth-field-label">Email</span>
                            <span class="auth-input-wrap">
                                <span class="auth-input-icon icon-inline"><?= siteIcon('mail') ?></span>
                                <input type="email" name="signup_email" placeholder="Enter your e-mail" autocomplete="email">
                            </span>
                        </label>

                        <label class="auth-field">
                            <span class="auth-field-label">Password</span>
                            <span class="auth-input-wrap">
                                <span class="auth-input-icon icon-inline"><?= siteIcon('lock') ?></span>
                                <input type="password" name="signup_password" placeholder="Create a password" autocomplete="new-password">
                                <button type="button" class="auth-show-toggle" data-password-toggle aria-label="Show password">Show</button>
                            </span>
                        </label>

                        <button class="auth-submit auth-submit-primary" type="submit">Sign Up</button>

                        <p class="auth-switch">
                            Already have an account?
                            <button type="button" class="auth-switch-link" data-auth-mode="signin">Sign in</button>
                        </p>
                    </form>
                </div>
            </section>

            <div class="toast-container" aria-live="polite" aria-atomic="true"></div>

            <section class="content-section contact-modal" id="contact-modal" hidden aria-hidden="true">
                <div class="contact-modal-backdrop" data-contact-close></div>
                <div class="contact-modal-stage" role="dialog" aria-modal="true" aria-labelledby="contact-title">
                    <div class="contact-modal-side">
                        <p class="eyebrow eyebrow-light">CONTACT US</p>
                        <h2 id="contact-title">Let's build something clean and professional.</h2>
                        <p class="contact-modal-copy">
                            Tell us whether you need software development, IT support, security, or a polished digital platform.
                        </p>

                        <div class="contact-modal-highlights">
                            <div class="contact-modal-pill">
                                <span class="mini-icon icon-inline"><?= siteIcon('code') ?></span>
                                <span>Software delivery</span>
                            </div>
                            <div class="contact-modal-pill">
                                <span class="mini-icon icon-inline"><?= siteIcon('support') ?></span>
                                <span>IT support</span>
                            </div>
                            <div class="contact-modal-pill">
                                <span class="mini-icon icon-inline"><?= siteIcon('shield') ?></span>
                                <span>Security help</span>
                            </div>
                        </div>
                    </div>

                    <div class="contact-modal-form-shell">
                        <button class="contact-close" type="button" aria-label="Close contact form" data-contact-close>
                            <span></span>
                            <span></span>
                        </button>

                        <div class="contact-modal-form-head">
                            <p class="eyebrow">SEND A MESSAGE</p>
                            <h3>Contact form</h3>
                            <p>Fill in your details and share what you need.</p>
                        </div>

                        <form class="contact-modal-form" novalidate>
                            <label class="contact-field">
                                <span>Name</span>
                                <input type="text" name="contact_name" placeholder="Enter your name" autocomplete="name">
                            </label>

                            <label class="contact-field">
                                <span>E-mail Address</span>
                                <input type="email" name="contact_email" placeholder="Enter your e-mail" autocomplete="email">
                            </label>

                            <label class="contact-field">
                                <span>Phone Number</span>
                                <input type="tel" name="contact_phone" placeholder="Enter your phone number" autocomplete="tel">
                            </label>

                            <label class="contact-field">
                                <span>Service Needed</span>
                                <select name="contact_service">
                                    <option value="">Select a service</option>
                                    <option>General IT Services</option>
                                    <option>Software Development</option>
                                    <option>Cybersecurity</option>
                                    <option>Cloud & DevOps</option>
                                </select>
                            </label>

                            <label class="contact-field contact-field-message">
                                <span>Message</span>
                                <textarea name="contact_message" rows="4" placeholder="Tell us about your project or support need"></textarea>
                            </label>

                            <p class="contact-form-status" hidden>Thanks. Your message is ready and we will get back to you soon.</p>

                            <div class="contact-form-actions">
                                <button class="contact-submit contact-submit-primary" type="submit">Send</button>
                                <button class="contact-submit contact-submit-secondary" type="button" data-contact-close>Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="simple-footer" data-reveal>
                <div class="simple-footer-top">
                    <div class="simple-footer-brand">
                        <img src="images/giseepng.png" alt="Gisee logo" class="footer-brand-logo" width="132" height="38">
                        <p class="simple-footer-copy">
                            General IT services and software development with clean delivery, strong support, and a more professional digital presence.
                        </p>
                    </div>

                    <nav class="simple-footer-links" aria-label="Footer navigation">
                        <?php foreach ($footerLegalLinks as $link): ?>
                            <a href="<?= $link['href'] ?>"><?= $link['label'] ?></a>
                        <?php endforeach; ?>
                    </nav>

                    <div class="simple-footer-actions">
                        <button class="footer-action footer-action-primary" type="button" data-contact-open>Contact us</button>
                        <button class="footer-action" type="button" data-auth-open="signup">Sign up</button>
                    </div>
                </div>

                <div class="simple-footer-bottom">
                    <div class="footer-socials" aria-label="Social media links">
                        <?php foreach ($footerSocialLinks as $item): ?>
                            <a
                                class="footer-social"
                                href="<?= $item['href'] ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="<?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>"
                                title="<?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>"
                            >
                                <span class="icon-inline"><?= siteIcon($item['icon']) ?></span>
                            </a>
                        <?php endforeach; ?>

                        <a
                            class="footer-social footer-social-whatsapp"
                            href="https://wa.me/255753228505"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="WhatsApp +255 753 228 505"
                            title="WhatsApp +255 753 228 505"
                        >
                            <img src="images/whatsapp-icon.svg" alt="WhatsApp" class="footer-whatsapp-icon">
                        </a>
                    </div>

                    <div class="footer-contact-panel">
                        <a class="footer-contact-item" href="mailto:info@gisee.co.tz">
                            <span class="icon-inline"><?= siteIcon('mail') ?></span>
                            <span>info@gisee.co.tz</span>
                        </a>
                        <a class="footer-contact-item" href="tel:+255 753 228 505">
                            <span class="icon-inline"><?= siteIcon('mobile') ?></span>
                            <span>+255 753 228 505</span>
                        </a>
                    </div>

                    <span class="simple-footer-meta">&copy; <?= date('Y') ?> Gisee Infotech. All rights reserved.</span>
                </div>
            </div>
        </footer>

        <a
            class="whatsapp-bubble"
            href="https://wa.me/255753228505"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Chat with us on WhatsApp at +255 753 228 505"
            title="WhatsApp us"
        >
            <img src="images/whatsapp-icon.svg" alt="WhatsApp chat" class="whatsapp-bubble-icon">
        </a>
    </div>

    <script>
    if ('scrollRestoration' in window.history) {
        window.history.scrollRestoration = 'manual';
    }

    document.body.classList.add('js-animate');

    document.addEventListener('DOMContentLoaded', function () {
        const body = document.body;
        const topbar = document.querySelector('.topbar');
        const toggle = document.querySelector('.mobile-menu-toggle');
        const navLinks = document.querySelectorAll('.nav-links a, .brand, .cta-pill, .inline-link, .header-contact-pill');
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
        const dropdownGroups = document.querySelectorAll('.nav-item-has-menu');
        const closeAllDropdowns = function () {
            dropdownGroups.forEach(function (group) {
                const toggleButton = group.querySelector('.dropdown-toggle');
                const panel = group.querySelector('.dropdown-panel');
                group.classList.remove('is-open');
                if (toggleButton) {
                    toggleButton.setAttribute('aria-expanded', 'false');
                }
                if (panel) {
                    panel.hidden = true;
                }
            });
        };

        dropdownToggles.forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.stopPropagation();
                const group = button.closest('.nav-item-has-menu');
                if (!group) {
                    return;
                }

                const isOpen = !group.classList.contains('is-open');
                closeAllDropdowns();
                if (isOpen) {
                    const panel = group.querySelector('.dropdown-panel');
                    group.classList.add('is-open');
                    if (panel) {
                        panel.hidden = false;
                    }
                    button.setAttribute('aria-expanded', 'true');
                }
            });
        });

        document.addEventListener('click', function (event) {
            if (!event.target.closest('.nav-item-has-menu')) {
                closeAllDropdowns();
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeAllDropdowns();
            }
        });

        const revealItems = document.querySelectorAll('[data-reveal]');
        const typedWord = document.querySelector('.typed-word');
        const countNumbers = document.querySelectorAll('.count-number');
        const serviceTabs = document.querySelectorAll('[data-service-tab]');
        const servicePanels = document.querySelectorAll('[data-service-panel]');
        const serviceMotionCards = document.querySelectorAll('[data-service-motion]');
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const authSection = document.querySelector('.auth-section');
        const authStage = document.querySelector('[data-auth-stage]');
        const authOpeners = document.querySelectorAll('[data-auth-open]');
        const authModeButtons = document.querySelectorAll('[data-auth-mode]');
        const authPanels = document.querySelectorAll('[data-auth-panel]');
        const authForms = document.querySelectorAll('.auth-form-panel');
        const authClosers = document.querySelectorAll('[data-auth-close]');
        const contactSection = document.querySelector('.contact-modal');
        const contactStage = contactSection ? contactSection.querySelector('.contact-modal-stage') : null;
        const contactOpeners = document.querySelectorAll('[data-contact-open]');
        const contactClosers = document.querySelectorAll('[data-contact-close]');
        const contactForms = document.querySelectorAll('.contact-modal-form');
        const toastContainer = document.querySelector('.toast-container');
        const showToast = function (message, type) {
            if (!toastContainer) {
                return;
            }

            const toast = document.createElement('div');
            toast.className = 'toast-message toast-' + (type || 'info');
            toast.textContent = message;
            toastContainer.appendChild(toast);

            window.setTimeout(function () {
                toast.classList.add('toast-visible');
            }, 10);

            window.setTimeout(function () {
                toast.classList.remove('toast-visible');
                window.setTimeout(function () {
                    toast.remove();
                }, 260);
            }, 4200);
        };

        const navigationEntry = performance.getEntriesByType('navigation')[0];
        const modalCloseTimers = new WeakMap();
        let closeAuth = function () {};
        let closeContact = function () {};

        const syncModalState = function () {
            const isModalOpen = body.classList.contains('auth-open') || body.classList.contains('contact-open');
            body.classList.toggle('modal-open', isModalOpen);
        };

        const clearModalTimer = function (modal) {
            const timer = modalCloseTimers.get(modal);
            if (timer) {
                window.clearTimeout(timer);
                modalCloseTimers.delete(modal);
            }
        };

        const resetModalMotion = function (stage) {
            if (!stage) {
                return;
            }

            stage.style.setProperty('--modal-tilt-x', '0deg');
            stage.style.setProperty('--modal-tilt-y', '0deg');
        };

        const setModalOrigin = function (stage, opener) {
            if (!stage) {
                return;
            }

            if (!opener || typeof opener.getBoundingClientRect !== 'function') {
                stage.style.removeProperty('--modal-origin-x');
                stage.style.removeProperty('--modal-origin-y');
                return;
            }

            const openerRect = opener.getBoundingClientRect();
            const stageRect = stage.getBoundingClientRect();
            const originX = Math.max(36, Math.min(stageRect.width - 36, openerRect.left + (openerRect.width / 2) - stageRect.left));
            const originY = Math.max(28, Math.min(stageRect.height - 28, openerRect.top + (openerRect.height / 2) - stageRect.top));

            stage.style.setProperty('--modal-origin-x', originX.toFixed(2) + 'px');
            stage.style.setProperty('--modal-origin-y', originY.toFixed(2) + 'px');
        };

        const showModal = function (modal, stage, bodyClass, opener) {
            if (!modal) {
                return;
            }

            clearModalTimer(modal);
            modal.hidden = false;
            modal.setAttribute('aria-hidden', 'false');
            modal.classList.remove('is-closing');
            resetModalMotion(stage);
            setModalOrigin(stage, opener || null);

            if (prefersReducedMotion) {
                modal.classList.add('is-visible');
                body.classList.add(bodyClass);
                syncModalState();
                return;
            }

            window.requestAnimationFrame(function () {
                modal.classList.add('is-visible');
                body.classList.add(bodyClass);
                syncModalState();
            });
        };

        const hideModal = function (modal, stage, bodyClass, options) {
            if (!modal) {
                return;
            }

            const immediate = options && options.immediate;
            clearModalTimer(modal);
            body.classList.remove(bodyClass);
            syncModalState();

            const finishClose = function () {
                modal.hidden = true;
                modal.setAttribute('aria-hidden', 'true');
                modal.classList.remove('is-visible', 'is-closing');

                if (stage) {
                    stage.style.removeProperty('--modal-origin-x');
                    stage.style.removeProperty('--modal-origin-y');
                    resetModalMotion(stage);
                }
            };

            if (immediate || prefersReducedMotion) {
                finishClose();
                return;
            }

            modal.classList.remove('is-visible');
            modal.classList.add('is-closing');
            modalCloseTimers.set(modal, window.setTimeout(finishClose, 420));
        };

        const attachModalTilt = function (stage) {
            if (!stage || prefersReducedMotion) {
                return;
            }

            stage.addEventListener('pointermove', function (event) {
                if (event.pointerType && event.pointerType !== 'mouse') {
                    return;
                }

                const rect = stage.getBoundingClientRect();
                const relativeX = (event.clientX - rect.left) / rect.width - 0.5;
                const relativeY = (event.clientY - rect.top) / rect.height - 0.5;
                stage.style.setProperty('--modal-tilt-x', (-relativeY * 2.6).toFixed(2) + 'deg');
                stage.style.setProperty('--modal-tilt-y', (relativeX * 3.2).toFixed(2) + 'deg');
            });

            stage.addEventListener('pointerleave', function () {
                resetModalMotion(stage);
            });
        };

        attachModalTilt(authStage);
        attachModalTilt(contactStage);

        const clearModalHash = function () {
            if ((window.location.hash === '#contact' || window.location.hash === '#auth') && window.history.replaceState) {
                window.history.replaceState(null, '', window.location.pathname + window.location.search);
            }
        };

        clearModalHash();

        if (!window.location.hash || (navigationEntry && navigationEntry.type === 'reload')) {
            window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
        }

        window.addEventListener('pageshow', function () {
            if (!window.location.hash) {
                window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
            }
        });

        if (toggle) {
            toggle.addEventListener('click', function () {
                const isOpen = body.classList.toggle('nav-open');
                toggle.setAttribute('aria-expanded', String(isOpen));
            });
        }

        const scrollToTarget = function (target) {
            const topbarHeight = topbar ? topbar.getBoundingClientRect().height + 18 : 0;
            const targetTop = window.scrollY + target.getBoundingClientRect().top - topbarHeight;
            window.scrollTo({
                top: Math.max(0, targetTop),
                behavior: 'smooth',
            });
        };

        navLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                const href = link.getAttribute('href');

                if (!href || href.charAt(0) !== '#') {
                    return;
                }

                if (link.hasAttribute('data-auth-open')) {
                    return;
                }

                const target = document.querySelector(href);
                if (!target) {
                    return;
                }

                event.preventDefault();
                scrollToTarget(target);

                if (body.classList.contains('nav-open') && toggle) {
                    body.classList.remove('nav-open');
                    toggle.setAttribute('aria-expanded', 'false');
                }
            });
        });

        if (serviceTabs.length && servicePanels.length) {
            const setActiveServiceMode = function (modeId) {
                serviceTabs.forEach(function (button) {
                    const isActive = button.dataset.serviceTab === modeId;
                    button.classList.toggle('is-active', isActive);
                    button.setAttribute('aria-selected', isActive ? 'true' : 'false');
                });

                servicePanels.forEach(function (panel) {
                    const isActive = panel.dataset.servicePanel === modeId;
                    panel.classList.toggle('is-active', isActive);
                    panel.hidden = !isActive;
                });
            };

            serviceTabs.forEach(function (button) {
                button.addEventListener('click', function () {
                    setActiveServiceMode(button.dataset.serviceTab || '');
                });
            });
        }

        if (serviceMotionCards.length && !prefersReducedMotion) {
            const resetMotion = function (card) {
                card.style.setProperty('--card-tilt-x', '0deg');
                card.style.setProperty('--card-tilt-y', '0deg');
                card.style.setProperty('--icon-shift-x', '0px');
                card.style.setProperty('--icon-shift-y', '0px');
            };

            serviceMotionCards.forEach(function (card) {
                resetMotion(card);

                card.addEventListener('pointermove', function (event) {
                    if (event.pointerType && event.pointerType !== 'mouse') {
                        return;
                    }

                    const rect = card.getBoundingClientRect();
                    const relativeX = (event.clientX - rect.left) / rect.width - 0.5;
                    const relativeY = (event.clientY - rect.top) / rect.height - 0.5;

                    card.style.setProperty('--card-tilt-x', (-relativeY * 7).toFixed(2) + 'deg');
                    card.style.setProperty('--card-tilt-y', (relativeX * 9).toFixed(2) + 'deg');
                    card.style.setProperty('--icon-shift-x', (relativeX * 16).toFixed(2) + 'px');
                    card.style.setProperty('--icon-shift-y', (relativeY * 12).toFixed(2) + 'px');
                });

                card.addEventListener('pointerleave', function () {
                    resetMotion(card);
                });
            });
        }

        if (contactSection) {
            const openContact = function (opener) {
                closeAuth({ immediate: true });
                showModal(contactSection, contactStage, 'contact-open', opener);
            };

            closeContact = function (options) {
                hideModal(contactSection, contactStage, 'contact-open', options || {});
            };

            contactOpeners.forEach(function (button) {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    openContact(button);
                });
            });

            contactClosers.forEach(function (button) {
                button.addEventListener('click', function () {
                    closeContact();
                });
            });

            contactForms.forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    const status = form.querySelector('.contact-form-status');

                    if (status) {
                        status.hidden = false;
                    }

                    showToast('Contact request submitted. We will follow up soon.', 'success');
                });
            });
        }

        if (authStage && authModeButtons.length && authPanels.length) {
            const setAuthMode = function (mode) {
                authStage.setAttribute('data-auth-state', mode);

                authModeButtons.forEach(function (button) {
                    if (button.classList.contains('auth-form-tab')) {
                        const isActive = button.dataset.authMode === mode;
                        button.classList.toggle('is-active', isActive);
                        button.setAttribute('aria-selected', isActive ? 'true' : 'false');
                    }
                });

                authPanels.forEach(function (panel) {
                    const isActive = panel.dataset.authPanel === mode;
                    panel.classList.toggle('is-active', isActive);
                    panel.hidden = !isActive;
                });
            };

            const openAuth = function (mode, opener) {
                if (!authSection) {
                    return;
                }

                closeContact({ immediate: true });

                if (mode) {
                    setAuthMode(mode);
                }

                showModal(authSection, authStage, 'auth-open', opener);
            };

            closeAuth = function (options) {
                if (!authSection) {
                    return;
                }

                hideModal(authSection, authStage, 'auth-open', options || {});
            };

            authOpeners.forEach(function (button) {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    openAuth(button.dataset.authOpen || 'signin', button);
                    showToast('Login form opened. Enter your email and password.', 'info');
                });
            });

            authModeButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    const mode = button.dataset.authMode;
                    if (mode) {
                        setAuthMode(mode);
                    }
                });
            });

            authClosers.forEach(function (button) {
                button.addEventListener('click', function () {
                    closeAuth();
                });
            });

            authForms.forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                });
            });

            document.querySelectorAll('[data-password-toggle]').forEach(function (toggleButton) {
                toggleButton.addEventListener('click', function () {
                    const wrap = toggleButton.closest('.auth-input-wrap');
                    const input = wrap ? wrap.querySelector('input') : null;
                    if (!input) {
                        return;
                    }

                    const showing = input.type === 'text';
                    input.type = showing ? 'password' : 'text';
                    toggleButton.textContent = showing ? 'Show' : 'Hide';
                    toggleButton.setAttribute('aria-label', showing ? 'Show password' : 'Hide password');
                });
            });

            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape' && body.classList.contains('auth-open')) {
                    closeAuth();
                }

                if (event.key === 'Escape' && body.classList.contains('contact-open')) {
                    closeContact();
                }
            });
        }

        if (typedWord) {
            const words = JSON.parse(typedWord.dataset.words || '[]');
            let wordIndex = 0;
            let charIndex = words[0] ? words[0].length : 0;
            let isDeleting = false;

            const typeLoop = function () {
                const currentWord = words[wordIndex] || '';
                typedWord.textContent = currentWord.slice(0, charIndex);

                let delay = isDeleting ? 55 : 110;

                if (!isDeleting && charIndex === currentWord.length) {
                    delay = 2200;
                    isDeleting = true;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    wordIndex = (wordIndex + 1) % words.length;
                    delay = 320;
                } else {
                    charIndex += isDeleting ? -1 : 1;
                }

                window.setTimeout(typeLoop, delay);
            };

            window.setTimeout(typeLoop, 2200);
        }

        if (countNumbers.length) {
            const startCount = function (element) {
                const target = Number(element.dataset.target || 0);
                const suffix = element.dataset.suffix || '';
                const duration = 1800;
                const start = performance.now();

                const step = function (now) {
                    const progress = Math.min((now - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    const current = Math.round(target * eased);
                    element.textContent = current + suffix;

                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    } else {
                        element.textContent = target + suffix;
                    }
                };

                window.requestAnimationFrame(step);
            };

            if ('IntersectionObserver' in window) {
                const counterObserver = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            startCount(entry.target);
                            counterObserver.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.5
                });

                countNumbers.forEach(function (item) {
                    counterObserver.observe(item);
                });
            } else {
                countNumbers.forEach(startCount);
            }
        }

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });

            revealItems.forEach(function (item) {
                observer.observe(item);
            });
        } else {
            revealItems.forEach(function (item) {
                item.classList.add('is-visible');
            });
        }
    });
    </script>
</body>
</html>
