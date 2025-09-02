<section class="relative py-28 bg-[#0a1a0c] overflow-hidden">
    <!-- Aurora gradient waves -->
    <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/40 via-green-800/20 to-emerald-900/40 animate-aurora" data-parallax data-speed="0.2"></div>

    <!-- Radial glow effects -->
    <div class="absolute top-1/3 left-1/2 w-[900px] h-[900px] bg-emerald-500/10 rounded-full blur-[200px]" data-parallax data-speed="0.1"></div>
    <div class="absolute bottom-1/4 right-1/3 w-[600px] h-[600px] bg-lime-400/10 rounded-full blur-[160px]" data-parallax data-speed="0.15"></div>

    <!-- Large floating glowing shapes -->
    <span class="absolute w-[650px] h-[650px] rounded-full bg-emerald-900/30 blur-3xl top-[-250px] left-[-200px] animate-float" data-parallax data-speed="0.25"></span>
    <span class="absolute w-[500px] h-[500px] rounded-full bg-green-700/25 blur-3xl bottom-[-200px] right-[-160px] animate-float" data-parallax data-speed="0.2"></span>
    <span class="absolute w-[300px] h-[300px] rounded-full bg-lime-500/15 blur-2xl top-[280px] right-[120px] animate-float" data-parallax data-speed="0.35"></span>
    <span class="absolute w-[350px] h-[350px] rounded-full bg-emerald-500/10 blur-3xl bottom-[180px] left-[200px] animate-float" data-parallax data-speed="0.3"></span>

    <!-- Starry particles background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <span class="absolute w-1.5 h-1.5 bg-lime-300/70 rounded-full blur-[2px] top-[20%] left-[30%] animate-float-slow" data-parallax data-speed="0.4"></span>
        <span class="absolute w-2 h-2 bg-emerald-400/80 rounded-full blur-[2px] top-[60%] left-[75%] animate-float-slow" data-parallax data-speed="0.35"></span>
        <span class="absolute w-1.5 h-1.5 bg-green-500/70 rounded-full blur-[2px] top-[40%] left-[55%] animate-float-slow" data-parallax data-speed="0.5"></span>
        <span class="absolute w-2 h-2 bg-lime-400/60 rounded-full blur-[3px] top-[75%] left-[20%] animate-float-slow" data-parallax data-speed="0.45"></span>
        <span class="absolute w-1 h-1 bg-white/50 rounded-full blur-[1px] top-[10%] left-[80%] animate-float-slow" data-parallax data-speed="0.6"></span>
        <span class="absolute w-1 h-1 bg-emerald-300/50 rounded-full blur-[1px] top-[85%] left-[40%] animate-float-slow" data-parallax data-speed="0.55"></span>
    </div>

    <div class="relative z-10 mx-auto w-[92%] max-w-[1200px]">
        <!-- Section Title -->
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-5 
                bg-gradient-to-r from-lime-300 via-emerald-400 to-green-500 
                bg-clip-text text-transparent"
                data-aos="fade-down">
                Explore More
            </h2>
            <p class="text-lg text-gray-300/90 leading-relaxed max-w-[65ch] mx-auto" data-aos="fade-up">
                Jump to detailed pages for company info, product lineup, branches, and more.
            </p>
        </div>

        <!-- Cards -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- About Us -->
            <a href="{{ route('about') }}"
                class="group relative rounded-3xl overflow-hidden 
               bg-gradient-to-br from-emerald-950/70 to-green-900/60 
               border border-emerald-800/40 backdrop-blur-xl
               shadow-[0_15px_40px_rgba(0,0,0,0.55)]
               transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_35px_90px_rgba(0,0,0,0.65)] hover:border-lime-400/40"
                data-aos="fade-right">

                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-r from-lime-400/20 via-transparent to-emerald-600/20 animate-shimmer"></div>
                </div>

                <div class="p-8 relative z-10">
                    <div class="flex items-center gap-4 mb-4 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.7 0 4.88-2.18 4.88-4.88S14.7 2.24 12 2.24 7.12 4.42 7.12 7.12 9.3 12 12 12zm0 2.25c-3.14 0-9.38 1.58-9.38 4.69v2.06h18.75v-2.06c0-3.11-6.24-4.69-9.37-4.69z" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">About Us</h3>
                    </div>
                    <p class="text-gray-400 text-sm">Mission, vision, and our story.</p>
                </div>
            </a>

            <!-- Products -->
            <a href="{{ route('products') }}"
                class="group relative rounded-3xl overflow-hidden 
               bg-gradient-to-br from-emerald-950/70 to-green-900/60 
               border border-emerald-800/40 backdrop-blur-xl
               shadow-[0_15px_40px_rgba(0,0,0,0.55)]
               transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_35px_90px_rgba(0,0,0,0.65)] hover:border-lime-400/40"
                data-aos="fade-up">

                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-r from-lime-400/20 via-transparent to-emerald-600/20 animate-shimmer"></div>
                </div>

                <div class="p-8 relative z-10">
                    <div class="flex items-center gap-4 mb-4 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 4v16h18V4H3zm16 14H5V8h14v10zM8 10h2v6H8v-6zm6 0h2v6h-2v-6z" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">Products</h3>
                    </div>
                    <p class="text-gray-400 text-sm">See available rice varieties.</p>
                </div>
            </a>

            <!-- Branch Locator -->
            <a href="{{ route('branches') }}"
                class="group relative rounded-3xl overflow-hidden 
               bg-gradient-to-br from-emerald-950/70 to-green-900/60 
               border border-emerald-800/40 backdrop-blur-xl
               shadow-[0_15px_40px_rgba(0,0,0,0.55)]
               transition-all duration-500 hover:scale-[1.05] hover:shadow-[0_35px_90px_rgba(0,0,0,0.65)] hover:border-lime-400/40"
                data-aos="fade-left">

                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-r from-lime-400/20 via-transparent to-emerald-600/20 animate-shimmer"></div>
                </div>

                <div class="p-8 relative z-10">
                    <div class="flex items-center gap-4 mb-4 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">Branch Locator</h3>
                    </div>
                    <p class="text-gray-400 text-sm">Find a store near you.</p>
                </div>
            </a>
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

    @keyframes shimmer {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
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

    .animate-shimmer {
        animation: shimmer 3s linear infinite;
    }

    .animate-aurora {
        background-size: 200% 200%;
        animation: aurora 18s ease-in-out infinite;
    }

    /* Parallax Effect */
    [data-parallax] {
        will-change: transform;
    }
</style>

<script>
    // Parallax scroll effect
    document.addEventListener("scroll", () => {
        const scrollY = window.scrollY;
        document.querySelectorAll("[data-parallax]").forEach(el => {
            const speed = parseFloat(el.getAttribute("data-speed"));
            el.style.transform = `translateY(${scrollY * speed}px)`;
        });
    });
</script>