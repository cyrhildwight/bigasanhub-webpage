<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-maps-api-key" content="{{ env('GOOGLE_MAPS_API_KEY') }}">
        <title>{{ $title ?? 'Bigasan Hub' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
        @endif
    </head>
    <body class="min-h-screen bg-[radial-gradient(1200px_600px_at_50%_-200px,#c8e6c9_0%,#a5d6a7_30%,#66bb6a_60%,#388e3c_100%)] bg-fixed text-[#0f2613]" style="font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Ubuntu, 'Helvetica Neue', Arial, sans-serif;">
		<header class="w-full bg-gradient-to-r from-gray-100 to-green-700">
			<div class="w-full flex items-center justify-between py-2 px-6 md:px-12">
				<div class="flex items-center gap-3">
					<a href="{{ route('landing') }}"><img class="h-14 w-auto block" alt="Bigasan Hub logo" src="/images/logo.v2.png" /></a>
				</div>
				<nav class="hidden md:flex gap-[22px]">
					<a class="text-white font-semibold hover:text-green-200 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('landing') }}">Home</a>
					<a class="text-white font-semibold hover:text-green-200 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('about') }}">About</a>
					<a class="text-white font-semibold hover:text-green-200 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('products') }}">Products</a>
					<a class="text-white font-semibold hover:text-green-200 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('branches') }}">Branch Locator</a>
				</nav>
				<button id="mobile-menu-toggle" class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-white focus:outline-none focus:ring-2 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" aria-label="Open main menu">
					<svg id="icon-menu" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
					<svg id="icon-close" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
				</button>
			</div>
			<div id="mobile-menu" class="md:hidden hidden border-t border-white/10 bg-green-700">
				<nav class="px-6 py-3 flex flex-col">
					<a class="text-white font-semibold py-2" href="{{ route('landing') }}">Home</a>
					<a class="text-white font-semibold py-2" href="{{ route('about') }}">About</a>
					<a class="text-white font-semibold py-2" href="{{ route('products') }}">Products</a>
					<a class="text-white font-semibold py-2" href="{{ route('branches') }}">Branch Locator</a>
				</nav>
			</div>
		</header>

        <main>
            @yield('content')
        </main>

        <a href="{{ route('contact') }}" class="fixed bottom-5 right-5 z-50 inline-flex items-center gap-2 px-5 py-3 rounded-full bg-[#185a33] text-white font-bold shadow-lg hover:bg-[#134629] focus:outline-none focus:ring-2 focus:ring-white" aria-label="Contact Bigasan Hub">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M2 5a3 3 0 0 1 3-3h2a1 1 0 0 1 1 1v3a1 1 0 0 1-.553.894l-1.447.724a10.97 10.97 0 0 0 4.382 4.382l.724-1.447A1 1 0 0 1 13 10h3a1 1 0 0 1 1 1v2a3 3 0 0 1-3 3h-1a11 11 0 0 1-11-11V5Z"/></svg>
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
    </body>
</html>


