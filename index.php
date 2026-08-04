<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conroy Rodrigues - Working on Developing Tomorrow, Today</title>
    <meta name="description" content="Building resilient cloud-native platforms with .NET, AWS, Azure, and modern software architectures.">
    <meta name="keywords" content="Conroy Rodrigues, .NET Developer, ASP.NET Core, Full Stack Developer, Senior Full Stack Developer, AWS, Azure, C#, Microservices, Software Architect">
    <meta name="author" content="Conroy Rodrigues">
    <link rel="canonical" href="https://www.conroyrodrigues.com/">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.conroyrodrigues.com/">
    <meta property="og:title" content="Conroy Rodrigues - Working on Developing Tomorrow, Today">
    <meta property="og:description" content="Building resilient cloud-native platforms with .NET, AWS, Azure, and modern software architectures.">
    <meta property="og:image" content="https://www.conroyrodrigues.com/og-image.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.conroyrodrigues.com/">
    <meta name="twitter:title" content="Conroy Rodrigues - Working on Developing Tomorrow, Today">
    <meta name="twitter:description" content="Building resilient cloud-native platforms with .NET, AWS, Azure, and modern software architectures.">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Conroy Rodrigues",
      "url": "https://www.conroyrodrigues.com",
      "jobTitle": "Full Stack .NET Developer & Cloud Engineer",
      "knowsAbout": [".NET", "ASP.NET Core", "C#", "AWS", "Azure", "Docker", "Microservices", "SQL Server", "PostgreSQL"],
      "description": "Building resilient cloud-native platforms with .NET, AWS, Azure, and modern software architectures."
    }
    </script>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Ccircle cx='32' cy='32' r='24' fill='url(%23g)'/%3E%3Cdefs%3E%3ClinearGradient id='g' x1='0' x2='1' y1='0' y2='1'%3E%3Cstop stop-color='%23ff4f4f'/%3E%3Cstop offset='1' stop-color='%238f0f0f'/%3E%3C/linearGradient%3E%3C/defs%3E%3Ctext x='32' y='38' text-anchor='middle' font-family='Arial, Helvetica, sans-serif' font-size='18' font-weight='700' fill='white'%3ECR%3C/text%3E%3C/svg%3E">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap');

        :root {
            --bg: #050505;
            --bg-soft: #0d0d0d;
            --panel: rgba(18, 18, 18, 0.84);
            --text: #f7f7f7;
            --muted: #b2b2b2;
            --accent: #d91f1f;
            --accent-2: #ff4a4a;
            --border: rgba(255,255,255,0.09);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Space Grotesk', 'Segoe UI', sans-serif;
            background:
                radial-gradient(circle at top left, rgba(217, 31, 31, 0.25), transparent 24%),
                radial-gradient(circle at top right, rgba(255, 74, 74, 0.12), transparent 22%),
                linear-gradient(135deg, #040404, var(--bg));
            color: var(--text);
            min-height: 100vh;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            background:
                linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 22px 22px;
            mask-image: radial-gradient(circle at center, black, transparent 88%);
            opacity: 0.40;
        }

        .navbar {
            background: rgba(4, 4, 4, 0.18);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .brand {
            font-weight: 700;
            letter-spacing: 0.12em;
            color: #fff;
        }

        .brand-accent {
            color: #ff3b3b;
            font-weight: 700;
            letter-spacing: 0.12em;
        }

        .nav-link {
            color: rgba(255,255,255,0.82) !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #fff !important;
        }

        .hero {
            padding: 8.5rem 0 5rem;
            position: relative;
        }

        .eyebrow {
            text-transform: uppercase;
            letter-spacing: 0.15em;
            font-size: 0.75rem;
            color: #f2a6a6;
        }

        .display-title {
            font-size: clamp(3rem, 7vw, 5.5rem);
            line-height: 0.95;
            font-weight: 700;
            letter-spacing: -0.05em;
            max-width: 10.5ch;
            min-height: 8.5rem;
            margin-bottom: 1rem;
        }

        .gradient-text {
            background: linear-gradient(135deg, #ff5757, #b81111);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .lead {
            max-width: 680px;
            color: var(--muted);
            font-size: 1.1rem;
            line-height: 1.8;
            min-height: 5.5rem;
            margin-bottom: 0;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent), #8f0f0f);
            border: none;
            font-weight: 700;
            box-shadow: 0 12px 30px rgba(217, 31, 31, 0.28);
            color: #fff !important;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            filter: brightness(1.08);
            color: #fff !important;
        }

        .btn-outline-light {
            border-color: rgba(255,255,255,0.22);
            color: #fff;
        }

        .btn-outline-light:hover,
        .btn-outline-light:focus,
        .btn-outline-light:active {
            background: rgba(255,255,255,0.05);
            border-color: rgba(255,255,255,0.38);
            color: #fff !important;
        }

        .hero-carousel {
            overflow: hidden;
        }

        .hero-carousel .carousel-inner {
            border-radius: 1.2rem;
            min-height: 0;
            height: auto;
        }

        .hero-carousel .carousel-item {
            display: none;
            height: 100%;
        }

        .hero-carousel .carousel-item.active,
        .hero-carousel .carousel-item.carousel-item-next,
        .hero-carousel .carousel-item.carousel-item-prev {
            display: block;
        }

        .hero-slide {
            min-height: 0;
            height: auto;
            display: flex;
            align-items: center;
            padding: 2rem 0;
        }

        .hero-slide > div {
            width: 100%;
            max-width: 980px;
        }

        .hero-carousel .carousel-indicators {
            margin: 1rem 0 0;
            justify-content: flex-start;
            gap: 0.4rem;
            position: static;
        }

        .hero-carousel .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.42);
            border: 0;
            opacity: 1;
        }

        .hero-carousel .carousel-indicators .active {
            background-color: var(--accent);
        }

        .hero-panel,
        .glass-card,
        .project-card,
        .service-card,
        .stat-card {
            background: var(--panel);
            border: 1px solid var(--border);
            box-shadow: 0 28px 80px rgba(0, 0, 0, 0.45);
            border-radius: 1.35rem;
            backdrop-filter: blur(18px);
        }

        .hero-panel {
            padding: 1.5rem;
            position: relative;
            overflow: hidden;
            min-height: 520px;
            display: flex;
            align-items: end;
            background:
                linear-gradient(135deg, rgba(10,10,10,0.94), rgba(38, 0, 0, 0.86)),
                radial-gradient(circle at top right, rgba(217, 31, 31, 0.2), transparent 24%);
            border-radius: 1.6rem;
            border: 1px solid rgba(255,255,255,0.08);
        }

        .hero-panel::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(0,0,0,0.22));
            z-index: 0;
        }

        .hero-panel::after {
            content: "";
            position: absolute;
            right: -28px;
            bottom: -40px;
            width: 170px;
            height: 170px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(217,31,31,0.45), transparent 68%);
            z-index: 0;
        }

        .hero-avatar {
            position: absolute;
            top: 28px;
            right: 28px;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #1f1f1f, #4a0606);
            color: #fff;
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            border: 4px solid rgba(255,255,255,0.08);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.45);
            z-index: 1;
        }

        .profile-content {
            position: relative;
            z-index: 1;
            max-width: 360px;
            margin-top: auto;
        }

        .profile-content h3 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .profile-content p {
            color: rgba(255,255,255,0.82);
            margin-bottom: 0;
            line-height: 1.7;
        }

        .designer-preview {
            background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0.015));
            border-radius: 1rem;
            border: 1px solid rgba(255,255,255,0.08);
            padding: 1rem;
        }

        .preview-window {
            background: #090909;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 1rem;
            overflow: hidden;
        }

        .preview-top {
            display: flex;
            gap: 0.38rem;
            padding: 0.8rem 1rem;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .preview-dot {
            width: 0.7rem;
            height: 0.7rem;
            border-radius: 50%;
            background: rgba(255,255,255,0.66);
        }

        .preview-body {
            padding: 1rem;
            display: grid;
            gap: 0.85rem;
        }

        .preview-card {
            background: linear-gradient(135deg, rgba(217,31,31,0.18), rgba(255,255,255,0.03));
            border-radius: 0.9rem;
            border: 1px solid rgba(255,255,255,0.08);
            padding: 0.9rem;
        }

        .section-title {
            font-size: clamp(1.9rem, 4vw, 2.8rem);
            line-height: 1.06;
            letter-spacing: -0.03em;
            font-weight: 700;
        }

        .project-card,
        .service-card,
        .glass-card,
        .stat-card {
            padding: 1.4rem;
            transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
        }

        .project-card:hover,
        .service-card:hover,
        .glass-card:hover,
        .stat-card:hover {
            transform: translateY(-4px);
            border-color: rgba(217,31,31,0.42);
            box-shadow: 0 18px 50px rgba(0, 0, 0, 0.54);
        }

        .mini-stat {
            background: linear-gradient(180deg, rgba(217,31,31,0.18), rgba(255,255,255,0.03));
            border: 1px solid rgba(217,31,31,0.38);
            border-radius: 1rem;
            padding: 1rem;
        }

        .quote-block {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #fff;
        }

        .timeline-line {
            position: relative;
            background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
            border-radius: 1.2rem;
        }

        .timeline-line::before {
            content: "";
            position: absolute;
            left: 11px;
            top: 16px;
            bottom: 16px;
            width: 1px;
            background: linear-gradient(180deg, rgba(217, 31, 31, 0.85), rgba(255,255,255,0.08));
            opacity: 0.85;
        }

        .timeline-item {
            position: relative;
            padding-left: 2.75rem;
        }

        .timeline-item::before {
            content: "";
            position: absolute;
            left: 6px;
            top: 0.28rem;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent), var(--accent-2));
            box-shadow: 0 0 0 4px rgba(217, 31, 31, 0.16);
        }

        .footer-link {
            color: var(--muted);
            text-decoration: none;
        }

        .footer-link:hover {
            color: #fff;
        }

        @media (max-width: 991.98px) {
            .display-title {
                max-width: 100%;
            }

            .hero {
                padding-top: 7rem;
            }
        }

        .avatar-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, var(--accent), #8f0f0f);
            color: #fff;
            font-weight: 700;
            font-size: 2rem;
            letter-spacing: 0.06em;
            box-shadow: 0 16px 40px rgba(217, 31, 31, 0.3);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand brand" href="#">CONROY<span class="brand-accent">RODRIGUES</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-lg-3 align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-lg-2" href="#contact">Let's Talk</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-12">
                    <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="4500">
                        <div class="carousel-inner">
                            <div class="carousel-item active hero-slide">
                                <div>
                                    <div class="eyebrow mb-3">Full Stack .NET Developer • AWS & Azure</div>
                                    <h1 class="display-title">Building resilient <span class="gradient-text">cloud-native platforms</span> with .NET.</h1>
                                    <p class="lead mt-4 mb-0">I build secure, high-performance systems with ASP.NET Core, C#, Java, PHP, Node.js, Docker, Azure, AWS, and modern cloud engineering practices.</p>
                                </div>
                            </div>
                            <div class="carousel-item hero-slide">
                                <div>
                                    <div class="eyebrow mb-3">Architectural Thinking</div>
                                    <h1 class="display-title">Clean Architecture, DI, and <span class="gradient-text">modular service design</span>.</h1>
                                    <p class="lead mt-4 mb-0">I create maintainable software through SOLID principles, dependency injection, and clean boundaries that help teams scale with confidence and long-term clarity.</p>
                                </div>
                            </div>
                            <div class="carousel-item hero-slide">
                                <div>
                                    <div class="eyebrow mb-3">Cloud & Data Platforms</div>
                                    <h1 class="display-title">SQL, Postgres, MySQL, Docker, and <span class="gradient-text">edge-ready delivery</span>.</h1>
                                    <p class="lead mt-4 mb-0">I connect modern infrastructure, cloud operations, and reliable data patterns to deliver dependable systems across hybrid, distributed, and edge-ready environments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-3 mb-4">
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">.NET</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">ASP.NET Core</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">Java</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">PHP</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">Node.js</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">Docker</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">AWS</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">Azure</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">SQL Server</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">PostgreSQL</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">MySQL</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis px-3 py-2">Edge Computing</span>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#projects" class="btn btn-primary btn-lg px-4">View Projects</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg px-4">Let's Connect</a>
                    </div>
                    <div class="row mt-4 g-3">
                    <div class="row mt-4 g-3">
                    <div class="col-sm-4">
                        <div class="mini-stat">
                            <div class="fw-bold fs-5 text-danger"><i class="bi bi-shield-lock me-2"></i>Government Cleared</div>
                            <div class="muted small mt-1">Built secure apps for defense & public sector</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mini-stat">
                            <div class="fw-bold fs-5 text-danger"><i class="bi bi-diagram-3 me-2"></i>Microservices & APIs</div>
                            <div class="muted small mt-1">Event-driven, high-throughput integration</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mini-stat">
                            <div class="fw-bold fs-5 text-danger"><i class="bi bi-infinity me-2"></i>DevOps & Automation</div>
                            <div class="muted small mt-1">Docker, CI/CD, and automated deployment</div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 g-3">
                    <div class="col-sm-4">
                        <div class="mini-stat">
                            <div class="fw-bold fs-5 text-danger"><i class="bi bi-briefcase me-2"></i>Multi-Industry</div>
                            <div class="muted small mt-1">Fintech, Insurance, Health & Government</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mini-stat">
                            <div class="fw-bold fs-5 text-danger"><i class="bi bi-cpu me-2"></i>Hybrid & Edge</div>
                            <div class="muted small mt-1">Telemetry, monitoring & distributed data</div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mini-stat">
                            <div class="fw-bold fs-5 text-danger"><i class="bi bi-check-circle me-2"></i>Production Ready</div>
                            <div class="muted small mt-1">Focus on reliability, testing & maintainability</div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-5">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
                <div>
                    <div class="eyebrow mb-2">Selected Work</div>
                    <h2 class="section-title">Cloud-first .NET delivery</h2>
                </div>
                <a href="#contact" class="btn btn-outline-light">Request a technical case study</a>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-xl-4">
                    <article class="project-card h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge text-bg-danger">Enterprise</span>
                            <i class="bi bi-server fs-4 text-danger"></i>
                        </div>
                        <h4>Global CRM & Operations Platform</h4>
                        <p class="text-white-50 mb-0">Delivered a secure, multi-tenant .NET platform using layered architecture, DI, role-based workflows, and Azure-hosted integrations for global operations.</p>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="project-card h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge text-bg-secondary">Fintech</span>
                            <i class="bi bi-currency-bitcoin fs-4 text-danger"></i>
                        </div>
                        <h4>Payments Gateway & Orchestration API</h4>
                        <p class="text-white-50 mb-0">Built resilient API services for transaction processing, webhook orchestration, and secure cloud workflows using event-driven and integration-first patterns.</p>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="project-card h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge text-bg-light text-dark">IoT / Edge</span>
                            <i class="bi bi-cpu fs-4 text-danger"></i>
                        </div>
                        <h4>Edge Monitoring & Telemetry Stack</h4>
                        <p class="text-white-50 mb-0">Created streaming, observability, and data collection services for distributed operational environments with edge-aware reliability concerns.</p>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="project-card h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge text-bg-danger">Cloud Migration</span>
                            <i class="bi bi-cloud fs-4 text-danger"></i>
                        </div>
                        <h4>Azure Modernization Program</h4>
                        <p class="text-white-50 mb-0">Modernized legacy systems into cloud-ready services with improved scalability, secure automation, CI/CD, and maintainable architecture patterns.</p>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="project-card h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge text-bg-secondary">Data Platform</span>
                            <i class="bi bi-diagram-3 fs-4 text-danger"></i>
                        </div>
                        <h4>Analytics Processing & Reporting Pipeline</h4>
                        <p class="text-white-50 mb-0">Developed ingestion, transformation, and reporting services for operational visibility with strong data integrity and integration patterns.</p>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4">
                    <article class="project-card h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge text-bg-light text-dark">DevOps</span>
                            <i class="bi bi-git fs-4 text-danger"></i>
                        </div>
                        <h4>CI/CD Enablement & Release Automation</h4>
                        <p class="text-white-50 mb-0">Built deployment pipelines, security controls, and observability frameworks to accelerate delivery with consistency and confidence.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="eyebrow mb-2">Core Services</div>
                    <h2 class="section-title mb-3">End-to-end engineering for ambitious digital products.</h2>
                    <p class="lead">I help teams design, build, and scale reliable software systems with .NET at the center and cloud infrastructure powered by AWS and Azure.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="service-card h-100">
                                <i class="bi bi-hdd-stack fs-3 text-danger mb-3"></i>
                                <h5>Cloud-Native Architecture</h5>
                                <p class="text-white-50 mb-0">Designing scalable .NET platforms with Clean Architecture, SOLID, DI, and modular service boundaries that support long-term growth.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-card h-100">
                                <i class="bi bi-cloud fs-3 text-danger mb-3"></i>
                                <h5>Microservices & Integration</h5>
                                <p class="text-white-50 mb-0">Building event-driven, API-led solutions that connect systems securely across cloud environments, data stores, and platforms.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-card h-100">
                                <i class="bi bi-diagram-3 fs-3 text-danger mb-3"></i>
                                <h5>Data Platforms & Persistence</h5>
                                <p class="text-white-50 mb-0">Working with SQL Server, PostgreSQL, MySQL, and modern persistence patterns to deliver performant, dependable data access layers.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-card h-100">
                                <i class="bi bi-arrow-repeat fs-3 text-danger mb-3"></i>
                                <h5>DevOps, Security & Edge Delivery</h5>
                                <p class="text-white-50 mb-0">Deploying with Docker, CI/CD, observability, and security-first practices to support cloud, hybrid, and edge-ready software delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="glass-card">
                        <div class="eyebrow mb-2">Approach</div>
                        <h2 class="section-title mb-3">Architecture first. Delivery without compromise.</h2>
                        <p class="quote-block mb-3">“I build software that is secure, scalable, and ready for real-world demand.”</p>
                        <p class="text-white-50 mb-2">I currently hold a baseline clearance and build secure, reliable applications for several government entities.</p>
                        <p class="text-white-50 mb-0">Developed products for Insurance Companies, Edutech companies, Payment Providers, Pharma, and Textile industries.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="glass-card timeline-line">
                        <div class="timeline-item mb-4">
                            <h6>Understand</h6>
                            <p class="text-white-50 small mb-0">Clarify business goals, constraints, and technical priorities to shape a pragmatic, outcome-driven architecture.</p>
                        </div>
                        <div class="timeline-item mb-4">
                            <h6>Build</h6>
                            <p class="text-white-50 small mb-0">Implement secure, maintainable solutions using .NET, DI, clean code practices, domain modeling, microservices, and modern cloud patterns.</p>
                        </div>
                        <div class="timeline-item">
                            <h6>Scale</h6>
                            <p class="text-white-50 small mb-0">Deploy with CI/CD, observability, performance tuning, and cloud-ready infrastructure for reliable growth across distributed environments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-lg-5">
                    <div class="glass-card h-100">
                        <div class="eyebrow mb-2">Let’s Build</div>
                        <h2 class="section-title mb-3">Need a full-stack engineer for your next platform?</h2>
                        <p class="lead mb-0">I help businesses deliver secure, scalable applications and cloud architectures using .NET, Azure, AWS, and practical engineering discipline.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                <div class="glass-card p-4 p-lg-5">
                    
                    <?php if (!empty($statusMsg)): ?>
                        <div class="<?= $statusClass; ?> mb-4" role="alert">
                            <?= $statusMsg; ?>
                        </div>
                    <?php endif; ?>

                    <form action="https://formspree.io/f/mqervwrb" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                            </div>
                            <div class="col-12">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="Company name">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Project Details</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tell me about your project, platform, or cloud requirements." required></textarea>
                            </div>
                            <div class="col-12 d-flex flex-wrap gap-3 justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary btn-lg">Send Enquiry</button>
                                <div class="small text-white-50">I respect your privacy. Your information will not be shared.</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>

    <footer class="py-4 border-top border-white border-opacity-10">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <div class="small text-white-50">© <span id="year"></span> Conroy Rodrigues. All rights reserved.</div>
            <div class="d-flex gap-3 align-items-center flex-wrap">
                <a href="https://www.facebook.com/conroy.rodrigues" target="_blank" class="footer-link" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.linkedin.com/in/conroy-rodrigues-73619222/" target="_blank" class="footer-link" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/conroyrodrigues" target="_blank" class="footer-link" aria-label="GitHub"><i class="bi bi-github"></i></a>
                <a href="#projects" class="footer-link">Projects</a>
                <a href="#services" class="footer-link">Services</a>
                <a href="#contact" class="footer-link">Contact</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>
</html>