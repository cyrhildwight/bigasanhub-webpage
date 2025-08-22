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
        /* * {
            color: #ffffff !important;
        } */
        /* Forest Green dark theme */
        html,
        body {
            background: #2E6F40 !important;
            /* Forest Green */
            color: #ffffff !important;
        }

        .bg-white,
        .bg-green-100,
        .bg-green-200,
        .bg-green-300,
        .bg-green-600,
        .bg-green-700,
        .bg-green-900,
        .card {
            background-color: #1a4a2a !important;
            color: #ffffff !important;
            border-color: #0d2e1a !important;
        }

        .text-green-700,
        .text-green-900,
        .text-green-600,
        .text-green-200,
        .text-green-100 {
            color: #ffffff !important;
        }

        .border-green-300,
        .border-green-200,
        .border-green-100 {
            border-color: #0d2e1a !important;
        }

        .shadow-lg,
        .shadow-2xl {
            box-shadow: 0 8px 32px 0 rgba(13, 46, 26, 0.4) !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .font-bold,
        .font-extrabold {
            color: #ffffff !important;
        }

        a,
        .link,
        .hover\:text-green-600:hover {
            color: #ffffff !important;
        }

        .btn,
        button,
        .rounded-full {
            background-color: #ffffff !important;
            color: #2E6F40 !important;
            border-color: #0d2e1a !important;
        }

        .btn:hover,
        button:hover,
        .rounded-full:hover {
            background-color: #0d2e1a !important;
            color: #ffffff !important;
        }

        /* Contact button specific styles */
        button[data-open-modal="contact-modal-form"] {
            background-color: #2E6F40 !important;
            color: #ffffff !important;
        }

        button[data-open-modal="contact-modal-form"]:hover {
            background-color: #0d2e1a !important;
            color: #ffffff !important;
        }

        .border,
        .rounded-lg,
        .rounded-2xl {
            border-color: #0d2e1a !important;
        }

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

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(40px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInTop {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadein-left,
        .fadein-right,
        .fadein-top {
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

<body id="smooth-bg" class="min-h-screen bg-[#2E6F40] text-[#ffffff] transition-colors duration-700" style="font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Ubuntu, 'Helvetica Neue', Arial, sans-serif;">
    <!-- Removed background color scroll transition so hero images show immediately when scrolling up -->
    @include('partials.header')

    <!-- Success Message Display -->
    @if(session('success'))
    <div class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 p-4 rounded-lg bg-[#1a4a2a] text-[#ffffff] text-center font-semibold border border-[#0d2e1a] shadow-lg transition-all duration-300">
        {{ session('success') }}
    </div>
    @endif

    <!-- Custom Success Notification -->
    <div id="successNotification" class="fixed top-4 left-1/2 transform -translate-x-1/2 z-[100] max-w-md w-[92%] bg-white border border-[#0d2e1a] rounded-2xl shadow-2xl transition-all duration-500 opacity-0 pointer-events-none overflow-hidden scale-95">
        <div class="bg-gradient-to-r from-[#2E6F40] to-[#1a4a2a] text-[#ffffff] text-center text-xs font-bold py-2">
            <svg class="inline-block w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            Success!
        </div>
        <div class="p-4 text-center">
            <div class="flex items-center justify-center mb-3">
                <div class="w-12 h-12 bg-[#2E6F40] rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#ffffff]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            <p id="successMessage" class="text-[#2E6F40] font-semibold text-sm leading-relaxed mb-3">Success!</p>
            <div class="flex justify-center">
                <div class="w-8 h-1 bg-[#0d2e1a] rounded-full"></div>
            </div>
        </div>
    </div>

    <main id="home" class="w-full">
        <section class="relative w-full min-h-screen h-screen flex items-center justify-center overflow-hidden p-0 m-0" aria-label="Hero">
            <div class="absolute inset-0 w-full h-full pointer-events-none">
                <img src="/images/download.jpg" alt="Bigasan Hub Hero 1" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:1;" draggable="false" />
                <img src="/images/download1.jpg" alt="Bigasan Hub Hero 2" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download2.jpg" alt="Bigasan Hub Hero 3" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download3.jpg" alt="Bigasan Hub Hero 4" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download5.jpg" alt="Bigasan Hub Hero 5" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download6.jpg" alt="Bigasan Hub Hero 6" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download7.jpg" alt="Bigasan Hub Hero 7" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download8.jpg" alt="Bigasan Hub Hero 8" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download9.jpg" alt="Bigasan Hub Hero 9" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download10.jpg" alt="Bigasan Hub Hero 10" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download11.jpg" alt="Bigasan Hub Hero 11" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download12.jpg" alt="Bigasan Hub Hero 12" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download13.jpg" alt="Bigasan Hub Hero 13" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <img src="/images/download14.jpg" alt="Bigasan Hub Hero 14" class="hero-parallax-bg hero-slide fixed inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="z-index:0;opacity:0;" draggable="false" />
                <div class="absolute inset-0 bg-gradient-to-b from-[#2E6F40]/30 via-[#1a4a2a]/40 to-black/30 z-[2]"></div>
            </div>
            <style>
                @media (max-width: 768px) {
                    .hero-slide {
                        min-height: 320px;
                        height: 100vh;
                    }

                    section[aria-label="Hero"] .flex {
                        padding-top: 4rem;
                    }

                    h1#hero-title {
                        font-size: 2rem;
                    }
                }

                @media (max-width: 480px) {
                    .hero-slide {
                        min-height: 200px;
                    }

                    h1#hero-title {
                        font-size: 1.3rem;
                    }
                }
            </style>
            <div class="absolute inset-0 bg-gradient-to-b from-[#2E6F40]/30 via-[#1a4a2a]/50 to-transparent z-[2]"></div>
            </div>
            <div class="relative z-10 w-full flex flex-col items-center justify-center px-6">
                <h1 class="text-[#ffffff] text-center text-4xl md:text-5xl lg:text-6xl font-extrabold mb-3 fadeup-entrance" id="hero-title">Welcome to Bigasan Hub</h1>
                <p class="text-[#ffffff]/90 text-center text-lg md:text-xl max-w-2xl mx-auto mb-6 fadeup-entrance" id="hero-subtext" style="animation-delay:0.15s;">Premier rice supplier for households, restaurants, and retailers across the Philippines. Quality varieties, competitive pricing, and reliable wholesale and retail distribution.</p>
                <button type="button" class="inline-block px-6 py-3 rounded-full bg-[#ffffff] text-[#2E6F40] font-bold shadow-lg hover:bg-[#0d2e1a] hover:text-[#ffffff] transition fadeup-entrance" style="animation-delay:0.3s;" data-open-modal="franchise-modal-form">Franchise Now</button>
                <!-- Scroll Down button removed -->
            </div>
        </section>
        <div class="relative -mt-[2px]" aria-hidden="true">
            <svg class="block w-full" viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,32 C240,80 480,0 720,32 C960,64 1200,16 1440,48 L1440,80 L0,80 Z" fill="#0d2e1a"></path>
            </svg>
        </div>

        <!-- Franchise Modal -->
        @include('partials.modals.franchise-modal')

        @include('partials.modals.signup-modal')
        @include('partials.modals.contact-modal')
    </main>

    @include('partials.sections.why-choose')
    @include('partials.sections.featured-varieties')
    @include('partials.sections.explore-more')
    @include('partials.sections.contact')
    @include('partials.sections.faq')
    <button type="button" data-open-modal="contact-modal-form" class="fixed bottom-5 right-5 z-50 inline-flex items-center gap-2 px-5 py-3 rounded-full bg-[#2E6F40] text-[#ffffff] font-bold shadow-lg hover:bg-[#0d2e1a] hover:scale-110 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-[#0d2e1a] transition-all duration-300" aria-label="Contact Bigasan Hub">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 5a3 3 0 0 1 3-3h2a1 1 0 0 1 1 1v3a1 1 0 0 1-.553.894l-1.447.724a10.97 10.97 0 0 0 4.382 4.382l.724-1.447A1 1 0 0 1 13 10h3a1 1 0 0 1 1 1v2a3 3 0 0 1-3 3h-1a11 11 0 0 1-11-11V5Z" />
        </svg>
        <span>Contact Us</span>
    </button>

    @include('partials.footer')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = document.querySelector('.fixed.top-4');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.style.opacity = '0';
                    successMessage.style.transform = 'translate(-50%, -100%)';
                    setTimeout(() => {
                        successMessage.remove();
                    }, 300);
                }, 5000); 
            }
        });
        function showSuccessNotification(message) {
            console.log('showSuccessNotification called with:', message);
            const notification = document.getElementById('successNotification');
            const messageElement = document.getElementById('successMessage');

            console.log('Notification element found:', notification);
            console.log('Message element found:', messageElement);

            if (notification && messageElement) {
                messageElement.textContent = message;
                notification.style.opacity = '1';
                notification.style.transform = 'translate(-50%, 0) scale(1)';
                notification.style.pointerEvents = 'auto';

                setTimeout(() => {
                    notification.style.opacity = '0';
                    notification.style.transform = 'translate(-50%, -100%) scale(0.95)';
                    notification.style.pointerEvents = 'none';
                }, 4000); // Hide after 4 seconds
            } else {
                // Fallback to alert if elements not found
                console.log('Elements not found, using alert fallback');
                alert(message);
            }
        }
    </script>
    <script>
        // Automatic hero image slider with scroll fade only on active image
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.hero-slide');
            let current = 0;
            let lastProgress = 0;

            function showSlide(idx) {
                slides.forEach((slide, i) => {
                    slide.style.opacity = (i === idx) ? (1 - lastProgress * 1.2) : '0';
                });
            }

            setInterval(() => {
                current = (current + 1) % slides.length;
                showSlide(current);
            }, 4000); // 4 seconds per slide

            // Parallax fade on scroll for active slide only
            document.addEventListener('scroll', function() {
                const hero = document.querySelector('section[aria-label="Hero"]');
                if (!hero || !slides.length) return;
                const rect = hero.getBoundingClientRect();
                let progress = 1 - Math.max(0, rect.bottom) / (rect.height || 1);
                progress = Math.max(0, Math.min(1, progress));
                lastProgress = progress;
                showSlide(current);
            }, {
                passive: true
            });

            // Initial show
            showSlide(current);
        });
    </script>
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
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            const franchiseForm = document.getElementById('franchiseForm');
            if (franchiseForm) {
                franchiseForm.addEventListener('submit', function(e) {
                    e.preventDefault(); // prevent normal form submit

                    let form = this;
                    let formData = new FormData(form);
                    let alertDiv = document.getElementById('franchiseAlert');

                    console.log('Franchise form submitted');
                    console.log('Alert div found:', alertDiv);

                    fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: formData
                        })
                        .then(res => res.json())
                        .then(data => {
                            console.log('Response data:', data);
                            if (data.success) {
                                // Reset form first
                                form.reset();

                                // Show alert and close modals after user clicks OK
                                alert('Thank you for your franchise application! We will get back to you soon.');

                                // Close both modals after alert is dismissed
                                const signupModal = document.getElementById('signup-modal-form');
                                const franchiseModal = document.getElementById('franchise-modal-form');
                                if (signupModal) {
                                    signupModal.classList.add('hidden');
                                }
                                if (franchiseModal) {
                                    franchiseModal.classList.add('hidden');
                                }

                                // Re-enable body scroll
                                document.body.style.overflow = 'auto';
                                document.body.style.position = 'static';

                                console.log('Franchise application submitted successfully');
                            } else {
                                alertDiv.innerHTML = `<div class="p-3 rounded bg-red-200 text-red-900">Something went wrong. Try again.</div>`;
                            }
                        })
                        .catch(err => {
                            console.error('Fetch error:', err);
                            alertDiv.innerHTML = `<div class="p-3 rounded bg-red-200 text-red-900">Submission failed: ${err.message}</div>`;
                        });
                });
            }

            // Contact form submission
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault(); // prevent normal form submit

                    let form = this;
                    let formData = new FormData(form);
                    let alertDiv = document.getElementById('contactAlert');

                    fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: formData
                        })
                        .then(res => res.json())
                        .then(data => {
                            console.log('Contact response data:', data);
                            if (data.success) {
                                // Reset form first
                                form.reset();

                                // Show alert and close modals after user clicks OK
                                alert('Thank you for contacting us! We will get back to you soon.');

                                // Close all modals after alert is dismissed
                                const contactModal = document.getElementById('contact-modal-form');
                                const franchiseModal = document.getElementById('franchise-modal-form');
                                const signupModal = document.getElementById('signup-modal-form');

                                if (contactModal) {
                                    contactModal.classList.add('hidden');
                                }
                                if (franchiseModal) {
                                    franchiseModal.classList.add('hidden');
                                }
                                if (signupModal) {
                                    signupModal.classList.add('hidden');
                                }

                                // Re-enable body scroll
                                document.body.style.overflow = 'auto';
                                document.body.style.position = 'static';

                                console.log('Contact form submitted successfully');
                            } else {
                                alertDiv.innerHTML = `<div class="p-3 rounded bg-red-200 text-red-900">Something went wrong. Try again.</div>`;
                            }
                        })
                        .catch(err => {
                            console.error('Contact fetch error:', err);
                            alertDiv.innerHTML = `<div class="p-3 rounded bg-red-200 text-red-900">Submission failed: ${err.message}</div>`;
                        });
                });
            }
        });
    </script>
</body>

</html>