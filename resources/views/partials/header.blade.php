<header class="w-full fixed top-0 left-0 z-50 backdrop-blur-md transition-all duration-500" id="navbar">
    <div class="relative max-w-screen-xl mx-auto flex items-center justify-between py-4 px-6 md:px-12 bg-gray-200/50 rounded-b-2xl shadow-lg transition-colors duration-500">

        <!-- Left Navigation -->
        <nav class="hidden md:flex items-center gap-10 font-semibold text-lg text-gray-800 left-nav">
            <a href="{{ route('landing') }}" class="nav-link relative px-3 py-1 transition-all">Home</a>
            <a href="{{ route('about') }}" class="nav-link relative px-3 py-1 transition-all">About</a>
        </nav>

        <!-- Centered Logo -->
        <div class="relative z-10 flex items-center justify-center mx-6 logo-wrapper">
            <a href="{{ route('landing') }}" class="block">
                <img class="h-20 w-auto logo" alt="Bigasan Hub logo" src="images/logo.v2.png" />
            </a>
        </div>

        <!-- Right Navigation -->
        <nav class="hidden md:flex items-center gap-10 font-semibold text-lg text-gray-800 right-nav">
            <a href="{{ route('products') }}" class="nav-link relative px-3 py-1 transition-all">Products</a>
            <a href="{{ route('branches') }}" class="nav-link relative px-3 py-1 transition-all">Branch Locator</a>
        </nav>

        <!-- Mobile Menu Toggle -->
        <button id="mobile-menu-toggle" class="md:hidden inline-flex items-center justify-center p-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-green-500 rounded-md z-10">
            <svg id="icon-menu" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="icon-close" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-gray-200/50 shadow-md border-t border-green-200 rounded-b-2xl backdrop-blur-md">
        <nav class="flex flex-col gap-2 p-4 font-semibold text-gray-800">
            <a href="{{ route('landing') }}" class="py-2 px-3 hover:bg-green-600 hover:text-white rounded transition">Home</a>
            <a href="{{ route('about') }}" class="py-2 px-3 hover:bg-green-600 hover:text-white rounded transition">About</a>
            <a href="{{ route('products') }}" class="py-2 px-3 hover:bg-green-600 hover:text-white rounded transition">Products</a>
            <a href="{{ route('branches') }}" class="py-2 px-3 hover:bg-green-600 hover:text-white rounded transition">Branch Locator</a>
        </nav>
    </div>
</header>

<style>
    /* Nav link hover effects */
    .nav-link {
        position: relative;
        color: #1f2937;
        padding: 0.25rem 0.75rem;
        transition: color 0.3s ease, background 0.3s ease, transform 0.2s ease;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0%;
        height: 3px;
        background: #16a34a;
        border-radius: 3px;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .nav-link:hover {
        color: #16a34a;
        transform: translateY(-2px);
        text-shadow: 0 0 6px rgba(22, 163, 74, 0.5);
    }

    .nav-link:hover::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: rgba(22, 163, 74, 0.08);
        border-radius: 6px;
        z-index: -1;
        transition: all 0.3s ease;
    }

    /* Logo animations */
    .logo {
        transition: transform 0.4s ease, filter 0.4s ease;
    }

    .logo-wrapper:hover .logo {
        transform: scale(1.08) rotate(-3deg);
        filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.3));
    }

    /* Glass blur effect on scroll */
    #navbar.scrolled {
        background: rgba(243, 244, 246, 0.7);
        backdrop-filter: blur(12px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        transition: all 0.4s ease;
    }

    /* Slide-in nav links */
    .left-nav a,
    .right-nav a {
        opacity: 0;
        transform: translateX(-50px);
    }

    .right-nav a {
        transform: translateX(50px);
    }

    .left-nav a,
    .right-nav a {
        transition: transform 0.6s ease, opacity 0.6s ease;
    }
</style>

<script>
    const navbar = document.getElementById('navbar');
    const leftLinks = document.querySelectorAll('.left-nav a');
    const rightLinks = document.querySelectorAll('.right-nav a');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Animate nav links on load/scroll
    function animateNavLinks() {
        leftLinks.forEach((link, index) => {
            setTimeout(() => {
                link.style.opacity = '1';
                link.style.transform = 'translateX(0)';
            }, index * 100);
        });
        rightLinks.forEach((link, index) => {
            setTimeout(() => {
                link.style.opacity = '1';
                link.style.transform = 'translateX(0)';
            }, index * 100);
        });
    }

    // Animate on page load
    window.addEventListener('load', animateNavLinks);

    // Mobile menu toggle
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        document.getElementById('icon-menu').classList.toggle('hidden');
        document.getElementById('icon-close').classList.toggle('hidden');
    });
</script>