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
        <style>
            @keyframes fadeInLeft {
                from { opacity: 0; transform: translateX(-40px); }
                to { opacity: 1; transform: translateX(0); }
            }
            @keyframes fadeInRight {
                from { opacity: 0; transform: translateX(40px); }
                to { opacity: 1; transform: translateX(0); }
            }
            @keyframes fadeInTop {
                from { opacity: 0; transform: translateY(40px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .fadein-left, .fadein-right, .fadein-top {
                opacity: 0;
                transition: opacity 0.3s, transform 0.3s;
            }
            .fadein-left.visible {
                opacity: 1;
                animation: fadeInLeft 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            }
            .fadein-right.visible {
                opacity: 1;
                animation: fadeInRight 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            }
            .fadein-top.visible {
                opacity: 1;
                animation: fadeInTop 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            }
        </style>
    </head>
    <body class="min-h-screen bg-[#2E6F40] text-[#ffffff]" style="font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Ubuntu, 'Helvetica Neue', Arial, sans-serif;">
    @include('partials.header')

        <main class="fadein-top">
            @yield('content')
        </main>

        @include('partials.modals.contact-modal')
        <button type="button" data-open-modal="contact-modal-form" class="fixed bottom-5 right-5 z-50 inline-flex items-center gap-2 px-5 py-3 rounded-full bg-[#2E6F40] text-[#ffffff] font-bold shadow-lg hover:bg-[#0d2e1a] hover:scale-110 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-[#0d2e1a] transition-all duration-300" aria-label="Contact Bigasan Hub">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M2 5a3 3 0 0 1 3-3h2a1 1 0 0 1 1 1v3a1 1 0 0 1-.553.894l-1.447.724a10.97 10.97 0 0 0 4.382 4.382l.724-1.447A1 1 0 0 1 13 10h3a1 1 0 0 1 1 1v2a3 3 0 0 1-3 3h-1a11 11 0 0 1-11-11V5Z"/></svg>
            <span>Contact Us</span>
        </button>

         @include('partials.footer')
    </body>
</html>


