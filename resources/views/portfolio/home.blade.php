@extends('layouts.app')

@section('title', 'Justine Batuhan | IT Portfolio')

@section('content')

{{-- ── Hero ──────────────────────────────────────────── --}}
<section id="hero" class="hero">
    <div class="container" style="position:relative;z-index:10;">
        @if(session('success'))
            <div class="alert alert-success" style="position:fixed;top:90px;right:1.5rem;z-index:2000;max-width:380px;">
                ✅ {{ session('success') }}
            </div>
        @endif

        <div class="hero-inner">
            <div class="hero-text">
                <p class="hero-tag">👋 Hello, World!</p>
                <h1>I'm <span class="gradient-text">Justine Batuhan</span></h1>
                <h2 style="font-size:1.5rem;font-weight:600;color:var(--text-muted);margin-bottom:1rem;">
                    <span id="typed-text" style="color:var(--accent-light)">IT Student</span><span style="border-right:2px solid var(--accent-light);animation:blink 1s step-end infinite;">&nbsp;</span>
                </h2>
                <p class="hero-sub">
                    An aspiring web developer from <strong>Madridejos Community College</strong>, pursuing a degree in Information Technology. Passionate about building beautiful, functional web applications.
                </p>
                <div class="hero-btns">
                    <a href="#projects" class="btn btn-primary">🚀 View Projects</a>
                    <a href="#contact"  class="btn btn-outline">💬 Get in Touch</a>
                </div>
            </div>
            <div>
                <div class="hero-card">
                    <div class="hero-info-item">
                        <div class="hero-info-icon">🎓</div>
                        <div>
                            <div class="hero-info-label">School</div>
                            <div class="hero-info-value">Madridejos Community College</div>
                        </div>
                    </div>
                    <div class="hero-info-item">
                        <div class="hero-info-icon">📚</div>
                        <div>
                            <div class="hero-info-label">Course</div>
                            <div class="hero-info-value">BS Information Technology</div>
                        </div>
                    </div>
                    <div class="hero-info-item">
                        <div class="hero-info-icon">💻</div>
                        <div>
                            <div class="hero-info-label">Focus</div>
                            <div class="hero-info-value">Full-Stack Web Development</div>
                        </div>
                    </div>
                    <div class="hero-info-item">
                        <div class="hero-info-icon">📍</div>
                        <div>
                            <div class="hero-info-label">Location</div>
                            <div class="hero-info-value">Madridejos, Cebu, Philippines</div>
                        </div>
                    </div>
                    <div style="margin-top:1.5rem;padding-top:1.5rem;border-top:1px solid var(--border);display:flex;gap:1rem;justify-content:center;">
                        <span class="badge badge-purple">PHP</span>
                        <span class="badge badge-cyan">Laravel</span>
                        <span class="badge badge-green">MySQL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ── Running Person Animation ── --}}
    <div class="runner-lane">
        <div class="runner-wrap">
            <svg class="runner-svg" viewBox="0 0 80 100" xmlns="http://www.w3.org/2000/svg" pointer-events="none" style="pointer-events:none;">
                <!-- Head -->
                <circle cx="40" cy="12" r="9" fill="none" stroke="var(--accent-light)" stroke-width="3"/>
                <!-- Body -->
                <line x1="40" y1="21" x2="40" y2="55" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round"/>
                <!-- Arms -->
                <line class="arm-left"  x1="40" y1="32" x2="20" y2="44" stroke="var(--cyan)" stroke-width="2.5" stroke-linecap="round"/>
                <line class="arm-right" x1="40" y1="32" x2="60" y2="44" stroke="var(--cyan)" stroke-width="2.5" stroke-linecap="round"/>
                <!-- Legs -->
                <line class="leg-left"  x1="40" y1="55" x2="22" y2="78" stroke="var(--accent-light)" stroke-width="2.5" stroke-linecap="round"/>
                <line class="leg-right" x1="40" y1="55" x2="58" y2="78" stroke="var(--accent-light)" stroke-width="2.5" stroke-linecap="round"/>
                <!-- Lower legs -->
                <line class="shin-left"  x1="22" y1="78" x2="10" y2="96" stroke="var(--accent-light)" stroke-width="2.5" stroke-linecap="round"/>
                <line class="shin-right" x1="58" y1="78" x2="70" y2="96" stroke="var(--accent-light)" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
        </div>
        <!-- Ground line -->
        <div class="runner-ground"></div>
    </div>
</section>

{{-- ── About ─────────────────────────────────────────── --}}
<section id="about" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">About Me</span>
            <h2 class="section-title">Who I <span class="gradient-text">Am</span></h2>
            <div class="section-divider"></div>
        </div>
        <div class="about-grid">
            <div class="about-text">
                <h3>Hi, I'm Justine! 👋</h3>
                <p>
                    I'm a passionate IT student at Madridejos Community College with a deep interest in web development.
                    I love turning ideas into reality through clean code and thoughtful design.
                </p>
                <p>
                    My journey started with HTML and CSS, and has grown into building full-stack web applications
                    using PHP, Laravel, and MySQL. I enjoy learning new technologies and solving real-world problems through software.
                </p>
                <p>
                    When I'm not coding, I enjoy exploring new tech trends, tinkering with side projects,
                    and contributing to my school community.
                </p>
                <div class="about-details">
                    <div class="about-detail">
                        <div class="about-detail-label">Name</div>
                        <div class="about-detail-value">Justine Batuhan</div>
                    </div>
                    <div class="about-detail">
                        <div class="about-detail-label">School</div>
                        <div class="about-detail-value">Madridejos Comm. College</div>
                    </div>
                    <div class="about-detail">
                        <div class="about-detail-label">Course</div>
                        <div class="about-detail-value">BS Information Technology</div>
                    </div>
                    <div class="about-detail">
                        <div class="about-detail-label">Status</div>
                        <div class="about-detail-value" style="color:var(--success);">🟢 Open to Opportunities</div>
                    </div>
                </div>
            </div>
            <div class="about-avatar-container">
                <img src="/images/profile.png" alt="Justine Batuhan" class="about-img">
            </div>
        </div>
    </div>
</section>

{{-- ── Skills ────────────────────────────────────────── --}}
<section id="skills" class="section skills-bg">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Expertise</span>
            <h2 class="section-title">My <span class="gradient-text">Skills</span></h2>
            <div class="section-divider"></div>
        </div>

        @if($skills->isEmpty())
            <p style="text-align:center;color:var(--text-muted);">No skills added yet.</p>
        @else
        <div class="skills-grid">
            @foreach(['Frontend','Backend','Tools'] as $cat)
                @if(isset($skills[$cat]))
                <div class="skill-category">
                    <div class="skill-cat-title">
                        @if($cat === 'Frontend') 🎨 @elseif($cat === 'Backend') ⚙️ @else 🛠️ @endif
                        {{ $cat }}
                    </div>
                    @foreach($skills[$cat] as $skill)
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">{{ $skill->name }}</span>
                            <span class="skill-pct">{{ $skill->level }}%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-fill" data-level="{{ $skill->level }}"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            @endforeach
        </div>
        @endif
    </div>
</section>

{{-- ── Projects ──────────────────────────────────────── --}}
<section id="projects" class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Portfolio</span>
            <h2 class="section-title">My <span class="gradient-text">Projects</span></h2>
            <div class="section-divider"></div>
        </div>

        @if($projects->isEmpty())
            <p style="text-align:center;color:var(--text-muted);">No projects yet. Check back soon!</p>
        @else
        <div class="projects-grid">
            @foreach($projects as $project)
            <div class="project-card">
                <div class="project-img">
                    @if($project->image_url)
                        <img src="{{ $project->image_url }}" alt="{{ $project->title }}" style="width:100%;height:100%;object-fit:cover;">
                    @else
                        💡
                    @endif
                </div>
                <div class="project-body">
                    @if($project->featured)
                        <div class="project-featured">
                            <span class="badge badge-purple">⭐ Featured</span>
                        </div>
                    @endif
                    <h3 class="project-title">{{ $project->title }}</h3>
                    <p class="project-desc">{{ $project->description }}</p>
                    <div class="project-tech">
                        @foreach($project->tech_array as $tech)
                            <span class="tech-tag">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <div class="project-links">
                        @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" class="btn btn-outline btn-sm">🐙 GitHub</a>
                        @endif
                        @if($project->live_url)
                            <a href="{{ $project->live_url }}" target="_blank" class="btn btn-primary btn-sm">🌐 Live Demo</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

{{-- ── Contact ───────────────────────────────────────── --}}
<section id="contact" class="section skills-bg">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Contact</span>
            <h2 class="section-title">Get In <span class="gradient-text">Touch</span></h2>
            <div class="section-divider"></div>
        </div>
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Let's Work Together!</h3>
                <p>Have a project in mind, a question, or just want to say hi? My inbox is always open. I'll try my best to get back to you!</p>
                <div class="contact-detail">
                    <div class="contact-icon">📧</div>
                    <div class="contact-detail-text">
                        <div class="label">Email</div>
                        <div class="value">justine.batuhan@mcc.edu.ph</div>
                    </div>
                </div>
                <div class="contact-detail">
                    <div class="contact-icon">📱</div>
                    <div class="contact-detail-text">
                        <div class="label">Phone</div>
                        <div class="value">09505223146</div>
                    </div>
                </div>
                <div class="contact-detail">
                    <div class="contact-icon">🎓</div>
                    <div class="contact-detail-text">
                        <div class="label">School</div>
                        <div class="value">Madridejos Community College</div>
                    </div>
                </div>
                <div class="contact-detail">
                    <div class="contact-icon">📍</div>
                    <div class="contact-detail-text">
                        <div class="label">Location</div>
                        <div class="value">Madridejos, Cebu, PH</div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form id="contact-form" action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $e) {{ $e }}<br> @endforeach
                        </div>
                    @endif
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Juan Dela Cruz" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="juan@email.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Project Inquiry" required>
                    </div>
                    <div class="form-group">
                        <label for="body">Message</label>
                        <textarea id="body" name="body" placeholder="Tell me about your project or question..." required>{{ old('body') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
                        📨 Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
@keyframes blink { 0%,100%{opacity:1} 50%{opacity:0} }

/* ── Runner Lane ── */
.runner-lane {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 110px;
    overflow: hidden;
    pointer-events: none;
    z-index: 5;
}

.runner-ground {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--accent), var(--cyan), var(--accent), transparent);
    opacity: 0.4;
}

.runner-svg {
    width: 56px;
    height: 70px;
    filter: drop-shadow(0 0 6px var(--accent-light));
}

/* Slide + Bob on the wrap */
.runner-wrap {
    position: absolute;
    bottom: 2px;
    left: -100px;
    animation: runner-slide 6s linear infinite, runner-bob 0.35s ease-in-out infinite alternate;
}

/* Bob up/down */
@keyframes runner-slide {
    0%   { left: -100px; }
    100% { left: calc(100vw + 100px); }
}

@keyframes runner-bob {
    0%   { transform: translateY(0px); }
    100% { transform: translateY(-6px); }
}

/* Arms swing */
.arm-left {
    transform-origin: 40px 32px;
    animation: arm-l 0.35s ease-in-out infinite alternate;
}
.arm-right {
    transform-origin: 40px 32px;
    animation: arm-r 0.35s ease-in-out infinite alternate;
}
@keyframes arm-l {
    0%   { transform: rotate(-25deg); }
    100% { transform: rotate(25deg); }
}
@keyframes arm-r {
    0%   { transform: rotate(25deg); }
    100% { transform: rotate(-25deg); }
}

/* Legs swing */
.leg-left {
    transform-origin: 40px 55px;
    animation: leg-l 0.35s ease-in-out infinite alternate;
}
.leg-right {
    transform-origin: 40px 55px;
    animation: leg-r 0.35s ease-in-out infinite alternate;
}
.shin-left {
    transform-origin: 22px 78px;
    animation: shin-l 0.35s ease-in-out infinite alternate;
}
.shin-right {
    transform-origin: 58px 78px;
    animation: shin-r 0.35s ease-in-out infinite alternate;
}
@keyframes leg-l {
    0%   { transform: rotate(-30deg); }
    100% { transform: rotate(30deg); }
}
@keyframes leg-r {
    0%   { transform: rotate(30deg); }
    100% { transform: rotate(-30deg); }
}
@keyframes shin-l {
    0%   { transform: rotate(0deg); }
    100% { transform: rotate(-40deg); }
}
@keyframes shin-r {
    0%   { transform: rotate(-40deg); }
    100% { transform: rotate(0deg); }
}
</style>
@endpush
