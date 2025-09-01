<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<section class="relative overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-[#061a13]">
        <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/40 via-cyan-900/20 to-emerald-800/40 animate-aurora opacity-90"></div>
        <div id="faq-bg-layer" class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-emerald-900/25 via-transparent to-cyan-900/30 will-change-transform"></div>
        <div class="absolute top-1/2 left-1/2 w-[1600px] h-[1600px] -translate-x-1/2 -translate-y-1/2 animate-[spin_50s_linear_infinite] bg-[radial-gradient(circle,rgba(16,185,129,0.15)_0%,transparent_70%)] blur-3xl"></div>
        <canvas id="faq-particle-canvas" class="absolute inset-0 w-full h-full"></canvas>
    </div>

    <!-- Content -->
    <div class="relative z-10 mx-auto w-[92%] max-w-[1200px] py-24">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="mt-4 text-4xl md:text-5xl font-extrabold tracking-tight text-white">
                Frequently Asked <span class="bg-gradient-to-r from-emerald-300 via-emerald-400 to-cyan-400 bg-clip-text text-transparent">Questions</span>
            </h2>
            <div class="mx-auto mt-2 h-1 w-24 rounded-full bg-gradient-to-r from-emerald-300 via-emerald-400 to-cyan-400 animate-pulse"></div>
            <p class="mt-5 max-w-[70ch] mx-auto text-lg text-emerald-100/70 leading-relaxed">
                Quick answers to common questions about supply, delivery, and pricing.
            </p>
        </div>

        <!-- FAQ Cards -->
        <div class="grid gap-6 md:grid-cols-2">
            @forelse(($faqs ?? []) as $faq)
            <details class="group relative rounded-3xl bg-[#0b2f1c]/30 border border-[#10b981]/40 p-6 backdrop-blur-lg shadow-lg hover:shadow-[0_0_20px_rgba(16,185,129,0.6)] transition-all duration-400" data-aos="fade-up">
                <summary class="cursor-pointer font-semibold text-white text-lg flex justify-between items-center">
                    <span class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-emerald-300 group-hover:animate-bounce" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14.59l-3.29-3.3 1.42-1.41 1.87 1.88 3.88-3.88 1.41 1.41L13 16.59z" />
                        </svg>
                        {{ $faq->question }}
                    </span>
                    <span class="ml-2 transition-transform duration-300 group-open:rotate-45 text-emerald-300 font-bold text-xl">+</span>
                </summary>
                <div class="mt-4 text-white/80 leading-relaxed text-sm md:text-base transition-all duration-500 transform translate-y-[-5px] opacity-0 group-open:translate-y-0 group-open:opacity-100">
                    {{ $faq->answer }}
                </div>
            </details>
            @empty
            <div class="col-span-full text-center text-white/50 py-8">
                <p>No FAQs available yet.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<style>
    /* Aurora Animation */
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
        animation: aurora 15s ease infinite;
    }

    /* FAQ Card Open Animation */
    details[open] summary~div {
        animation: fadeExpand 0.5s ease forwards;
    }

    @keyframes fadeExpand {
        0% {
            opacity: 0;
            transform: translateY(-10px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    summary::-webkit-details-marker {
        display: none;
    }

    /* Glow on hover */
    details:hover {
        box-shadow: 0 15px 40px rgba(16, 185, 129, 0.5), 0 0 25px rgba(16, 185, 129, 0.25) inset;
    }

    /* Plus icon rotation */
    details[open] span:last-child {
        transform: rotate(45deg);
    }

    /* Particle canvas handled in JS */
</style>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
        easing: 'ease-out-quart',
        once: false
    });

    // Particle canvas for FAQ section with uniform small particles
    const faqCanvas = document.getElementById('faq-particle-canvas');
    const faqCtx = faqCanvas.getContext('2d');
    let faqParticles = [];
    const numFaqParticles = 120; // denser, smaller, uniform

    function resizeFaqCanvas() {
        faqCanvas.width = window.innerWidth;
        faqCanvas.height = window.innerHeight;
    }
    window.addEventListener("resize", resizeFaqCanvas);
    resizeFaqCanvas();

    for (let i = 0; i < numFaqParticles; i++) {
        faqParticles.push({
            x: Math.random() * faqCanvas.width,
            y: Math.random() * faqCanvas.height,
            size: 3, // uniform small size
            speedX: (Math.random() - 0.5) * 0.3,
            speedY: (Math.random() - 0.5) * 0.3,
            opacity: Math.random() * 0.3 + 0.2
        });
    }

    function drawFaqParticles() {
        faqCtx.clearRect(0, 0, faqCanvas.width, faqCanvas.height);
        faqParticles.forEach(p => {
            p.x += p.speedX;
            p.y += p.speedY;
            if (p.x < 0 || p.x > faqCanvas.width) p.speedX *= -1;
            if (p.y < 0 || p.y > faqCanvas.height) p.speedY *= -1;

            faqCtx.beginPath();
            const gradient = faqCtx.createRadialGradient(p.x, p.y, 0, p.x, p.y, p.size * 4);
            gradient.addColorStop(0, `rgba(16,185,129,${p.opacity})`);
            gradient.addColorStop(1, 'transparent');
            faqCtx.fillStyle = gradient;
            faqCtx.arc(p.x, p.y, p.size * 4, 0, Math.PI * 2);
            faqCtx.fill();
        });
        requestAnimationFrame(drawFaqParticles);
    }
    drawFaqParticles();
</script>