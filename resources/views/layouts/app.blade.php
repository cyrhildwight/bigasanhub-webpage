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
					<a class="text-white font-semibold hover:text-green-200 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('contact') }}">Contact</a>
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
					<a class="text-white font-semibold py-2" href="{{ route('contact') }}">Contact</a>
				</nav>
			</div>
		</header>

        <main>
            @yield('content')
        </main>

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


