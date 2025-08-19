<header class="w-full bg-gray-300">
    <div class="w-full flex items-center justify-between py-2 px-6 md:px-12">
        <div class="flex items-center gap-3">
            <a href="{{ route('landing') }}">
                <img class="h-14 w-auto block" alt="Bigasan Hub logo" src="images/logo.v2.png" />
            </a>
        </div>
        <nav class="hidden md:flex gap-[22px]">
            <a class="text-black font-sans font-semibold hover:text-green-800 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('landing') }}">Home</a>
            <a class="text-black font-sans font-semibold hover:text-green-800 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('about') }}">About</a>
            <a class="text-black font-sans font-semibold hover:text-green-800 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('products') }}">Products</a>
            <a class="text-black font-sans font-semibold hover:text-green-800 hover:border-b-2 hover:border-green-200 pb-[2px]" href="{{ route('branches') }}">Branch Locator</a>
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
