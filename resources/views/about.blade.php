@extends('layouts.app')

@section('content')
<main class="pt-20">

    {{-- Hero Section --}}
    <section class="relative overflow-hidden">
        <!-- Background Layers -->
        <div class="absolute inset-0 bg-[#061a13]">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/40 via-cyan-900/20 to-emerald-800/40 animate-aurora opacity-90"></div>
            <div id="bg-layer-hero" class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-emerald-900/25 via-transparent to-cyan-900/30 will-change-transform"></div>
            <canvas id="hero-particle-canvas" class="absolute inset-0 w-full h-full"></canvas>
        </div>

        <!-- Content -->
        <div class="relative z-10 mx-auto w-[92%] max-w-[1200px] py-24 grid items-center gap-12 md:grid-cols-2">
            <div data-aos="fade-right">
                <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4">
                    About <span class="bg-gradient-to-r from-emerald-300 via-emerald-400 to-cyan-400 bg-clip-text text-transparent">Bigasan Hub</span>
                </h1>
                <p class="text-lg text-emerald-100/80 leading-relaxed">
                    BIGASAN HUB is a premier rice retail and wholesale business dedicated to providing quality rice products to households, restaurants, retailers, and institutions. With a focus on affordability and reliability, BIGASAN HUB aims to become a trusted name in the rice industry across the Philippines.
                </p>
            </div>
            <div id="parallax-about" class="relative rounded-3xl overflow-hidden border border-emerald-500/25 transition-transform duration-700 hover:scale-[1.05] hover:shadow-[0_0_55px_rgba(6,182,212,0.6)]" data-aos="fade-left">
                <img src="/images/download.jpg" alt="Sacks of rice" class="w-full h-[400px] object-cover">
            </div>
        </div>
    </section>

    {{-- Vision, Mission & Core Values --}}
    <section class="py-[70px] relative">
        <div class="mx-auto w-[92%] max-w-[1200px]">
            <h2 class="text-center text-4xl font-extrabold text-white mb-12">
                Vision, Mission & Core Values
            </h2>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- Vision --}}
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3 7h7l-5.5 4 2 7L12 16l-6.5 3 2-7L2 8h7z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white">Vision</h3>
                        <p class="mt-2 text-emerald-100/70 leading-relaxed">
                            To be the leading rice distribution hub in the Philippines, offering quality rice varieties through an extensive network of franchises and retail outlets.
                        </p>
                    </div>
                </div>

                {{-- Mission --}}
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0H5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white">Mission</h3>
                        <p class="mt-2 text-emerald-100/70 leading-relaxed">
                            To deliver quality rice at competitive prices, ensuring accessibility and affordability while promoting food security.
                        </p>
                    </div>
                </div>

                {{-- Core Values --}}
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white">Core Values</h3>
                        <ul class="mt-2 space-y-2 text-emerald-100/80">
                            <li>Quality: Commitment to providing the best rice varieties.</li>
                            <li>Integrity: Transparent operations and fair pricing.</li>
                            <li>Customer Satisfaction: Ensuring the best buying experience.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Franchise Section --}}
    <section class="py-[70px] relative">
        <div class="mx-auto w-[92%] max-w-[1200px]">
            <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white mb-8">
                "BIGASAN HUB: Your Premier Rice Supplier for Quality & Affordable"
            </h2>
            <div class="grid md:grid-cols-2 gap-8">
                {{-- Features --}}
                <div class="feature-card flex-col" data-aos="fade-right">
                    <h3 class="text-xl font-semibold text-white mb-4 border-b border-emerald-400 pb-2">Our Franchise Packages Include:</h3>
                    <ul class="space-y-3 text-emerald-100/80">
                        @forelse(($features ?? []) as $feature)
                        <li class="flex gap-2 items-start">
                            <span class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-emerald-400 text-white">✓</span>
                            <div>
                                <div class="font-semibold">{{ $feature->title }}</div>
                                @if(!empty($feature->description))
                                <div class="text-sm">{{ $feature->description }}</div>
                                @endif
                            </div>
                        </li>
                        @empty
                        <li>No features listed yet.</li>
                        @endforelse
                    </ul>
                </div>

                {{-- Target Market --}}
                <div class="feature-card flex-col" data-aos="fade-left">
                    <h3 class="text-xl font-semibold text-white mb-4 border-b border-emerald-400 pb-2">Target Market</h3>
                    <ul class="space-y-3 text-emerald-100/80">
                        <li>Household Consumers</li>
                        <li>Rice Resellers</li>
                        <li>Restaurants & Food Businesses</li>
                        <li>Sari-sari Stores & Mini Groceries</li>
                        <li>Corporate & Government Institutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</main>

{{-- Scripts --}}
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>
    AOS.init({
        duration: 1000,
        easing: 'ease-out-quart',
        once: false
    });

    // Parallax hover card
    const card = document.querySelector("#parallax-about");
    if (card) {
        card.addEventListener("mousemove", e => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.3;
            const y = (e.clientY - rect.top) / rect.height - 0.3;
            gsap.to(card, {
                rotationY: x * 20,
                rotationX: -y * 20,
                transformPerspective: 800,
                ease: "power2.out",
                duration: 0.3
            });
        });
        card.addEventListener("mouseleave", () => {
            gsap.to(card, {
                rotationY: 0,
                rotationX: 0,
                ease: "power2.out",
                duration: 0.8
            });
        });
    }

    // Particle canvas
    const canvas = document.getElementById("hero-particle-canvas"),
        ctx = canvas.getContext("2d");
    let particles = [],
        numParticles = 70,
        mouse = { x: null, y: null, radius: 120 };

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();
    window.addEventListener("mousemove", e => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });
    for (let i = 0; i < numParticles; i++) {
        particles.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            size: Math.random() * 2 + 1,
            speedX: (Math.random() - 0.5) * 0.8,
            speedY: (Math.random() - 0.5) * 0.8,
            opacity: Math.random() * 0.6 + 0.3
        });
    }

    function drawParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => {
            p.x += p.speedX;
            p.y += p.speedY;
            if (p.x < 0 || p.x > canvas.width) p.speedX *= -1;
            if (p.y < 0 || p.y > canvas.height) p.speedY *= -1;
            if (mouse.x && mouse.y) {
                let dx = p.x - mouse.x,
                    dy = p.y - mouse.y,
                    dist = Math.sqrt(dx*dx + dy*dy);
                if (dist < mouse.radius) {
                    p.x += dx/dist*2;
                    p.y += dy/dist*2;
                }
            }
            ctx.beginPath();
            let gradient = ctx.createRadialGradient(p.x, p.y, 0, p.x, p.y, p.size*6);
            gradient.addColorStop(0, `rgba(255,255,200,${p.opacity})`);
            gradient.addColorStop(1, "transparent");
            ctx.fillStyle = gradient;
            ctx.arc(p.x, p.y, p.size*6, 0, Math.PI*2);
            ctx.fill();
            ctx.beginPath();
            ctx.fillStyle = `rgba(255,255,180,${p.opacity})`;
            ctx.ellipse(p.x, p.y, p.size*1.8, p.size, Math.PI/4, 0, Math.PI*2);
            ctx.fill();
        });
        requestAnimationFrame(drawParticles);
    }
    drawParticles();
</script>

<style>
    /* Aurora Animations */
    @keyframes aurora {
        0% {background-position:0% 50%}
        50% {background-position:100% 50%}
        100% {background-position:0% 50%}
    }
    .animate-aurora {background-size:200% 200%; animation: aurora 15s ease infinite;}

    /* Feature Card Styles */
    .feature-card {
        position: relative;
        display: flex;
        gap: 1rem;
        align-items: start;
        padding: 1.75rem;
        border-radius: 1rem;
        background: rgba(6, 182, 212, 0.2);
        border: 1px solid rgba(6, 182, 212, 0.3);
        backdrop-filter: blur(6px);
        transition: all .4s;
    }
    .feature-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 15px 45px rgba(6, 182, 212, 0.35);
        border-color: rgba(6, 182, 212, 0.6);
    }
    .feature-card .icon {
        flex-shrink: 0;
        display: grid;
        place-items: center;
        width: 3rem;
        height: 3rem;
        border-radius: .75rem;
        background: linear-gradient(135deg, rgba(16, 185, 129, .3), rgba(6, 182, 212, .3));
        color: #5eead4;
        box-shadow: 0 0 18px rgba(6, 182, 212, .4);
    }
</style>
@endsection
