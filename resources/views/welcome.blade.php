<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bigasan Hub — Premium Rice for Every Filipino</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Poppins:wght@500;700&display=swap"
        rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body class="overflow-x-hidden font-[Poppins,sans-serif] bg-[#0a1a0c] text-gray-200">

    @include('partials.header')

    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center overflow-hidden px-6 md:px-20">
        <!-- Background overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/90 via-black/70 to-green-900/60 z-0"></div>

        <!-- Floating shapes -->
        <span class="absolute rounded-full opacity-15 animate-float w-[550px] h-[550px] bg-[#14532d] top-[-150px] left-[-180px]"></span>
        <span class="absolute rounded-full opacity-15 animate-float w-[400px] h-[400px] bg-[#22c55e] bottom-[-140px] right-[-120px]"></span>
        <span class="absolute rounded-full opacity-15 animate-float w-[250px] h-[250px] bg-[#16a34a] top-[240px] right-[-60px]"></span>

        <!-- Content: Left text + Right image -->
        <div class="relative z-10 w-full flex flex-col md:flex-row items-center gap-12">
            <!-- Left: Text -->
            <div class="md:w-1/2 text-left" data-aos="fade-right">
                <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight">
                    Welcome to <br>
                    <span
                        class="bg-gradient-to-r from-lime-300 via-emerald-400 to-green-500 bg-clip-text text-transparent">
                        Bigasan Hub
                    </span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10">
                    Delivering premium, fresh rice across the Philippines. Trusted by households and businesses nationwide.
                </p>
            </div>

            <!-- Right: Image with scroll & mouse 3D parallax -->
            <div class="md:w-1/2 [perspective:1200px]" data-aos="fade-left">
                <div class="parallax-wrapper [transform-style:preserve-3d] will-change-transform transition-transform duration-100">
                    <img src="/images/bigasan.jpg" alt="Premium Rice"
                        class="parallax-img w-full rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.4)] transform-gpu transition-transform duration-100">
                </div>
            </div>
        </div>
    </section>
<style>
        @keyframes float {
            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(50px, -50px);
            }

            100% {
                transform: translate(0, 0);
            }
        }

    </style>

    <!-- Dynamic Sections -->
    <main>
        @include('partials.sections.why-choose')
        @include('partials.sections.featured-varieties')
        @include('partials.sections.explore-more')
        @include('partials.sections.contact')
        @include('partials.sections.faq')
    </main>

    <footer class="text-[#ffffff] py-12 bg-[#1a4a2a] border-t border-[#0d2e1a]">
        <div class="mx-auto w-[92%] max-w-[1200px]">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Company Info -->
                <div class="text-center md:text-left">
                    <div class="flex items-center justify-center md:justify-start mb-4">
                        <img src="/images/logo.png" alt="Bigasan Hub logo" class="w-12 h-12 object-contain bg-white rounded-full shadow mr-3" />
                        <h3 class="text-xl font-bold text-white">Bigasan Hub</h3>
                    </div>
                    <p class="text-[#ffffff]/80 mb-4">Premier rice supplier for households, restaurants, and retailers across the Philippines.</p>
                    <div class="flex justify-center md:justify-start gap-3">
                        <a class="w-10 h-10 bg-[#2E6F40] rounded-full inline-flex items-center justify-center hover:bg-[#0d2e1a] transition-colors duration-300" href="https://www.facebook.com/people/Bigasan-Hub-PH/61573715723031/" title="Facebook" aria-label="Facebook" target="_blank" rel="noopener">
                            <img src="/images/facebook.png" alt="Facebook" class="w-6 h-6 object-contain" />
                        </a>
                        <a class="w-10 h-10 bg-[#2E6F40] rounded-full inline-flex items-center justify-center hover:bg-[#0d2e1a] transition-colors duration-300" href="https://www.instagram.com/bigasan_hub/" title="Instagram" aria-label="Instagram" target="_blank" rel="noopener">
                            <img src="/images/instagram.png" alt="Instagram" class="w-6 h-6 object-contain" />
                        </a>
                        <a class="w-10 h-10 bg-[#2E6F40] rounded-full inline-flex items-center justify-center hover:bg-[#0d2e1a] transition-colors duration-300" href="mailto:info@bigasanhub.com" title="Email" aria-label="Email" target="_blank" rel="noopener">
                            <img src="/images/gmail.png" alt="Gmail" class="w-6 h-6 object-contain" />
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="text-center md:text-left">
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('landing') }}" class="text-[#ffffff]/80 hover:text-[#ffffff] transition-colors duration-300">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-[#ffffff]/80 hover:text-[#ffffff] transition-colors duration-300">About Us</a></li>
                        <li><a href="{{ route('products') }}" class="text-[#ffffff]/80 hover:text-[#ffffff] transition-colors duration-300">Products</a></li>
                        <li><a href="{{ route('branches') }}" class="text-[#ffffff]/80 hover:text-[#ffffff] transition-colors duration-300">Branch Locator</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="text-center md:text-left">
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <div class="space-y-3">
                        <div class="flex items-center justify-center md:justify-start">
                            <svg class="w-5 h-5 text-[#2E6F40] mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            <span class="text-[#ffffff]/80">info@bigasanhub.com</span>
                        </div>
                        <div class="flex items-center justify-center md:justify-start">
                            <svg class="w-5 h-5 text-[#2E6F40] mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                            </svg>
                            <span class="text-[#ffffff]/80">09959171079 | (032) 346 3965</span>
                        </div>
                        <div class="flex items-center justify-center md:justify-start">
                            <svg class="w-7 h-7 text-[#2E6F40] mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                            </svg>
                            <span class="text-[#ffffff]/80">8WFJ+WFH, Tipolo, Mandaue City, Cebu</span>
                        </div>
                    </div>
                </div>

                <!-- Franchise Info -->
                <div class="text-center md:text-left">
                    <h4 class="text-lg font-semibold mb-4">Franchise Opportunity</h4>
                    <div class="space-y-3">
                        <p class="text-[#ffffff]/80 text-sm">Join our growing network of rice suppliers across the Philippines.</p>
                        <div class="bg-[#2E6F40] rounded-lg p-3">
                            <p class="text-sm font-semibold mb-1">OPEN FOR FRANCHISE</p>
                            <p class="text-xs text-[#ffffff]/80">Contact us for franchise opportunities</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="border-t border-[#0d2e1a] pt-6 text-center">
                <p class="text-[#ffffff]/60 text-sm mb-2">
                    © {{ date('Y') }} Bigasan Hub. All rights reserved. |
                    <a href="https://bigasanhub.com" target="_blank" class="hover:text-[#ffffff] transition-colors duration-300">www.bigasanhub.com</a>
                </p>
                <p class="text-[#ffffff]/40 text-xs">ALIN Group of Companies | Jamestowe Unit Do-07, Mantawe Rd.</p>
            </div>
        </div>
    </footer>


    @include('partials.modals.franchise-modal')
    @include('partials.modals.signup-modal')
    @include('partials.modals.contact-modal')

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1000,
            easing: 'ease-out'
        });

        gsap.registerPlugin(ScrollTrigger);
        gsap.utils.toArray("section").forEach(section => {
            gsap.from(section, {
                opacity: 0,
                y: 60,
                duration: 1,
                scrollTrigger: {
                    trigger: section,
                    start: "top 85%"
                }
            });
        });

        // 3D Parallax Scroll + Mouse
        const parallaxWrapper = document.querySelector('.parallax-wrapper');
        const parallaxImg = document.querySelector('.parallax-img');

        // Scroll parallax
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            parallaxImg.style.transform = `rotateY(${scrollY * 0.02}deg) translateZ(${scrollY * 0.04}px)`;
        });

        // Mouse 3D tilt
        parallaxWrapper.addEventListener('mousemove', (e) => {
            const rect = parallaxWrapper.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateY = (x - centerX) / centerX * 15; // max 15deg
            const rotateX = -(y - centerY) / centerY * 15; // max 15deg
            parallaxImg.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(50px)`;
        });

        // Reset on mouse leave
        parallaxWrapper.addEventListener('mouseleave', () => {
            parallaxImg.style.transform = 'rotateX(0deg) rotateY(0deg) translateZ(0px)';
        });
    </script>
</body>

</html>