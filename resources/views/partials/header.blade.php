<header class="w-full bg-[#f8fafc] shadow-md fixed top-0 left-0 z-50">
    <div class="max-w-screen-lg mx-auto flex items-center justify-between py-2 px-4 md:px-8 rounded-b-xl">
        <div class="flex items-center gap-3">
            <a href="{{ route('landing') }}">
                <img class="h-12 w-auto block" alt="Bigasan Hub logo" src="images/logo.v2.png" />
            </a>
        </div>
        <nav class="hidden md:flex gap-8 flex-1 justify-center">
            <a class="flex items-center gap-2 text-black font-sans px-2 py-1 rounded hover:text-[#185a33] hover:bg-[#f6fbf7] transition" href="{{ route('landing') }}">
                <svg class="w-4 h-4" fill="none" stroke="#222" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                Home
            </a>
            <a class="flex items-center gap-2 text-black font-sans px-2 py-1 rounded hover:text-[#185a33] hover:bg-[#f6fbf7] transition" href="{{ route('about') }}">
                <svg class="w-4 h-4" fill="none" stroke="#222" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                About
            </a>
            <a class="flex items-center gap-2 text-black font-sans px-2 py-1 rounded hover:text-[#185a33] hover:bg-[#f6fbf7] transition" href="{{ route('products') }}">
                <svg class="w-4 h-4" fill="none" stroke="#222" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                Products
            </a>
            <a class="flex items-center gap-2 text-black font-sans px-2 py-1 rounded hover:text-[#185a33] hover:bg-[#f6fbf7] transition" href="{{ route('branches') }}">
                <svg class="w-4 h-4" fill="none" stroke="#222" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                Branch Locator
            </a>
        </nav>
        <button id="mobile-menu-toggle" class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-[#2E6F40] focus:outline-none focus:ring-2 focus:ring-[#2E6F40]" aria-controls="mobile-menu" aria-expanded="false" aria-label="Open main menu">
            <svg id="icon-menu" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg id="icon-close" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>
    <div id="mobile-menu" class="md:hidden hidden border-t border-[#e5e5e5] bg-[#f8fafc] shadow-md">
        <nav class="px-6 py-3 flex flex-col gap-2">
            <a class="flex items-center gap-2 text-black py-2" href="{{ route('landing') }}">
                <svg class="w-4 h-4" fill="none" stroke="#222" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                Home
            </a>
            <a class="flex items-center gap-2 text-black py-2" href="{{ route('about') }}">
                <svg class="w-4 h-4" fill="none" stroke="#222" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                About
            </a>
            <a class="flex items-center gap-2 text-black py-2" href="{{ route('products') }}">
                <svg class="w-4 h-4" fill="none" stroke="#222" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                Products
            </a>
            <a class="flex items-center gap-2 text-black py-2" href="{{ route('branches') }}">
                <svg class="w-4 h-4" fill="none" stroke="#222" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                Branch Locator
            </a>
        </nav>
    </div>
</header>
<style>
    /* Force navbar links to be black and visible, overriding global styles */
    nav a {
        color: #222 !important;
    }
    nav a:hover {
        color: #185a33 !important;
    }
</style>
