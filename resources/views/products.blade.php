@extends('layouts.app')

@section('content')
<main class="pt-20">
    <section class="relative py-28 bg-[#0a1a0c] overflow-hidden">
        <!-- Aurora animated gradient -->
        <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/40 via-green-800/20 to-emerald-900/40 animate-aurora" data-parallax data-speed="0.15"></div>

        <!-- Radial glow layers -->
        <div class="absolute top-1/3 left-1/2 w-[1000px] h-[1000px] bg-emerald-400/10 rounded-full blur-[220px] mix-blend-screen" data-parallax data-speed="0.08"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[700px] h-[700px] bg-lime-400/15 rounded-full blur-[180px] mix-blend-screen" data-parallax data-speed="0.12"></div>
        <div class="absolute top-[10%] right-[10%] w-[450px] h-[450px] bg-green-600/20 rounded-full blur-[140px] animate-pulse"></div>

        <!-- Floating abstract shapes -->
        <span class="absolute w-[750px] h-[750px] rounded-full bg-emerald-900/30 blur-3xl top-[-300px] left-[-200px] animate-float-slow"></span>
        <span class="absolute w-[550px] h-[550px] rounded-full bg-green-700/25 blur-3xl bottom-[-220px] right-[-180px] animate-float-fast"></span>

        <!-- Particle canvas -->
        <canvas id="particles" class="absolute inset-0 w-full h-full"></canvas>

        <!-- Grid lines overlay -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:80px_80px] pointer-events-none"></div>

        <!-- Glass overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-emerald-950/20 to-[#0a1a0c]/85 backdrop-blur-[3px]"></div>

        <!-- Noise texture -->
        <div class="absolute inset-0 bg-[url('/images/noise.png')] opacity-10 mix-blend-overlay pointer-events-none"></div>

        <!-- Content -->
        <div class="relative z-10 mx-auto w-[92%] max-w-[1200px]">
            <!-- Section Heading -->
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-5 
                    bg-gradient-to-r from-lime-300 via-emerald-400 to-green-500 
                    bg-clip-text text-transparent drop-shadow-[0_2px_15px_rgba(0,255,100,0.4)]"
                    data-aos="fade-down">
                    What We Offer
                </h1>
                <p class="text-lg text-gray-300/90 leading-relaxed max-w-[65ch] mx-auto" data-aos="fade-up">
                    Popular rice varieties for every kitchen and business need. Wholesale and retail options available.
                </p>
            </div>

            <!-- Grid of Varieties -->
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @forelse(($varieties ?? []) as $i => $variety)
                @php
                $fade = ($i % 3 === 0) ? 'fadein-left' : (($i % 3 === 1) ? 'fadein-top' : 'fadein-right');
                @endphp
                <article class="group relative rounded-3xl 
                    bg-gradient-to-br from-emerald-950/70 to-green-900/60 
                    border border-emerald-800/40 backdrop-blur-xl
                    shadow-[0_15px_40px_rgba(0,0,0,0.55)]
                    transition-all duration-500 hover:scale-[1.07] hover:shadow-[0_25px_80px_rgba(0,0,0,0.7)] hover:border-lime-400/40
                    overflow-hidden cursor-pointer {{ $fade }}"
                    data-aos="zoom-in">

                    <!-- Image with glow -->
                    <div class="relative overflow-hidden">
                        <img class="w-full h-56 object-contain p-5 transition-transform duration-500 group-hover:scale-110 drop-shadow-[0_0_18px_rgba(0,255,150,0.25)]" src="/images/{{ $variety->image }}" alt="{{ $variety->name }}" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <!-- Shine effect -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/20 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></div>
                    </div>

                    <!-- Card Content -->
                    <div class="px-6 pt-4 pb-6 text-center relative">
                        <div class="mb-3 flex justify-center">
                            <span class="inline-flex items-center gap-2 rounded-xl border-2 border-lime-400/60 bg-white/95 px-4 py-2 shadow-md group-hover:shadow-lime-400/40 transition">
                                <img src="/images/logo.v2.png" alt="Bigasan Hub logo" class="h-6 w-auto" />
                            </span>
                        </div>
                        <h3 class="m-0 mb-2 text-xl font-semibold text-white group-hover:text-lime-300 transition">
                            {{ $variety->name }}
                        </h3>
                    </div>

                    <!-- Glow border shimmer -->
                    <div class="absolute inset-0 border-2 border-transparent group-hover:border-lime-400/50 rounded-3xl transition duration-500"></div>
                </article>
                @empty
                <div class="col-span-full text-center text-gray-400 py-8">
                    <p>No product varieties available yet.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
</main>

@include('partials.modals.contact-modal')

<style>
    @keyframes float-slow {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(60px, -40px);
        }
    }

    @keyframes float-fast {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(-50px, 30px);
        }
    }

    @keyframes aurora {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .animate-aurora {
        background-size: 200% 200%;
        animation: aurora 22s ease-in-out infinite;
    }

    .animate-float-slow {
        animation: float-slow 18s ease-in-out infinite;
    }

    .animate-float-fast {
        animation: float-fast 12s ease-in-out infinite;
    }
</style>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
        easing: 'ease-out-quart',
        once: false
    });

    // Parallax effect
    document.addEventListener("scroll", () => {
        const scrollY = window.scrollY;
        document.querySelectorAll("[data-parallax]").forEach(el => {
            const speed = parseFloat(el.getAttribute("data-speed"));
            el.style.transform = `translateY(${scrollY * speed}px)`;
        });
    });

    // Particles with connections
    const canvas = document.getElementById("particles");
    const ctx = canvas.getContext("2d");
    let particles = [];

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();

    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2 + 1;
            this.speedX = (Math.random() - 0.5) * 0.6;
            this.speedY = (Math.random() - 0.5) * 0.6;
        }
        update() {
            this.x += this.speedX;
            this.y += this.speedY;
            if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
            if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = "rgba(120,255,180,0.35)";
            ctx.fill();
        }
    }

    function initParticles() {
        particles = [];
        for (let i = 0; i < 80; i++) {
            particles.push(new Particle());
        }
    }

    function connectParticles() {
        for (let a = 0; a < particles.length; a++) {
            for (let b = a; b < particles.length; b++) {
                let dx = particles[a].x - particles[b].x;
                let dy = particles[a].y - particles[b].y;
                let distance = Math.sqrt(dx * dx + dy * dy);
                if (distance < 120) {
                    ctx.strokeStyle = "rgba(100,255,150,0.15)";
                    ctx.lineWidth = 1;
                    ctx.beginPath();
                    ctx.moveTo(particles[a].x, particles[a].y);
                    ctx.lineTo(particles[b].x, particles[b].y);
                    ctx.stroke();
                }
            }
        }
    }

    function animateParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => {
            p.update();
            p.draw();
        });
        connectParticles();
        requestAnimationFrame(animateParticles);
    }

    initParticles();
    animateParticles();
</script>
@endsection