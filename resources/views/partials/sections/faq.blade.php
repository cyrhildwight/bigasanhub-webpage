<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<section class="relative py-28 bg-[#0a1a0c] overflow-hidden">
    <!-- Aurora gradient waves -->
    <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/40 via-green-800/20 to-emerald-900/40 animate-aurora" data-parallax data-speed="0.2"></div>

    <!-- Radial glow effects -->
    <div class="absolute top-1/3 left-1/2 w-[900px] h-[900px] bg-emerald-500/10 rounded-full blur-[200px]" data-parallax data-speed="0.1"></div>
    <div class="absolute bottom-1/4 right-1/3 w-[600px] h-[600px] bg-lime-400/10 rounded-full blur-[160px]" data-parallax data-speed="0.15"></div>

    <!-- Floating glowing shapes -->
    <span class="absolute w-[650px] h-[650px] rounded-full bg-emerald-900/30 blur-3xl top-[-250px] left-[-200px] animate-float" data-parallax data-speed="0.25"></span>
    <span class="absolute w-[500px] h-[500px] rounded-full bg-green-700/25 blur-3xl bottom-[-200px] right-[-160px] animate-float" data-parallax data-speed="0.2"></span>
    <span class="absolute w-[300px] h-[300px] rounded-full bg-lime-500/15 blur-2xl top-[280px] right-[120px] animate-float" data-parallax data-speed="0.35"></span>
    <span class="absolute w-[350px] h-[350px] rounded-full bg-emerald-500/10 blur-3xl bottom-[180px] left-[200px] animate-float" data-parallax data-speed="0.3"></span>

    <!-- Starry particles -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <span class="absolute w-1.5 h-1.5 bg-lime-300/70 rounded-full blur-[2px] top-[20%] left-[30%] animate-float-slow"></span>
        <span class="absolute w-2 h-2 bg-emerald-400/80 rounded-full blur-[2px] top-[60%] left-[75%] animate-float-slow"></span>
        <span class="absolute w-1.5 h-1.5 bg-green-500/70 rounded-full blur-[2px] top-[40%] left-[55%] animate-float-slow"></span>
        <span class="absolute w-2 h-2 bg-lime-400/60 rounded-full blur-[3px] top-[75%] left-[20%] animate-float-slow"></span>
        <span class="absolute w-1 h-1 bg-white/50 rounded-full blur-[1px] top-[10%] left-[80%] animate-float-slow"></span>
        <span class="absolute w-1 h-1 bg-emerald-300/50 rounded-full blur-[1px] top-[85%] left-[40%] animate-float-slow"></span>
    </div>

    <!-- FAQ Content -->
    <div class="relative z-10 mx-auto w-[92%] max-w-[1200px]">
        <!-- Section Title -->
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-5 
                bg-gradient-to-r from-lime-300 via-emerald-400 to-green-500 
                bg-clip-text text-transparent"
                data-aos="fade-down">
                Frequently Asked Questions
            </h2>
            <p class="text-lg text-gray-300/90 leading-relaxed max-w-[65ch] mx-auto" data-aos="fade-up">
                Quick answers to common questions about supply, delivery, and pricing.
            </p>
        </div>

        <!-- FAQ Cards -->
        <div class="grid gap-6 md:grid-cols-2">
            @forelse(($faqs ?? []) as $faq)
            <details class="group relative rounded-3xl 
                bg-gradient-to-br from-emerald-950/70 to-green-900/60 
                border border-emerald-800/40 backdrop-blur-xl
                shadow-[0_15px_40px_rgba(0,0,0,0.55)]
                transition-all duration-500 hover:scale-[1.02] hover:shadow-[0_25px_70px_rgba(0,0,0,0.6)] hover:border-lime-400/40
                p-6" data-aos="fade-up">

                <summary class="cursor-pointer font-semibold text-white text-lg flex justify-between items-center">
                    <span class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-lime-300 group-hover:animate-bounce" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14.59l-3.29-3.3 1.42-1.41 1.87 1.88 3.88-3.88 1.41 1.41L13 16.59z" />
                        </svg>
                        {{ $faq->question }}
                    </span>
                    <span class="ml-2 transition-transform duration-300 group-open:rotate-45 text-lime-300 font-bold text-xl">+</span>
                </summary>

                <div class="mt-4 text-gray-300 leading-relaxed text-sm md:text-base transition-all duration-500 transform translate-y-[-5px] opacity-0 group-open:translate-y-0 group-open:opacity-100">
                    {{ $faq->answer }}
                </div>
            </details>
            @empty
            <div class="col-span-full text-center text-gray-400 py-8">
                <p>No FAQs available yet.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<style>
    @keyframes float {
        0% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(40px, -30px);
        }

        100% {
            transform: translate(0, 0);
        }
    }

    @keyframes float-slow {
        0% {
            transform: translateY(0);
            opacity: 0.6;
        }

        50% {
            transform: translateY(-25px);
            opacity: 1;
        }

        100% {
            transform: translateY(0);
            opacity: 0.6;
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

    .animate-float {
        animation: float 14s ease-in-out infinite;
    }

    .animate-float-slow {
        animation: float-slow 12s ease-in-out infinite;
    }

    .animate-aurora {
        background-size: 200% 200%;
        animation: aurora 18s ease-in-out infinite;
    }

    /* Remove default summary arrow */
    summary::-webkit-details-marker {
        display: none;
    }
</style>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
        easing: 'ease-out-quart',
        once: false
    });

    // Parallax scroll effect
    document.addEventListener("scroll", () => {
        const scrollY = window.scrollY;
        document.querySelectorAll("[data-parallax]").forEach(el => {
            const speed = parseFloat(el.getAttribute("data-speed"));
            el.style.transform = `translateY(${scrollY * speed}px)`;
        });
    });
</script>