<?php

/*
|--------------------------------------------------------------------------
| Gisee Infotech — site content
|--------------------------------------------------------------------------
|
| All presentational content for the marketing site lives here so the Blade
| views stay structural. This replaces the data arrays that used to sit at
| the top of the legacy index.php file.
|
*/

return [

    'contact' => [
        'email' => 'info@gisee.co.tz',
        'phone' => '+255 753 228 505',
        'whatsapp' => '255753228505',
    ],

    'nav' => [
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
    ],

    'hero_stats' => [
        ['value' => 50, 'suffix' => '+', 'label' => 'Satisfied Clients'],
        ['value' => 10, 'suffix' => '+', 'label' => 'Years Of Experience'],
        ['value' => 150, 'suffix' => '+', 'label' => 'Successful Projects'],
        ['value' => 65, 'suffix' => '%', 'label' => 'Senior Developers'],
    ],

    'typed_words' => ['Security.', 'Technology.', 'Systems.', 'Assets.'],

    'service_overview_modes' => [
        [
            'id' => 'it-services',
            'label' => 'IT Services',
            'headline' => 'Reliable operational support for businesses that need security, uptime, and fast response across every day technology.',
            'items' => [
                ['title' => 'Managed IT Support', 'text' => 'Service desk, end-user support, device setup, and proactive issue resolution.', 'icon' => 'support'],
                ['title' => 'Cloud & DevOps / SRE', 'text' => 'Cloud delivery, CI/CD, infrastructure automation, and uptime-focused operations.', 'icon' => 'cloud-sync'],
                ['title' => 'Cybersecurity & Compliance', 'text' => 'Access control, hardening, monitoring, and practical security governance.', 'icon' => 'shield-check'],
                ['title' => 'Infrastructure & Networks', 'text' => 'Servers, office connectivity, wireless, VPNs, and resilient core systems.', 'icon' => 'network-nodes'],
                ['title' => 'Data, Backup & Recovery', 'text' => 'Backup strategy, storage management, disaster recovery, and business continuity.', 'icon' => 'server-rack'],
                ['title' => 'Monitoring & Performance', 'text' => 'Observability, alerts, system health reviews, and ongoing optimization.', 'icon' => 'speed-gauge'],
            ],
        ],
        [
            'id' => 'software-development',
            'label' => 'Software Development',
            'headline' => 'Custom software and digital products built around the way your business actually works, not off-the-shelf assumptions.',
            'items' => [
                ['title' => 'Custom Web & SaaS Platforms', 'text' => 'Web apps, SaaS tools, portals, and internal systems tailored to your workflow.', 'icon' => 'browser-layout'],
                ['title' => 'ERP, CRM & Business Systems', 'text' => 'Operational software that connects teams, approvals, reporting, and process control.', 'icon' => 'workflow'],
                ['title' => 'API Integrations & Automation', 'text' => 'Secure integrations between business tools, finance systems, CRMs, and external services.', 'icon' => 'api-merge'],
                ['title' => 'UI/UX & Product Design', 'text' => 'Interfaces designed for adoption, clarity, conversion, and easier daily use.', 'icon' => 'design-pen'],
                ['title' => 'QA, Testing & Optimization', 'text' => 'Structured testing, release confidence, performance tuning, and bug prevention.', 'icon' => 'qa-check'],
                ['title' => 'Maintenance & Ongoing Development', 'text' => 'Enhancements, fixes, feature expansion, and long-term software support.', 'icon' => 'update'],
            ],
        ],
    ],

    'services' => [
        ['title' => 'General IT Services', 'text' => 'Infrastructure support, networking, managed security, cloud guidance, and day-to-day IT operations that keep teams productive.', 'icon' => 'shield'],
        ['title' => 'Custom Software Delivery', 'text' => 'Web applications, ERP systems, portals, and internal tools designed around the way your business actually works.', 'icon' => 'code'],
        ['title' => 'Product Care', 'text' => 'Performance reviews, bug fixing, analytics, content updates, and ongoing optimization after launch so your platform keeps improving.', 'icon' => 'support'],
    ],

    'software_showcase' => [
        ['title' => 'Business systems', 'text' => 'Operations, reporting, and workflow automation that reduce manual work.', 'icon' => 'layers'],
        ['title' => 'Commerce experiences', 'text' => 'Storefronts and service flows that convert smoothly on desktop and mobile.', 'icon' => 'mobile'],
        ['title' => 'Analytics dashboards', 'text' => 'Clear visual reporting that helps leaders act faster and with confidence.', 'icon' => 'analytics'],
    ],

    'technology_lanes' => [
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
    ],

    'technology_marquee_copies' => 7,

    'media_cards' => [
        ['title' => 'Launch Coverage', 'text' => 'Campaign visuals, launch pages, and supporting digital assets that make a new release feel complete.', 'icon' => 'rocket'],
        ['title' => 'Brand Storytelling', 'text' => 'Short-form media and polished content blocks that help your company explain value clearly.', 'icon' => 'story'],
        ['title' => 'Technical Updates', 'text' => 'Service notices, product enhancements, and customer-facing updates presented with a more professional voice.', 'icon' => 'update'],
    ],

    'transformation_points' => [
        ['label' => 'Modernization strategy', 'icon' => 'layers'],
        ['label' => 'Workflow solutions', 'icon' => 'workflow'],
        ['label' => 'Secure delivery', 'icon' => 'shield'],
    ],

    'footer_legal_links' => [
        ['label' => 'About Us', 'href' => '#about'],
        ['label' => 'Services', 'href' => '#services'],
        ['label' => 'Privacy Policy', 'href' => '#home'],
    ],

    'footer_social_links' => [
        ['label' => 'Facebook', 'href' => 'https://www.facebook.com/', 'icon' => 'facebook'],
        ['label' => 'Instagram', 'href' => 'https://www.instagram.com/', 'icon' => 'instagram'],
        ['label' => 'LinkedIn', 'href' => 'https://www.linkedin.com/', 'icon' => 'linkedin'],
        ['label' => 'X', 'href' => 'https://x.com/', 'icon' => 'x-social'],
    ],

    'contact_services' => [
        'General IT Services',
        'Software Development',
        'Cybersecurity',
        'Cloud & DevOps',
    ],

    /*
    |--------------------------------------------------------------------------
    | Inline SVG icon set
    |--------------------------------------------------------------------------
    | Rendered by the <x-icon> Blade component. Keys match the "icon" values
    | used throughout the content arrays above.
    */
    'icons' => [
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
        'logout' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 4h4a1 1 0 011 1v14a1 1 0 01-1 1h-4M10 8l-4 4 4 4M6 12h11"/></svg>',
        'facebook' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.4 21v-7.2h2.4l.4-2.9h-2.8V9.1c0-.8.2-1.5 1.4-1.5h1.5V5.1c-.3 0-1.1-.1-2.2-.1-2.2 0-3.7 1.3-3.7 3.8v2.1H8v2.9h2.4V21z" fill="currentColor" stroke="none"></path></svg>',
        'instagram' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.8 3h8.4A4.8 4.8 0 0121 7.8v8.4a4.8 4.8 0 01-4.8 4.8H7.8A4.8 4.8 0 013 16.2V7.8A4.8 4.8 0 017.8 3zm0 1.8A3 3 0 004.8 7.8v8.4a3 3 0 003 3h8.4a3 3 0 003-3V7.8a3 3 0 00-3-3zm8.9 1.3a1.1 1.1 0 110 2.2 1.1 1.1 0 010-2.2zM12 7.6A4.4 4.4 0 1112 16.4 4.4 4.4 0 0112 7.6zm0 1.8A2.6 2.6 0 1012 14.6 2.6 2.6 0 0012 9.4z" fill="currentColor" stroke="none"></path></svg>',
        'linkedin' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5.4 8.6A1.6 1.6 0 115.4 5.4a1.6 1.6 0 010 3.2zM4 10h2.8v10H4zm4.6 0h2.7v1.4h.1c.4-.7 1.3-1.7 3-1.7 3.2 0 3.8 2.1 3.8 4.9v5.4h-2.8v-4.8c0-1.2 0-2.6-1.6-2.6s-1.9 1.2-1.9 2.5v4.9H8.6z" fill="currentColor" stroke="none"></path></svg>',
        'x-social' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 4h3.6l3.9 5.3L16.8 4H20l-6 7 6.3 9H16.7l-4.2-5.9L7.4 20H4.1l6.5-7.4z" fill="currentColor" stroke="none"></path></svg>',
        'whatsapp' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" stroke="none" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.999-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>',
    ],
];
