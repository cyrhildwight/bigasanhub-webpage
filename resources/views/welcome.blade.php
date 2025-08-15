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

<body class="min-h-screen bg-[radial-gradient(1200px_600px_at_50%_-200px,#c8e6c9_0%,#a5d6a7_30%,#66bb6a_60%,#388e3c_100%)] bg-fixed text-[#0f2613]" style="font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Ubuntu, 'Helvetica Neue', Arial, sans-serif;">
    @include('partials.header')

    <!-- Success Message Display -->
    @if(session('success'))
        <div class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 p-4 rounded-lg bg-green-100 text-green-900 text-center font-semibold border border-green-300 shadow-lg transition-all duration-300">
            {{ session('success') }}
        </div>
    @endif

    <!-- Custom Success Notification -->
    <div id="successNotification" class="fixed top-4 left-1/2 transform -translate-x-1/2 z-[100] max-w-md w-[92%] bg-white border border-green-200 rounded-2xl shadow-2xl transition-all duration-500 opacity-0 pointer-events-none overflow-hidden scale-95">
        <div class="bg-gradient-to-r from-green-600 to-green-700 text-white text-center text-xs font-bold py-2">
            <svg class="inline-block w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            Success!
        </div>
        <div class="p-4 text-center">
            <div class="flex items-center justify-center mb-3">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            <p id="successMessage" class="text-[#185a33] font-semibold text-sm leading-relaxed mb-3">Success!</p>
            <div class="flex justify-center">
                <div class="w-8 h-1 bg-green-200 rounded-full"></div>
            </div>
        </div>
    </div>

    <main id="home" class="w-full">
        <section class="relative overflow-hidden isolate rounded-none bg-gradient-to-b from-green-100 to-white h-[62vh] min-h-[440px]" aria-label="Hero">
            <div class="absolute inset-0" data-hero-slides='["images/download.jpg","images/download1.jpg","images/download2.jpg","images/download3.jpg","images/download5.jpg","images/download6.jpg","images/download7.jpg","images/download8.jpg","images/download9.jpg","images/download10.jpg","images/download11.jpg","images/download12.jpg","images/download13.jpg","images/download14.jpg"]'></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/60 to-black/50 z-[1]"></div>

            <div class="absolute inset-x-[6%] top-[12%] p-9 text-white z-10">
                <h1 class="m-0 mb-2 text-4xl md:text-5xl lg:text-6xl font-extrabold fadeup-entrance" id="hero-title">Welcome to Bigasan Hub</h1>
                <p class="m-0 mb-5 opacity-95 max-w-[65ch] leading-relaxed fadeup-entrance" id="hero-subtext" style="animation-delay:0.15s;">Premier rice supplier for households, restaurants, and retailers across the Philippines. Quality varieties, competitive pricing, and reliable wholesale and retail distribution.</p>
                <button type="button" class="inline-block px-6 py-3 rounded-full bg-green-700 text-white font-bold shadow-lg hover:bg-green-600 transition fadeup-entrance" style="animation-delay:0.3s;" data-open-modal="franchise-modal-form">Franchise Now</button>
            </div>
        </section>
        <div class="relative -mt-[2px]" aria-hidden="true">
            <svg class="block w-full" viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,32 C240,80 480,0 720,32 C960,64 1200,16 1440,48 L1440,80 L0,80 Z" fill="#DCFCE7"></path>
            </svg>
        </div>

        <!-- Franchise Modal -->
        @include('partials.modals.franchise-modal')

        @include('partials.modals.signup-modal')
        @include('partials.modals.contact-modal')
    </main>

    @include('partials.sections.why-choose')
    @include('partials.sections.featured-varieties')
    @include('partials.sections.marquee')
    @include('partials.sections.explore-more')
    @include('partials.sections.contact')
    @include('partials.sections.faq')

    <button type="button" data-open-modal="contact-modal-form" class="fixed bottom-5 right-5 z-50 inline-flex items-center gap-2 px-5 py-3 rounded-full bg-[#185a33] text-white font-bold shadow-lg hover:bg-[#134629] focus:outline-none focus:ring-2 focus:ring-white" aria-label="Contact Bigasan Hub">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 5a3 3 0 0 1 3-3h2a1 1 0 0 1 1 1v3a1 1 0 0 1-.553.894l-1.447.724a10.97 10.97 0 0 0 4.382 4.382l.724-1.447A1 1 0 0 1 13 10h3a1 1 0 0 1 1 1v2a3 3 0 0 1-3 3h-1a11 11 0 0 1-11-11V5Z" />
        </svg>
        <span>Contact Us</span>
    </button>

    @include('partials.footer')
    <script>
        // Auto-hide success messages
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = document.querySelector('.fixed.top-4');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.style.opacity = '0';
                    successMessage.style.transform = 'translate(-50%, -100%)';
                    setTimeout(() => {
                        successMessage.remove();
                    }, 300);
                }, 5000); // Hide after 5 seconds
            }
        });

        // Custom success notification function
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