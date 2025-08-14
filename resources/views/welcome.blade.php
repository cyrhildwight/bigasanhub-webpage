<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-maps-api-key" content="{{ env('GOOGLE_MAPS_API_KEY') }}">
    <title>Bigasan Hub — Quality Rice, Wholesale & Retail</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">

    {{-- Load compiled assets when Vite is available; otherwise fall back to Tailwind CDN only --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <script src="https://cdn.tailwindcss.com"></script>
    @endif
    <style>
        @keyframes marquee-pingpong {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        @keyframes marquee-right-infinite {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .marquee {
            overflow: hidden;
            width: 100%;
            position: relative;
            display: flex;
            justify-content: center;
        }

        .marquee-track {
            display: flex;
            align-items: center;
            gap: 48px;
            width: max-content;
            will-change: transform;
        }

        .marquee:hover .marquee-track {
            animation-play-state: paused;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .animated-entrance {
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }

            50% {
                opacity: 1;
                transform: scale(1.05);
            }

            70% {
                transform: scale(0.9);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .bounce-entrance {
            opacity: 0;
            animation: bounceIn 1s cubic-bezier(0.68, -0.55, 0.27, 1.55) forwards;
        }

        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadeup-entrance {
            opacity: 0;
            animation: fadeUp 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }
    </style>
</head>

<body class="min-h-screen bg-[radial-gradient(1200px_600px_at_50%_-200px,#c8e6c9_0%,#a5d6a7_30%,#66bb6a_60%,#388e3c_100%)] bg-fixed text-[#0f2613]" style="font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Ubuntu, 'Helvetica Neue', Arial, sans-serif;">
    <header class="w-full bg-gradient-to-r from-gray-100 to-green-700">
        <div class="w-full flex items-center justify-between py-2 px-6 md:px-12">
            <div class="flex items-center gap-3">
                <img class="h-14 w-auto block" alt="Bigasan Hub logo" src="images/logo.v2.png" />
            </div>
            <nav class="hidden md:flex gap-[22px]">
                <a class="text-white font-semibold hover:text-green-200 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('landing') }}">Home</a>
                <a class="text-white font-semibold hover:text-green-200 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('about') }}">About</a>
                <a class="text-white font-semibold hover:text-green-200 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('products') }}">Products</a>
                <a class="text-white font-semibold hover:text-green-200 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('branches') }}">Branch Locator</a>
            </nav>
            <button id="mobile-menu-toggle" class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-white focus:outline-none focus:ring-2 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" aria-label="Open main menu">
                <svg id="icon-menu" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="icon-close" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div id="mobile-menu" class="md:hidden hidden border-t border-white/10 bg-[#185a33]">
            <nav class="px-6 py-3 flex flex-col">
                <a class="text-white font-semibold py-2" href="{{ route('landing') }}">Home</a>
                <a class="text-white font-semibold py-2" href="{{ route('about') }}">About</a>
                <a class="text-white font-semibold py-2" href="{{ route('products') }}">Products</a>
                <a class="text-white font-semibold py-2" href="{{ route('branches') }}">Branch Locator</a>
            </nav>
        </div>
    </header>

    <main id="home" class="w-full">
        <section class="relative overflow-hidden isolate rounded-none bg-gradient-to-b from-green-100 to-white h-[62vh] min-h-[440px]" aria-label="Hero">
            <div class="absolute inset-0" data-hero-slides='["images/download.jpg","images/download1.jpg","images/download2.jpg","images/download3.jpg","images/download5.jpg","images/download6.jpg","images/download7.jpg","images/download8.jpg","images/download9.jpg","images/download10.jpg","images/download11.jpg","images/download12.jpg","images/download13.jpg","images/download14.jpg"]'></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/60 to-black/50 z-[1]"></div>

            <div class="absolute inset-x-[6%] top-[12%] p-9 text-white z-10">
                <h1 class="m-0 mb-2 text-4xl md:text-5xl lg:text-6xl font-extrabold fadeup-entrance" id="hero-title">Welcome to Bigasan Hub</h1>
                <p class="m-0 mb-5 opacity-95 max-w-[65ch] leading-relaxed fadeup-entrance" id="hero-subtext" style="animation-delay:0.15s;">Premier rice supplier for households, restaurants, and retailers across the Philippines. Quality varieties, competitive pricing, and reliable wholesale and retail distribution.</p>
                <a class="inline-block px-6 py-3 rounded-full bg-green-800 text-white font-bold shadow-lg hover:bg-green-600 transition fadeup-entrance" id="franchise-btn" style="animation-delay:0.3s;" href="#franchise-modal" data-open-franchise-modal>Franchise Now</a>
            </div>
        </section>
        <div class="relative -mt-[2px]" aria-hidden="true">
            <svg class="block w-full" viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,32 C240,80 480,0 720,32 C960,64 1200,16 1440,48 L1440,80 L0,80 Z" fill="#DCFCE7"></path>
            </svg>
        </div>

        <!-- Franchise Modal -->
        <div id="franchise-modal" class="fixed inset-0 z-[60] hidden">
            <div class="absolute inset-0 bg-black/60" data-close-modal></div>
            <div role="dialog" aria-modal="true" aria-labelledby="franchise-title" class="relative mx-auto my-10 max-w-[640px] w-[92%] bg-white rounded-2xl shadow-2xl overflow-hidden">
                <button type="button" class="absolute top-3 right-3 p-2 rounded-full bg-white text-[#185a33] shadow hover:bg-green-50" data-close-modal aria-label="Close">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="bg-gradient-to-r from-green-600 to-green-700 text-white text-center text-[11px] sm:text-xs font-bold py-2">
                    Be part of the fastest growing franchising business today
                </div>
                <img src="/images/modal.jpg" alt="Bigasan Hub Franchise" class="w-full h-44 object-cover" />
                <div class="p-6 sm:p-7 text-center">
                    <h3 id="franchise-title" class="m-0 mb-2 text-xl sm:text-2xl font-extrabold text-[#185a33]">Start Your Bigasan Hub Business Today!</h3>
                    <div class="text-3xl sm:text-4xl font-extrabold text-[#185a33] tracking-wide">PHP 79,990</div>
                    <p class="m-0 mt-3 text-sm text-[#2d3d2a]">Own your rice retail and wholesale business. Join a fast-growing franchise network. Limited slots available.</p>
                    <div class="mt-5 flex justify-center gap-3">
                        <a href="{{ route('contact') }}" class="inline-block px-6 py-3 rounded-full bg-green-800 text-white font-bold shadow-lg hover:bg-green-600 transition">Inquire Now</a>
                        <button class="inline-block px-6 py-3 rounded-full bg-blue-700 text-white font-bold shadow-lg hover:bg-blue-800 transition" data-open-signup-modal>Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="signup-modal" class="fixed inset-0 z-[60] hidden">
            <div class="absolute inset-0 bg-black/60" data-close-modal></div>
            <div role="dialog" aria-modal="true" class="relative mx-auto my-10 max-w-[640px] w-[92%] bg-white rounded-2xl shadow-2xl overflow-hidden">
                <button type="button" class="absolute top-3 right-3 p-2 rounded-full bg-white text-[#185a33] shadow hover:bg-green-50" data-close-modal aria-label="Close">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="p-6">
                    <h1 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 mb-6">Franchise Sign Up</h1>
                    <div id="franchiseAlert" class="mb-3"></div>
                    <form id="franchiseForm" method="POST" action="{{ route('franchise.submit') }}" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block font-semibold mb-1 text-[#185a33]" for="name">Full Name</label>
                            <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition" id="name" name="name" type="text" placeholder="Enter your full name" required>
                        </div>
                        <div>
                            <label class="block font-semibold mb-1 text-[#185a33]" for="email">Email</label>
                            <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition" id="email" name="email" type="email" placeholder="Enter your email" required>
                        </div>
                        <div>
                            <label class="block font-semibold mb-1 text-[#185a33]" for="phone">Phone Number</label>
                            <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition" id="phone" name="phone" type="text" placeholder="Enter your phone number" required>
                        </div>
                        <div>
                            <label class="block font-semibold mb-1 text-[#185a33]" for="message">Message</label>
                            <textarea class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none min-h-[120px] resize-y focus:ring-2 focus:ring-green-300 transition" id="message" name="message" placeholder="Tell us about your interest in franchising..." required></textarea>
                        </div>
                        <button type="submit" id="franchiseSubmitBtn" class="w-full px-5 py-3 rounded-full bg-green-700 text-white font-bold shadow-lg hover:bg-green-800 transition text-lg flex items-center justify-center">
                            <span id="btnText">Submit Application</span>
                            <svg id="btnLoader" class="hidden animate-spin ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- New home-only content -->
    <section class="py-[70px] bg-green-100">
        <div class="mx-auto w-[92%] max-w-[1200px]">
            <h2 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">
                Why choose Bigasan Hub
            </h2>
            <p class="text-center m-0 mb-9 text-gray-700 max-w-[70ch] mx-auto">
                Reliable sourcing, fair pricing, and a service-first team focused on your household or business needs.
            </p>

            <div class="grid gap-6 md:grid-cols-3">

                <!-- Consistent Quality -->
                <article class="bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6 hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition">
                    <div class="flex items-center gap-3 mb-2 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14.59l-3.29-3.3 1.42-1.41 1.87 1.88 3.88-3.88 1.41 1.41L13 16.59z" />
                        </svg>
                        <h3 class="m-0 text-xl text-[#185a33] font-extrabold">Consistent Quality</h3>
                    </div>
                    <p class="m-0 text-[#2d3d2a]">We partner with trusted mills to ensure every sack meets our standard.</p>
                </article>

                <!-- Fair, Transparent Prices -->
                <article class="bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6 hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition">
                    <div class="flex items-center gap-3 mb-2 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 1l3 7h7l-5.5 4 2 7L12 16l-6.5 3 2-7L2 8h7z" />
                        </svg>
                        <h3 class="m-0 text-xl text-[#185a33] font-extrabold">Fair, Transparent Prices</h3>
                    </div>
                    <p class="m-0 text-[#2d3d2a]">Retail or wholesale, you get competitive pricing with no surprises.</p>
                </article>

                <!-- Service You Can Trust -->
                <article class="bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6 hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition">
                    <div class="flex items-center gap-3 mb-2 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0H5z" />
                        </svg>
                        <h3 class="m-0 text-xl text-[#185a33] font-extrabold">Service You Can Trust</h3>
                    </div>
                    <p class="m-0 text-[#2d3d2a]">A friendly team ready to support households, stores, and food businesses.</p>
                </article>

            </div>
        </div>
    </section>



    <section class="py-[70px] bg-green-100">
        <div class="mx-auto w-[92%] max-w-[1200px]">
            <h2 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">Featured Varieties</h2>
            <p class="text-center m-0 mb-9 text-gray-700 max-w-[70ch] mx-auto">
                Our most requested rice for homes and food businesses.
            </p>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition">
                    <div class="aspect-[4/3] bg-green-50 grid place-items-center">
                        <img src="images/dinorado.png" alt="Dinorado rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-105" />
                    </div>
                    <div class="p-5">
                        <h3 class="m-0 mb-1 text-lg text-[#185a33] font-extrabold">Dinorado</h3>
                        <p class="m-0 text-sm text-[#2d3d2a] mb-3">Fragrant, soft grain—perfect for everyday meals.</p>
                        <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-green-800 hover:text-green-900">View details →</a>
                    </div>
                </article>

                <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition">
                    <div class="aspect-[4/3] bg-green-50 grid place-items-center">
                        <img src="images/hasmin.png" alt="Hasmin rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-105" />
                    </div>
                    <div class="p-5">
                        <h3 class="m-0 mb-1 text-lg text-[#185a33] font-extrabold">Hasmin</h3>
                        <p class="m-0 text-sm text-[#2d3d2a] mb-3">Premium aroma and texture for special occasions.</p>
                        <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-green-800 hover:text-green-900">View details →</a>
                    </div>
                </article>

                <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition">
                    <div class="aspect-[4/3] bg-green-50 grid place-items-center">
                        <img src="images/ivory.png" alt="Ivory rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-105" />
                    </div>
                    <div class="p-5">
                        <h3 class="m-0 mb-1 text-lg text-[#185a33] font-extrabold">Ivory</h3>
                        <p class="m-0 text-sm text-[#2d3d2a] mb-3">Clean and reliable quality, great for families.</p>
                        <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-green-800 hover:text-green-900">View details →</a>
                    </div>
                </article>

                <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition">
                    <div class="aspect-[4/3] bg-green-50 grid place-items-center">
                        <img src="images/prima.png" alt="Prima rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-105" />
                    </div>
                    <div class="p-5">
                        <h3 class="m-0 mb-1 text-lg text-[#185a33] font-extrabold">Prima</h3>
                        <p class="m-0 text-sm text-[#2d3d2a] mb-3">Balanced choice for taste and value.</p>
                        <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-green-800 hover:text-green-900">View details →</a>
                    </div>
                </article>

            </div>
        </div>
    </section>


    <section class="py-10 bg-green-100">
        <div class="mx-auto w-[92%] max-w-[1500px]">
            <div class="marquee">
                <div class="marquee-track" id="marquee-track">
                    <img src="images/dinorado.png" alt="Dinorado" class="h-25 w-auto opacity-90" />
                    <img src="images/hasmin.png" alt="Hasmin" class="h-25 w-auto opacity-90" />
                    <img src="images/ivory.png" alt="Ivory" class="h-25 w-auto opacity-90" />
                    <img src="images/prima.png" alt="Prima" class="h-25 w-auto opacity-90" />
                    <img src="images/dinorado.png" alt="Dinorado" class="h-25 w-auto opacity-90" />
                    <img src="images/hasmin.png" alt="Hasmin" class="h-25 w-auto opacity-90" />
                    <img src="images/ivory.png" alt="Ivory" class="h-25 w-auto opacity-90" />
                    <img src="images/prima.png" alt="Prima" class="h-25 w-auto opacity-90" />
                    <!-- Duplicated for seamless loop -->
                    <img src="images/dinorado.png" alt="Dinorado" class="h-25 w-auto opacity-90" />
                    <img src="images/hasmin.png" alt="Hasmin" class="h-25 w-auto opacity-90" />
                    <img src="images/ivory.png" alt="Ivory" class="h-25 w-auto opacity-90" />
                    <img src="images/prima.png" alt="Prima" class="h-25 w-auto opacity-90" />
                    <img src="images/dinorado.png" alt="Dinorado" class="h-25 w-auto opacity-90" />
                    <img src="images/hasmin.png" alt="Hasmin" class="h-25 w-auto opacity-90" />
                    <img src="images/ivory.png" alt="Ivory" class="h-25 w-auto opacity-90" />
                    <img src="images/prima.png" alt="Prima" class="h-25 w-auto opacity-90" />
                </div>
            </div>
        </div>
    </section>


    <section class="py-[70px] bg-white bg-gradient-to-b from-green-200/60 to-green-200/30">
        <div class="mx-auto w-[92%] max-w-[1200px]">
            <h2 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">Explore more</h2>
            <p class="text-center m-0 mb-9 text-gray-700 max-w-[70ch] mx-auto">
                Jump to detailed pages for company info, product lineup, branches, and more.
            </p>

            <div class="flex flex-wrap justify-center gap-[22px]">

                <!-- About Us -->
                <a href="{{ route('about') }}" class="block bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6 hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition">
                    <div class="flex items-center gap-3 mb-2 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 12c2.7 0 4.88-2.18 4.88-4.88S14.7 2.24 12 2.24 7.12 4.42 7.12 7.12 9.3 12 12 12zm0 2.25c-3.14 0-9.38 1.58-9.38 4.69v2.06h18.75v-2.06c0-3.11-6.24-4.69-9.37-4.69z" />
                        </svg>
                        <h3 class="m-0 text-xl text-[#185a33] font-extrabold">About Us</h3>
                    </div>
                    <p class="m-0 text-[#2d3d2a]">Mission, vision, and our story.</p>
                </a>

                <!-- Products -->
                <a href="{{ route('products') }}" class="block bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6 hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition">
                    <div class="flex items-center gap-3 mb-2 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 4v16h18V4H3zm16 14H5V8h14v10zM8 10h2v6H8v-6zm6 0h2v6h-2v-6z" />
                        </svg>
                        <h3 class="m-0 text-xl text-[#185a33] font-extrabold">Products</h3>
                    </div>
                    <p class="m-0 text-[#2d3d2a]">See available rice varieties.</p>
                </a>

                <!-- Branch Locator -->
                <a href="{{ route('branches') }}" class="block bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6 hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition">
                    <div class="flex items-center gap-3 mb-2 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z" />
                        </svg>
                        <h3 class="m-0 text-xl text-[#185a33] font-extrabold">Branch Locator</h3>
                    </div>
                    <p class="m-0 text-[#2d3d2a]">Find a store near you.</p>
                </a>

            </div>
        </div>
    </section>



    <section id="contact" class="py-[70px] bg-[#2f7a47]">
        <div class="mx-auto w-[92%] max-w-[1200px]">
            <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white m-0 mb-2">
                Franchising and Wholesale
            </h2>
            <p class="text-center m-0 mb-9 text-white/100 max-w-[70ch] mx-auto">
                We provide reliable supply for sari-sari stores, restaurants, and supermarkets. Let’s talk about volume pricing and delivery schedules.
            </p>

            <div class="grid gap-6 md:grid-cols-3">

                <!-- Flexible Payment Terms -->
                <article class="bg-white rounded-[14px] shadow-md border border-green-200 p-6">
                    <div class="flex items-center gap-3 mb-2 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14.59l-3.29-3.3 1.42-1.41 1.87 1.88 3.88-3.88 1.41 1.41L13 16.59z" />
                        </svg>
                        <h3 class="m-0 text-xl text-[#185a33] font-extrabold">Flexible Payment Terms</h3>
                    </div>
                    <p class="m-0 text-[#2d3d2a]">Enjoy flexible arrangements to suit your business needs.</p>
                </article>

                <!-- Scheduled Deliveries -->
                <article class="bg-white rounded-[14px] shadow-md border border-green-200 p-6">
                    <div class="flex items-center gap-3 mb-2 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 1l3 7h7l-5.5 4 2 7L12 16l-6.5 3 2-7L2 8h7z" />
                        </svg>
                        <h3 class="m-0 text-xl text-[#185a33] font-extrabold">Scheduled Deliveries</h3>
                    </div>
                    <p class="m-0 text-[#2d3d2a]">We deliver on time to keep your shelves stocked.</p>
                </article>

                <!-- Brand & Marketing Support -->
                <article class="bg-white rounded-[14px] shadow-md border border-green-200 p-6">
                    <div class="flex items-center gap-3 mb-2 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0H5z" />
                        </svg>
                        <h3 class="m-0 text-xl text-[#185a33] font-extrabold">Brand & Marketing Support</h3>
                    </div>
                    <p class="m-0 text-[#2d3d2a]">Boost your business with our brand materials and promotions.</p>
                </article>

            </div>
        </div>
    </section>


    <section class="py-[70px] bg-[#2f7a47]">
        <div class="mx-auto w-[92%] max-w-[1200px]">
            <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white m-0 mb-2">
                Frequently Asked Questions
            </h2>
            <p class="text-center m-0 mb-9 text-white/100 max-w-[70ch] mx-auto">
                Quick answers to common questions about supply, delivery, and pricing.
            </p>
            <div class="grid gap-4 md:grid-cols-2">
                <details class="rounded-lg bg-white p-4 open:bg-green-50 shadow-md">
                    <summary class="cursor-pointer font-semibold text-[#185a33]">
                        Do you deliver outside Cebu?
                    </summary>
                    <div class="mt-2 text-[#2d3d2a]">
                        Yes. We primarily serve Cebu but can arrange logistics to nearby provinces for wholesale orders.
                    </div>
                </details>
                <details class="rounded-lg bg-white p-4 open:bg-green-50 shadow-md">
                    <summary class="cursor-pointer font-semibold text-[#185a33]">
                        What is the minimum order for wholesale?
                    </summary>
                    <div class="mt-2 text-[#2d3d2a]">
                        Minimums vary by variety. Typically 10 sacks and up. Contact us for current terms.
                    </div>
                </details>
                <details class="rounded-lg bg-white p-4 open:bg-green-50 shadow-md">
                    <summary class="cursor-pointer font-semibold text-[#185a33]">
                        Can I request samples?
                    </summary>
                    <div class="mt-2 text-[#2d3d2a]">
                        We can arrange samples for qualified wholesale buyers. Please reach out with your requirements.
                    </div>
                </details>
                <details class="rounded-lg bg-white p-4 open:bg-green-50 shadow-md">
                    <summary class="cursor-pointer font-semibold text-[#185a33]">
                        Do prices change often?
                    </summary>
                    <div class="mt-2 text-[#2d3d2a]">
                        We provide transparent, updated pricing based on market conditions. Get a quote for the latest rates.
                    </div>
                </details>
            </div>
        </div>
    </section>


    <a href="{{ route('contact') }}" class="fixed bottom-5 right-5 z-50 inline-flex items-center gap-2 px-5 py-3 rounded-full bg-[#185a33] text-white font-bold shadow-lg hover:bg-[#134629] focus:outline-none focus:ring-2 focus:ring-white" aria-label="Contact Bigasan Hub">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 5a3 3 0 0 1 3-3h2a1 1 0 0 1 1 1v3a1 1 0 0 1-.553.894l-1.447.724a10.97 10.97 0 0 0 4.382 4.382l.724-1.447A1 1 0 0 1 13 10h3a1 1 0 0 1 1 1v2a3 3 0 0 1-3 3h-1a11 11 0 0 1-11-11V5Z" />
        </svg>
        <span>Contact Us</span>
    </a>

    <footer class="text-black py-8 bg-green-100">
        <div class="mx-auto w-[92%] max-w-[1200px] flex flex-col items-center gap-3 text-center">
            <div class="flex gap-3">
                <a class="w-9 h-9 inline-flex items-center justify-center" href="https://www.facebook.com/people/Bigasan-Hub-PH/61573715723031/" title="Facebook" aria-label="Facebook" target="_blank" rel="noopener">
                    <img src="/images/facebook.png" alt="Facebook" class="w-7 h-7 object-contain" />
                </a>
                <a class="w-9 h-9 inline-flex items-center justify-center" href="https://www.instagram.com/bigasan_hub/" title="Instagram" aria-label="Instagram" target="_blank" rel="noopener">
                    <img src="/images/instagram.png" alt="Instagram" class="w-7 h-7 object-contain" />
                </a>
                <a class="w-9 h-9 inline-flex items-center justify-center" href="info@bigasanhub.com" title="Gmail" aria-label="Gmail" target="_blank" rel="noopener">
                    <img src="/images/gmail.png" alt="Gmail" class="w-7 h-7 object-contain" />
                </a>
            </div>
            <p class="m-0"><a href="https://bigasanhub.com" target="_blank" style="color: inherit; text-decoration: none;">© {{ date('Y') }} Bigasan Hub. All rights reserved.</a></p>
        </div>
    </footer>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            // Animate hero title, subtext, and Franchise Now button uniformly
            const heroEls = [
                document.getElementById('hero-title'),
                document.getElementById('hero-subtext'),
                document.getElementById('franchise-btn')
            ];
            heroEls.forEach((el, i) => {
                if (el) {
                    setTimeout(() => {
                        el.style.opacity = 1;
                        el.style.animationPlayState = 'running';
                    }, i * 150);
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.getElementById('marquee-track');
            const speed = 2; // pixels per frame
            let pos = 0;

            // Set up initial transform so we can prepend images seamlessly
            function getFirstImgWidth() {
                const firstImg = track.children[0];
                return firstImg.offsetWidth + 48; // 48px gap
            }

            // Prepend the last image to the front and adjust position
            function prependLastImage() {
                const lastImg = track.lastElementChild;
                const lastImgWidth = lastImg.offsetWidth + 48;
                track.insertBefore(lastImg, track.firstElementChild);
                pos -= lastImgWidth;
                track.style.transform = `translateX(${pos}px)`;
            }

            // Fill the track with enough images to cover the marquee width
            function fillTrack() {
                const marquee = document.querySelector('.marquee');
                const marqueeWidth = marquee.offsetWidth;
                let totalWidth = 0;
                while (totalWidth < marqueeWidth * 2) {
                    for (let i = 0; i < track.children.length; i++) {
                        const clone = track.children[i].cloneNode(true);
                        track.appendChild(clone);
                        totalWidth += clone.offsetWidth + 48;
                        if (totalWidth > marqueeWidth * 2) break;
                    }
                }
            }

            fillTrack();

            // Start with the last image at the front for seamless loop
            prependLastImage();

            function animate() {
                pos += speed;
                track.style.transform = `translateX(${pos}px)`;
                const firstImgWidth = getFirstImgWidth();
                // When the first image is fully out of view on the right, move it to the left
                if (pos >= 0) {
                    prependLastImage();
                }
                requestAnimationFrame(animate);
            }

            animate();
        });
    </script>

    <script>
        document.getElementById('franchiseForm').addEventListener('submit', function(e) {
            e.preventDefault(); // prevent normal form submit

            let form = this;
            let formData = new FormData(form);
            let alertDiv = document.getElementById('franchiseAlert');

            fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        alertDiv.innerHTML = `<div class="p-3 rounded bg-green-200 text-green-900">${data.message}</div>`;
                        form.reset();
                    } else {
                        alertDiv.innerHTML = `<div class="p-3 rounded bg-red-200 text-red-900">Something went wrong. Try again.</div>`;
                    }
                })
                .catch(err => {
                    alertDiv.innerHTML = `<div class="p-3 rounded bg-red-200 text-red-900">Submission failed. Check your input.</div>`;
                    console.error(err);
                });
        });
    </script>
</body>

</html>