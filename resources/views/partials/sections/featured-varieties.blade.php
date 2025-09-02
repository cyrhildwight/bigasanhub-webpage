<section class="relative py-28 bg-[#0a1a0c] overflow-hidden">
    <!-- Aurora gradient waves -->
    <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/40 via-green-800/20 to-emerald-900/40 animate-aurora"></div>

    <!-- Floating glowing shapes with parallax -->
    <span class="absolute w-[650px] h-[650px] rounded-full bg-emerald-900/30 blur-3xl top-[-250px] left-[-200px] animate-float will-change-transform" data-parallax data-speed="0.3"></span>
    <span class="absolute w-[500px] h-[500px] rounded-full bg-green-800/25 blur-3xl bottom-[-200px] right-[-160px] animate-float will-change-transform" data-parallax data-speed="0.2"></span>
    <span class="absolute w-[300px] h-[300px] rounded-full bg-lime-500/20 blur-2xl top-[260px] right-[120px] animate-float will-change-transform" data-parallax data-speed="0.4"></span>
    <span class="absolute w-[350px] h-[350px] rounded-full bg-emerald-500/15 blur-3xl bottom-[160px] left-[180px] animate-float will-change-transform" data-parallax data-speed="0.25"></span>

    <!-- Floating particles -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <span class="absolute w-2 h-2 bg-lime-300/60 rounded-full blur-[2px] top-20 left-[15%] animate-float-slow" data-parallax data-speed="0.5"></span>
        <span class="absolute w-1.5 h-1.5 bg-emerald-400/70 rounded-full blur-[2px] top-[40%] left-[70%] animate-float-slow" data-parallax data-speed="0.3"></span>
        <span class="absolute w-2 h-2 bg-green-500/60 rounded-full blur-[3px] top-[70%] left-[35%] animate-float-slow" data-parallax data-speed="0.6"></span>
    </div>

    <div class="relative z-10 mx-auto w-[92%] max-w-[1200px]">
        <!-- Section Title -->
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-5 
                bg-gradient-to-r from-lime-300 via-emerald-400 to-green-500 
                bg-clip-text text-transparent drop-shadow-[0_2px_15px_rgba(0,255,100,0.4)]"
                data-aos="fade-down">
                Featured Varieties
            </h2>
            <p class="text-lg text-gray-300/90 leading-relaxed max-w-[65ch] mx-auto" data-aos="fade-up">
                Explore our premium rice varieties, carefully selected to bring quality, taste, and tradition to every Filipino table.
            </p>
        </div>

        <!-- Grid of Varieties -->
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
            @forelse(($featuredVarieties ?? []) as $i => $variety)
            @php
            $fadeClasses = ['fade-right', 'fade-up', 'fade-left', 'fade-up'];
            $fadeClass = $fadeClasses[$i % count($fadeClasses)];
            @endphp

            <article class="group relative rounded-3xl overflow-hidden 
                bg-gradient-to-br from-emerald-950/70 to-green-900/60 
                border border-emerald-800/40 backdrop-blur-xl
                shadow-[0_20px_50px_rgba(0,0,0,0.55)]
                transition-all duration-500 hover:scale-[1.07] hover:shadow-[0_35px_90px_rgba(0,0,0,0.7)]
                hover:border-lime-400/40 cursor-pointer"
                data-aos="{{ $fadeClass }}">

                <!-- Glow border shimmer -->
                <div class="absolute inset-0 border-2 border-transparent group-hover:border-lime-400/50 rounded-3xl transition duration-500"></div>

                <!-- Badge -->
                <div class="absolute top-5 left-5 z-20">
                    <span class="px-3 py-1 text-xs font-semibold rounded-full bg-lime-400/90 text-black shadow">
                        Best Seller
                    </span>
                </div>

                <!-- Image with glow & shine -->
                <div class="relative aspect-[4/3] flex items-center justify-center overflow-hidden border-b border-emerald-800/30">
                    <img src="images/{{ $variety->image }}" alt="{{ $variety->name }} rice"
                        class="w-4/5 h-4/5 object-contain transition-transform duration-500 group-hover:scale-110 drop-shadow-[0_0_18px_rgba(0,255,150,0.25)]" />

                    <!-- Spotlight gradient -->
                    <div class="absolute inset-0 bg-gradient-radial from-lime-400/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                    <!-- Shine effect -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/20 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></div>
                </div>

                <!-- Content -->
                <div class="p-8 text-center relative z-10">
                    <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-lime-300 transition-colors">
                        {{ $variety->name }}
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                        {{ $variety->description }}
                    </p>
                    <a href="{{ route('products') }}"
                        class="inline-block px-7 py-2.5 text-sm font-semibold rounded-full 
                        bg-gradient-to-r from-lime-400 via-green-500 to-emerald-500 text-black 
                        shadow-md hover:shadow-lime-400/40 hover:brightness-110 transition-all duration-300">
                        View details →
                    </a>
                </div>
            </article>

            @empty
            <div class="col-span-full text-center text-gray-400 py-14">
                <p>No featured varieties available yet.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<style>
    @keyframes float {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(40px, -30px);
        }
    }

    @keyframes float-slow {

        0%,
        100% {
            transform: translateY(0);
            opacity: 0.6;
        }

        50% {
            transform: translateY(-25px);
            opacity: 1;
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
</style>

<script>
    // Vanilla JS parallax effect
    document.addEventListener("scroll", () => {
        document.querySelectorAll("[data-parallax]").forEach(el => {
            const speed = parseFloat(el.getAttribute("data-speed")) || 0.3;
            const y = window.scrollY * speed;
            el.style.transform = `translateY(${y}px)`;
        });
    });
</script>