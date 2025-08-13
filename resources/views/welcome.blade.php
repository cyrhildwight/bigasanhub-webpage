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
            @keyframes marquee-bounce {
                0% { transform: translateX(-12%); }
                100% { transform: translateX(12%); }
            }
            .marquee { overflow: hidden; display: flex; justify-content: center; }
            .marquee-track {
                display: flex;
                align-items: center;
                gap: 48px;
                width: max-content;
                animation: marquee-bounce 12s ease-in-out infinite alternate;
                will-change: transform;
            }
            .marquee:hover .marquee-track { animation-play-state: paused; }
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
                    <a class="text-white font-semibold hover:text-green-200 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('contact') }}">Contact</a>
                </nav>
                <button id="mobile-menu-toggle" class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-white focus:outline-none focus:ring-2 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" aria-label="Open main menu">
                    <svg id="icon-menu" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg id="icon-close" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div id="mobile-menu" class="md:hidden hidden border-t border-white/10 bg-[#185a33]">
                <nav class="px-6 py-3 flex flex-col">
                    <a class="text-white font-semibold py-2" href="{{ route('landing') }}">Home</a>
                    <a class="text-white font-semibold py-2" href="{{ route('about') }}">About</a>
                    <a class="text-white font-semibold py-2" href="{{ route('products') }}">Products</a>
                    <a class="text-white font-semibold py-2" href="{{ route('branches') }}">Branch Locator</a>
                    <a class="text-white font-semibold py-2" href="{{ route('contact') }}">Contact</a>
                </nav>
            </div>
        </header>

        <main id="home" class="w-full">
			<section class="relative overflow-hidden isolate rounded-none bg-gradient-to-b from-green-100 to-white h-[62vh] min-h-[440px]" aria-label="Hero">
				<div class="absolute inset-0" data-hero-slides='["images/download.jpg","images/download1.jpg","images/download2.jpg","images/download3.jpg","images/download5.jpg","images/download6.jpg","images/download7.jpg","images/download8.jpg","images/download9.jpg","images/download10.jpg","images/download11.jpg","images/download12.jpg","images/download13.jpg","images/download14.jpg"]'></div>
				<div class="absolute inset-0 bg-gradient-to-b from-black/25 via-black/35 to-black/45 z-[1]"></div>

				<div class="absolute inset-x-[6%] top-[12%] p-9 text-white z-10">
                    <h1 class="m-0 mb-2 text-4xl md:text-5xl lg:text-6xl font-extrabold">Welcome to Bigasan Hub</h1>
                    <p class="m-0 mb-5 opacity-95 max-w-[65ch] leading-relaxed">Premier rice supplier for households, restaurants, and retailers across the Philippines. Quality varieties, competitive pricing, and reliable wholesale and retail distribution.</p>
                    <a class="inline-block px-6 py-3 rounded-full bg-green-800 text-white font-bold shadow-lg hover:bg-green-600 transition" href="#franchise-modal" data-open-franchise-modal>Franchise Now</a>
                </div>
            </section>
			<div class="relative -mt-[2px]" aria-hidden="true">
				<svg class="block w-full" viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
					<path d="M0,32 C240,80 480,0 720,32 C960,64 1200,16 1440,48 L1440,80 L0,80 Z" fill="#ffffff"></path>
				</svg>
			</div>

            <!-- Franchise Modal -->
            <div id="franchise-modal" class="fixed inset-0 z-[60] hidden">
                <div class="absolute inset-0 bg-black/60" data-close-modal></div>
                <div role="dialog" aria-modal="true" aria-labelledby="franchise-title" class="relative mx-auto my-10 max-w-[640px] w-[92%] bg-white rounded-2xl shadow-2xl overflow-hidden">
                    <button type="button" class="absolute top-3 right-3 p-2 rounded-full bg-white text-[#185a33] shadow hover:bg-green-50" data-close-modal aria-label="Close">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                    <div class="bg-gradient-to-r from-green-600 to-green-700 text-white text-center text-[11px] sm:text-xs font-bold py-2">
                        Be part of the fastest growing franchising business today
                    </div>
                    <img src="/images/download.jpg" alt="Bigasan Hub Franchise" class="w-full h-44 object-cover" />
                    <div class="p-6 sm:p-7 text-center">
                        <h3 id="franchise-title" class="m-0 mb-2 text-xl sm:text-2xl font-extrabold text-[#185a33]">Start Your Bigasan Hub Business Today!</h3>
                        <div class="text-3xl sm:text-4xl font-extrabold text-[#185a33] tracking-wide">PHP 79,990</div>
                        <p class="m-0 mt-3 text-sm text-[#2d3d2a]">Own your rice retail and wholesale business. Join a fast-growing franchise network. Limited slots available.</p>
                        <div class="mt-5 flex justify-center">
                            <a href="{{ route('contact') }}" class="inline-block px-6 py-3 rounded-full bg-green-800 text-white font-bold shadow-lg hover:bg-green-600 transition">Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- New home-only content -->
        <section class="py-[70px] bg-white">
            <div class="mx-auto w-[92%] max-w-[1200px]">
                <h2 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">Why choose Bigasan Hub</h2>
                <p class="text-center m-0 mb-9 text-[#6b856f] max-w-[70ch] mx-auto">Reliable sourcing, fair pricing, and a service-first team focused on your household or business needs.</p>
                <div class="grid gap-6 md:grid-cols-3">
                    <article class="bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6">
                        <div class="text-green-700 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14.59l-3.29-3.3 1.42-1.41 1.87 1.88 3.88-3.88 1.41 1.41L13 16.59z"/></svg>
                        </div>
                        <h3 class="m-0 mb-1 text-xl text-[#185a33] font-extrabold">Consistent Quality</h3>
                        <p class="m-0 text-[#2d3d2a]">We partner with trusted mills to ensure every sack meets our standard.</p>
                    </article>
                    <article class="bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6">
                        <div class="text-green-700 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1l3 7h7l-5.5 4 2 7L12 16l-6.5 3 2-7L2 8h7z"/></svg>
                        </div>
                        <h3 class="m-0 mb-1 text-xl text-[#185a33] font-extrabold">Fair, Transparent Prices</h3>
                        <p class="m-0 text-[#2d3d2a]">Retail or wholesale, you get competitive pricing with no surprises.</p>
                    </article>
                    <article class="bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6">
                        <div class="text-green-700 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0H5z"/></svg>
                        </div>
                        <h3 class="m-0 mb-1 text-xl text-[#185a33] font-extrabold">Service You Can Trust</h3>
                        <p class="m-0 text-[#2d3d2a]">A friendly team ready to support households, stores, and food businesses.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="py-[70px] bg-white">
            <div class="mx-auto w-[92%] max-w-[1200px]">
                <h2 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">Featured Varieties</h2>
                <p class="text-center m-0 mb-9 text-[#6b856f] max-w-[70ch] mx-auto">Our most requested rice for homes and food businesses.</p>
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden">
                        <div class="aspect-[4/3] bg-green-50 grid place-items-center">
                            <img src="images/dinorado.png" alt="Dinorado rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-105" />
                        </div>
                        <div class="p-5">
                            <h3 class="m-0 mb-1 text-lg text-[#185a33] font-extrabold">Dinorado</h3>
                            <p class="m-0 text-sm text-[#2d3d2a] mb-3">Fragrant, soft grain—perfect for everyday meals.</p>
                            <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-green-800 hover:text-green-900">View details →</a>
                        </div>
                    </article>
                    <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden">
                        <div class="aspect-[4/3] bg-green-50 grid place-items-center">
                            <img src="images/hasmin.png" alt="Hasmin rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-105" />
                        </div>
                        <div class="p-5">
                            <h3 class="m-0 mb-1 text-lg text-[#185a33] font-extrabold">Hasmin</h3>
                            <p class="m-0 text-sm text-[#2d3d2a] mb-3">Premium aroma and texture for special occasions.</p>
                            <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-green-800 hover:text-green-900">View details →</a>
                        </div>
                    </article>
                    <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden">
                        <div class="aspect-[4/3] bg-green-50 grid place-items-center">
                            <img src="images/ivory.png" alt="Ivory rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-105" />
                        </div>
                        <div class="p-5">
                            <h3 class="m-0 mb-1 text-lg text-[#185a33] font-extrabold">Ivory</h3>
                            <p class="m-0 text-sm text-[#2d3d2a] mb-3">Clean and reliable quality, great for families.</p>
                            <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-green-800 hover:text-green-900">View details →</a>
                        </div>
                    </article>
                    <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden">
                        <div class="aspect-[4/3] bg-green-50 grid place-items-center">
                            <img src="images/prima.png" alt="Prima rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-105" />
                        </div>
                        <div class="p-5">
                            <h3 class="m-0 mb-1 text-lg text-[#185a33] font-extrabold">Prima</h3>
                            <p class="m-0 text-sm text-[#2d3d2a] mb-3">Balanced choice for taste and value.</p>
                            <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-green-800 hover:text-green-900">View details →</a>
                        </div>
                    </article>
                    <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden">
                        <div class="aspect-[4/3] bg-green-50 grid place-items-center">
                            <img src="images/dinorado.png" alt="Dinorado rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-105" />
                        </div>
                        <div class="p-5">
                            <h3 class="m-0 mb-1 text-lg text-[#185a33] font-extrabold">Dinorado</h3>
                            <p class="m-0 text-sm text-[#2d3d2a] mb-3">Fragrant, soft grain—perfect for everyday meals.</p>
                            <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-green-800 hover:text-green-900">View details →</a>
                        </div>
                    </article>
                    <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden">
                        <div class="aspect-[4/3] bg-green-50 grid place-items-center">
                            <img src="images/hasmin.png" alt="Hasmin rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-105" />
                        </div>
                        <div class="p-5">
                            <h3 class="m-0 mb-1 text-lg text-[#185a33] font-extrabold">Hasmin</h3>
                            <p class="m-0 text-sm text-[#2d3d2a] mb-3">Premium aroma and texture for special occasions.</p>
                            <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-green-800 hover:text-green-900">View details →</a>
                        </div>
                    </article>
                    <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden">
                        <div class="aspect-[4/3] bg-green-50 grid place-items-center">
                            <img src="images/ivory.png" alt="Ivory rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-105" />
                        </div>
                        <div class="p-5">
                            <h3 class="m-0 mb-1 text-lg text-[#185a33] font-extrabold">Ivory</h3>
                            <p class="m-0 text-sm text-[#2d3d2a] mb-3">Clean and reliable quality, great for families.</p>
                            <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-green-800 hover:text-green-900">View details →</a>
                        </div>
                    </article>
                    <article class="group bg-white rounded-[14px] shadow-md border border-[#e7efe8] overflow-hidden">
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

        <section class="py-10 bg-gradient-to-r from-green-50 to-green-100">
            <div class="mx-auto w-[92%] max-w-[1200px]">
                <div class="marquee">
                    <div class="marquee-track">
                        <img src="images/dinorado.png" alt="Dinorado" class="h-12 w-auto opacity-90" />
                        <img src="images/hasmin.png" alt="Hasmin" class="h-12 w-auto opacity-90" />
                        <img src="images/ivory.png" alt="Ivory" class="h-12 w-auto opacity-90" />
                        <img src="images/prima.png" alt="Prima" class="h-12 w-auto opacity-90" />
                        <img src="images/dinorado.png" alt="Dinorado" class="h-12 w-auto opacity-90" />
                        <img src="images/hasmin.png" alt="Hasmin" class="h-12 w-auto opacity-90" />
                        <img src="images/ivory.png" alt="Ivory" class="h-12 w-auto opacity-90" />
                        <img src="images/prima.png" alt="Prima" class="h-12 w-auto opacity-90" />
                    </div>
                </div>
            </div>
        </section>

        <section class="py-[70px] bg-white bg-gradient-to-b from-green-100/60 to-green-200/30">
            <div class="mx-auto w-[92%] max-w-[1200px]">
                <h2 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">Explore more</h2>
                <p class="text-center m-0 mb-9 text-[#6b856f] max-w-[70ch] mx-auto">Jump to detailed pages for company info, product lineup, branches, and more.</p>
                <div class="grid gap-[22px] sm:grid-cols-2 lg:grid-cols-4">
                    <a href="{{ route('about') }}" class="group block bg-white rounded-[14px] border border-[#e7efe8] shadow-md p-6 hover:border-green-400 hover:bg-green-50 transition">
                        <div class="text-[#185a33] font-extrabold text-lg mb-1">About Us</div>
                        <div class="text-[#2d3d2a] text-sm">Mission, vision, and our story.</div>
                    </a>
                    <a href="{{ route('products') }}" class="group block bg-white rounded-[14px] border border-[#e7efe8] shadow-md p-6 hover:border-green-400 hover:bg-green-50 transition">
                        <div class="text-[#185a33] font-extrabold text-lg mb-1">Products</div>
                        <div class="text-[#2d3d2a] text-sm">See available rice varieties.</div>
                    </a>
                    <a href="{{ route('branches') }}" class="group block bg-white rounded-[14px] border border-[#e7efe8] shadow-md p-6 hover:border-green-400 hover:bg-green-50 transition">
                        <div class="text-[#185a33] font-extrabold text-lg mb-1">Branch Locator</div>
                        <div class="text-[#2d3d2a] text-sm">Find a store near you.</div>
                    </a>
                    <a href="{{ route('contact') }}" class="group block bg-white rounded-[14px] border border-[#e7efe8] shadow-md p-6 hover:border-green-400 hover:bg-green-50 transition">
                        <div class="text-[#185a33] font-extrabold text-lg mb-1">Contact</div>
                        <div class="text-[#2d3d2a] text-sm">Get quotes and assistance.</div>
                    </a>
                </div>
            </div>
        </section>

        <section id="contact" class="py-[70px] bg-white">
            <div class="mx-auto w-[92%] max-w-[1200px] grid gap-6 md:grid-cols-2">
                <div class="rounded-[14px] border border-[#e7efe8] shadow-md p-6 bg-gradient-to-b from-green-50 to-white">
                    <h3 class="m-0 mb-2 text-2xl text-[#185a33] font-extrabold">Franchising and Wholesale</h3>
                    <p class="m-0 mb-4 text-[#2d3d2a]">We provide reliable supply for sari-sari stores, restaurants, and supermarkets. Let’s talk about volume pricing and delivery schedules.</p>
                    <ul class="m-0 p-0 list-none grid gap-2 text-sm text-[#2d3d2a]">
                        <li class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-green-600"></span> Flexible payment terms</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-green-600"></span> Scheduled deliveries</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-green-600"></span> Brand and marketing support</li>
                    </ul>
                </div>
                <div class="rounded-[14px] border border-[#e7efe8] shadow-md p-6 bg-white">
                    <h3 class="m-0 mb-2 text-2xl text-[#185a33] font-extrabold">Get a quote</h3>
                    <p class="m-0 mb-4 text-[#2d3d2a]">Tell us what you need and our team will get back within 1 business day.</p>
                    <div class="flex flex-wrap gap-3">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-[#185a33] text-white font-semibold hover:bg-[#134629] transition"><span>Contact page</span></a>
                        <a href="mailto:info@bigasanhub.com" class="inline-flex items-center gap-2 px-5 py-3 rounded-full bg-green-100 text-green-900 font-semibold border border-[#cfe9d2] hover:bg-green-50 transition"><span>Email us</span></a>
                    </div>
                </div>
            </div>
        </section>

	<!-- Stats strip -->
	<section class="py-10 bg-[#185a33] text-white">
		<div class="mx-auto w-[92%] max-w-[1200px] grid grid-cols-2 md:grid-cols-4 gap-6">
			<div class="text-center">
				<div class="text-4xl font-extrabold">40+</div>
				<div class="opacity-90">Rice Varieties</div>
			</div>
			<div class="text-center">
				<div class="text-4xl font-extrabold">15+</div>
				<div class="opacity-90">Partner Mills</div>
			</div>
			<div class="text-center">
				<div class="text-4xl font-extrabold">20+</div>
				<div class="opacity-90">Service Areas</div>
                </div>
			<div class="text-center">
				<div class="text-4xl font-extrabold">5K+</div>
				<div class="opacity-90">Happy Customers</div>
                    </div>
            </div>
        </section>

	<!-- Testimonials -->
	<section class="py-[70px] bg-white">
		<div class="mx-auto w-[92%] max-w-[1200px]">
			<h2 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">What customers say</h2>
			<p class="text-center m-0 mb-9 text-[#6b856f] max-w-[70ch] mx-auto">A few words from households and business owners who buy from us regularly.</p>
			<div class="grid gap-6 md:grid-cols-3">
				<blockquote class="bg-white rounded-[14px] border border-[#e7efe8] shadow-md p-6">
					<p class="m-0 mb-3 text-[#2d3d2a]">“Quality is consistent and delivery is always on time. Bigasan Hub is our go-to supplier.”</p>
					<footer class="text-sm text-[#6b856f]">Restaurant Owner, Cebu City</footer>
				</blockquote>
				<blockquote class="bg-white rounded-[14px] border border-[#e7efe8] shadow-md p-6">
					<p class="m-0 mb-3 text-[#2d3d2a]">“Great pricing for resellers and friendly service. Our customers love the varieties.”</p>
					<footer class="text-sm text-[#6b856f]">Rice Reseller, Lapu-Lapu</footer>
				</blockquote>
				<blockquote class="bg-white rounded-[14px] border border-[#e7efe8] shadow-md p-6">
					<p class="m-0 mb-3 text-[#2d3d2a]">“We’ve switched to Bigasan Hub for home use—fragrant and clean every time.”</p>
					<footer class="text-sm text-[#6b856f]">Home Customer, Mandaue</footer>
				</blockquote>
                </div>
            </div>
        </section>

        <section class="py-12">
            <div class="mx-auto w-[92%] max-w-[1200px]">
                <div class="rounded-2xl bg-[#185a33] text-white p-8 md:p-10 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div>
                        <h3 class="m-0 mb-1 text-2xl md:text-3xl font-extrabold">Ready to stock up?</h3>
                        <p class="m-0 opacity-95">Order by the sack or truckload with reliable delivery across our service areas.</p>
                    </div>
                    <div class="flex gap-3">
                        <a href="{{ route('products') }}" class="inline-block px-5 py-3 rounded-full bg-white text-[#185a33] font-bold shadow-lg hover:shadow-xl transition">View Products</a>
                        <a href="{{ route('contact') }}" class="inline-block px-5 py-3 rounded-full bg-[#33e59f] text-[#0f2613] font-bold shadow-lg hover:bg-white transition">Get a Quote</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-[70px] bg-white">
            <div class="mx-auto w-[92%] max-w-[1200px]">
                <h2 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">Frequently asked questions</h2>
                <p class="text-center m-0 mb-9 text-[#6b856f] max-w-[70ch] mx-auto">Quick answers to common questions about supply, delivery, and pricing.</p>
                <div class="grid gap-4 md:grid-cols-2">
                    <details class="rounded-lg border border-[#e7efe8] p-4 open:bg-green-50">
                        <summary class="cursor-pointer font-semibold text-[#185a33]">Do you deliver outside Cebu?</summary>
                        <div class="mt-2 text-[#2d3d2a]">Yes. We primarily serve Cebu but can arrange logistics to nearby provinces for wholesale orders.</div>
                    </details>
                    <details class="rounded-lg border border-[#e7efe8] p-4 open:bg-green-50">
                        <summary class="cursor-pointer font-semibold text-[#185a33]">What is the minimum order for wholesale?</summary>
                        <div class="mt-2 text-[#2d3d2a]">Minimums vary by variety. Typically 10 sacks and up. Contact us for current terms.</div>
                    </details>
                    <details class="rounded-lg border border-[#e7efe8] p-4 open:bg-green-50">
                        <summary class="cursor-pointer font-semibold text-[#185a33]">Can I request samples?</summary>
                        <div class="mt-2 text-[#2d3d2a]">We can arrange samples for qualified wholesale buyers. Please reach out with your requirements.</div>
                    </details>
                    <details class="rounded-lg border border-[#e7efe8] p-4 open:bg-green-50">
                        <summary class="cursor-pointer font-semibold text-[#185a33]">Do prices change often?</summary>
                        <div class="mt-2 text-[#2d3d2a]">We provide transparent, updated pricing based on market conditions. Get a quote for the latest rates.</div>
                    </details>
                </div>
            </div>
        </section>

        <a href="{{ route('contact') }}" class="fixed bottom-5 right-5 z-50 inline-flex items-center gap-2 px-5 py-3 rounded-full bg-[#185a33] text-white font-bold shadow-lg hover:bg-[#134629] focus:outline-none focus:ring-2 focus:ring-white" aria-label="Contact Bigasan Hub">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M2 5a3 3 0 0 1 3-3h2a1 1 0 0 1 1 1v3a1 1 0 0 1-.553.894l-1.447.724a10.97 10.97 0 0 0 4.382 4.382l.724-1.447A1 1 0 0 1 13 10h3a1 1 0 0 1 1 1v2a3 3 0 0 1-3 3h-1a11 11 0 0 1-11-11V5Z"/></svg>
            <span>Contact Us</span>
        </a>

        <footer class="text-white py-7">
            <div class="mx-auto w-[92%] max-w-[1200px] flex items-center justify-between">
                <p class="m-0">© {{ date('Y') }} Bigasan Hub. All rights reserved.</p>
                <div class="flex gap-2.5">
                    <span class="w-9 h-9 grid place-items-center rounded-full bg-white/15" title="Facebook" aria-label="Facebook">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M22 12.06C22 6.503 17.523 2 12 2S2 6.503 2 12.06c0 4.989 3.657 9.128 8.438 9.94v-7.03H7.898v-2.91h2.54v-2.22c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.196 2.238.196v2.47h-1.261c-1.243 0-1.63.774-1.63 1.567v1.877h2.773l-.443 2.91h-2.33V22C18.343 21.188 22 17.049 22 12.06Z"/></svg>
                    </span>
                    <span class="w-9 h-9 grid place-items-center rounded-full bg-white/15" title="Instagram" aria-label="Instagram">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5Zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7Zm5 3.8A5.2 5.2 0 1 1 6.8 13 5.2 5.2 0 0 1 12 7.8Zm6.2-.8a1.2 1.2 0 1 1-1.2 1.2A1.2 1.2 0 0 1 18.2 7Z"/></svg>
                    </span>
                    <a class="w-9 h-9 grid place-items-center rounded-full bg-white/15 text-white" href="mailto:info@bigasanhub.com" title="Email" aria-label="Email">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Zm8.06 8.94L20 8H4l7.94 4.94a1 1 0 0 0 1.12 0Z"/></svg>
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>

