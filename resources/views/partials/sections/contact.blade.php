<section id="contact" class="relative py-28 bg-[#0a1a0c] overflow-hidden">
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
                bg-clip-text text-transparent"
                data-aos="fade-down">
                Franchising and Wholesale
            </h2>
            <p class="text-lg text-gray-300/90 leading-relaxed max-w-[65ch] mx-auto" data-aos="fade-up">
                We provide reliable supply for sari-sari stores, restaurants, and supermarkets. Let’s talk about volume pricing and delivery schedules.
            </p>
        </div>

        <!-- Feature Grid -->
        <div class="grid gap-10 md:grid-cols-3">
            <!-- Flexible Payment Terms -->
            <article class="relative rounded-3xl overflow-hidden 
                bg-gradient-to-br from-emerald-950/70 to-green-900/60 
                border border-emerald-800/40 backdrop-blur-xl
                shadow-[0_20px_50px_rgba(0,0,0,0.55)]"
                data-aos="fade-up">
                <div class="p-8 relative z-10">
                    <div class="flex items-center gap-3 mb-5 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14.59l-3.29-3.3 1.42-1.41 1.87 1.88 3.88-3.88 1.41 1.41L13 16.59z" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">Flexible Payment Terms</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed">Enjoy flexible arrangements to suit your business needs.</p>
                </div>
            </article>

            <!-- Scheduled Deliveries -->
            <article class="relative rounded-3xl overflow-hidden 
                bg-gradient-to-br from-emerald-950/70 to-green-900/60 
                border border-emerald-800/40 backdrop-blur-xl
                shadow-[0_20px_50px_rgba(0,0,0,0.55)]"
                data-aos="fade-up" data-aos-delay="150">
                <div class="p-8 relative z-10">
                    <div class="flex items-center gap-3 mb-5 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 1l3 7h7l-5.5 4 2 7L12 16l-6.5 3 2-7L2 8h7z" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">Scheduled Deliveries</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed">We deliver on time to keep your shelves stocked.</p>
                </div>
            </article>

            <!-- Brand & Marketing Support -->
            <article class="relative rounded-3xl overflow-hidden 
                bg-gradient-to-br from-emerald-950/70 to-green-900/60 
                border border-emerald-800/40 backdrop-blur-xl
                shadow-[0_20px_50px_rgba(0,0,0,0.55)]"
                data-aos="fade-up" data-aos-delay="300">
                <div class="p-8 relative z-10">
                    <div class="flex items-center gap-3 mb-5 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0H5z" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">Brand & Marketing Support</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed">Boost your business with our brand materials and promotions.</p>
                </div>
            </article>
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

    [data-parallax] {
        transform: translateY(0);
        transition: transform 0.1s linear;
    }
</style>

<script>
    // Simple parallax effect
    document.addEventListener("scroll", () => {
        document.querySelectorAll("[data-parallax]").forEach(el => {
            const speed = parseFloat(el.getAttribute("data-speed")) || 0.3;
            const y = window.scrollY * speed;
            el.style.transform = `translateY(${y}px)`;
        });
    });
</script>