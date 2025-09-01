<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<section class="relative overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-[#061a13]">
        <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/40 via-green-900/20 to-emerald-800/40 animate-aurora opacity-90"></div>
        <div id="bg-layer" class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-emerald-900/25 via-transparent to-green-900/30 will-change-transform"></div>
        <div class="absolute top-1/2 left-1/2 w-[1600px] h-[1600px] -translate-x-1/2 -translate-y-1/2 animate-[spin_50s_linear_infinite] bg-[radial-gradient(circle,rgba(34,197,94,0.2)_0%,transparent_70%)] blur-3xl"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.03)_1px,transparent_1px), linear-gradient(to_bottom,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        <canvas id="particle-canvas" class="absolute inset-0 w-full h-full"></canvas>
    </div>

    <!-- Content -->
    <div class="relative z-10 mx-auto w-[92%] max-w-[1200px] py-24">
        <!-- Header -->
        <div class="text-center mb-16">
            <span class="h-2 w-2 rounded-full bg-amber-400 shadow-[0_0_12px] shadow-amber-300/60 animate-ping"></span>
            <h2 class="mt-4 text-4xl md:text-5xl font-extrabold tracking-tight text-white">
                Why Choose <span class="bg-gradient-to-r from-emerald-300 via-green-400 to-lime-400 bg-clip-text text-transparent">Bigasan Hub</span>
            </h2>
            <p class="mt-5 max-w-[70ch] mx-auto text-lg text-emerald-100/70 leading-relaxed">
                Reliable sourcing, transparent pricing, and a <span class="text-emerald-200 font-semibold">service-first team</span> focused on your needs—retail to wholesale.
            </p>
        </div>

        <!-- Features -->
        <div class="grid lg:grid-cols-12 gap-10 items-stretch">
            <!-- Left column -->
            <div class="lg:col-span-5 relative">
                <div id="sticky-features" class="flex flex-col justify-start space-y-8">
                    <!-- Feature 1 -->
                    <div class="feature-card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 14.59l-3.29-3.3 1.42-1.41 1.87 1.88 3.88-3.88 1.41 1.41L13 16.59z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Consistent Quality</h3>
                            <p class="mt-2 text-emerald-100/70 leading-relaxed">We partner with trusted mills and apply batch checks to keep every sack on spec.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 1l3 7h7l-5.5 4 2 7L12 16l-6.5 3 2-7L2 8h7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Fair, Transparent Prices</h3>
                            <p class="mt-2 text-emerald-100/70 leading-relaxed">Competitive retail & wholesale rates with no hidden fees or last-minute add-ons.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="feature-card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0H5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Service You Can Trust</h3>
                            <p class="mt-2 text-emerald-100/70 leading-relaxed">Responsive support for households, sari-sari stores, and food businesses.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Center Visual -->
            <div class="lg:col-span-7 relative flex flex-col">
                <div id="parallax-card" class="relative aspect-[16/10] rounded-3xl overflow-hidden border border-emerald-500/25 transition-transform duration-700 hover:scale-[1.05] hover:shadow-[0_0_55px_rgba(34,197,94,0.6)]">
                    <img src="images/bigasan.jpg" alt="Rice supply & logistics" class="absolute inset-0 w-full h-[500px] object-cover opacity-100 mix-blend-luminosity will-change-transform">
                    <div class="absolute inset-0 p-6 md:p-8 flex flex-col justify-end">
                        <div class="flex flex-wrap gap-3">
                            <span class="chip">Batch-tested</span>
                            <span class="chip">Same-day dispatch</span>
                            <span class="chip">Wholesale ready</span>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="mt-8 grid grid-cols-3 gap-4">
                    <div class="stat-card">
                        <div class="stat gradient-text text-2xl font-bold" data-value="99.3">0</div>
                        <div class="text-sm text-emerald-100/70 mt-1">On-spec batches</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat gradient-text text-2xl font-bold" data-value="48">0</div>
                        <div class="text-sm text-emerald-100/70 mt-1">Avg. fulfillment (h)</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat gradient-text text-2xl font-bold" data-value="500">0</div>
                        <div class="text-sm text-emerald-100/70 mt-1">Active clients</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Aurora Animations */
    @keyframes aurora {
        0% {
            background-position: 0% 50%
        }

        50% {
            background-position: 100% 50%
        }

        100% {
            background-position: 0% 50%
        }
    }

    .animate-aurora {
        background-size: 200% 200%;
        animation: aurora 15s ease infinite;
    }

    /* Feature Card */
    .feature-card {
        display: flex;
        gap: 1.25rem;
        align-items: start;
        padding: 2rem;
        border-radius: 1.25rem;
        background: rgba(34, 197, 94, 0.12);
        border: 1px solid rgba(34, 197, 94, 0.35);
        backdrop-filter: blur(8px);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .feature-card::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: inherit;
        background: radial-gradient(circle at top left, rgba(132, 204, 22, 0.25), transparent 70%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .feature-card:hover::before {
        opacity: 1;
    }

    .feature-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 18px 55px rgba(34, 197, 94, 0.45);
        border-color: rgba(132, 204, 22, 0.8);
    }

    .feature-card .icon {
        flex-shrink: 0;
        display: grid;
        place-items: center;
        width: 3.5rem;
        height: 3.5rem;
        border-radius: 1rem;
        background: linear-gradient(135deg, rgba(34, 197, 94, .4), rgba(132, 204, 22, .3));
        color: #bbf7d0;
        box-shadow: 0 0 20px rgba(34, 197, 94, .6), inset 0 0 10px rgba(132, 204, 22, .25);
    }

    /* Chips */
    .chip {
        padding: .45rem 1rem;
        border-radius: 9999px;
        font-size: .85rem;
        color: #a7f3d0;
        background: rgba(34, 197, 94, .18);
        border: 1px solid rgba(34, 197, 94, .4);
        backdrop-filter: blur(5px);
        transition: .3s;
    }

    .chip:hover {
        background: rgba(34, 197, 94, .35);
        color: #fff;
        box-shadow: 0 0 15px rgba(34, 197, 94, 0.55);
    }

    /* Stats */
    .stat-card {
        border-radius: 1.25rem;
        background: linear-gradient(145deg, rgba(6, 95, 70, .55), rgba(34, 197, 94, .18));
        border: 1px solid rgba(34, 197, 94, .35);
        padding: 1.5rem 1rem;
        text-align: center;
        transition: transform .4s, box-shadow .4s;
        position: relative;
    }

    .stat-card::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: inherit;
        border: 1px solid rgba(132, 204, 22, .25);
        pointer-events: none;
    }

    .stat-card:hover {
        transform: translateY(-8px) scale(1.07);
        box-shadow: 0 20px 50px rgba(34, 197, 94, .35);
    }

    .stat {
        background: linear-gradient(to right, #86efac, #a3e635, #bef264);
        -webkit-background-clip: text;
        color: transparent;
        font-weight: 800;
    }
</style>


<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>
    AOS.init({
        duration: 1000,
        easing: 'ease-out-quart',
        once: false
    });

    // Sticky left column with fade-in/out
    gsap.utils.toArray("#sticky-features .feature-card").forEach((card, i) => {
        gsap.fromTo(card, {
            opacity: 0,
            y: 50
        }, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            delay: i * 0.2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: card,
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play reverse play reverse"
            }
        });
    });

    // Sticky container
    gsap.to("#sticky-features", {
        scrollTrigger: {
            trigger: "#sticky-features",
            start: "top top+=100",
            end: "bottom bottom-=100",
            pin: true,
            pinSpacing: false
        }
    });

    // Card Tilt
    const card = document.querySelector("#parallax-card");
    if (card) {
        card.addEventListener("mousemove", e => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.3;
            const y = (e.clientY - rect.top) / rect.height - 0.3;
            gsap.to(card, {
                rotationY: x * 20,
                rotationX: -y * 20,
                transformPerspective: 800,
                ease: "power2.out",
                duration: 0.3
            });
        });
        card.addEventListener("mouseleave", () => {
            gsap.to(card, {
                rotationY: 0,
                rotationX: 0,
                ease: "power2.out",
                duration: 0.8
            });
        });
    }

    // Counter animation
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".stat");
        const animateCounter = el => {
            const target = parseFloat(el.dataset.value);
            const duration = 1500;
            let startTime = null;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                const progress = Math.min((timestamp - startTime) / duration, 1);
                let value = (progress * target);
                if (el.dataset.value.includes(".")) value = value.toFixed(1) + "%";
                else value = Math.floor(value) + "+";
                el.textContent = value;
                if (progress < 1) requestAnimationFrame(step);
            }
            requestAnimationFrame(step);
        };
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) animateCounter(entry.target);
                else entry.target.textContent = "0";
            });
        }, {
            threshold: 0.5
        });
        counters.forEach(el => observer.observe(el));
    });

    // Parallax background
    gsap.to("#bg-layer", {
        yPercent: 20,
        ease: "none",
        scrollTrigger: {
            trigger: "section",
            scrub: true
        }
    });

    // Particle canvas
    const canvas = document.getElementById("particle-canvas"),
        ctx = canvas.getContext("2d");
    let particles = [],
        numParticles = 90,
        mouse = {
            x: null,
            y: null,
            radius: 120
        };

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();
    window.addEventListener("mousemove", e => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });
    for (let i = 0; i < numParticles; i++) {
        particles.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            size: Math.random() * 2 + 1,
            speedX: (Math.random() - 0.5) * 0.8,
            speedY: (Math.random() - 0.5) * 0.8,
            opacity: Math.random() * 0.6 + 0.3
        });
    }

    function drawParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => {
            p.x += p.speedX;
            p.y += p.speedY;
            if (p.x < 0 || p.x > canvas.width) p.speedX *= -1;
            if (p.y < 0 || p.y > canvas.height) p.speedY *= -1;
            if (mouse.x && mouse.y) {
                let dx = p.x - mouse.x,
                    dy = p.y - mouse.y,
                    dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < mouse.radius) {
                    p.x += dx / dist * 2;
                    p.y += dy / dist * 2;
                }
            }
            ctx.beginPath();
            let gradient = ctx.createRadialGradient(p.x, p.y, 0, p.x, p.y, p.size * 6);
            gradient.addColorStop(0, `rgba(255,255,200,${p.opacity})`);
            gradient.addColorStop(1, "transparent");
            ctx.fillStyle = gradient;
            ctx.arc(p.x, p.y, p.size * 6, 0, Math.PI * 2);
            ctx.fill();
            ctx.beginPath();
            ctx.fillStyle = `rgba(255,255,180,${p.opacity})`;
            ctx.ellipse(p.x, p.y, p.size * 1.8, p.size, Math.PI / 4, 0, Math.PI * 2);
            ctx.fill();
        });
        requestAnimationFrame(drawParticles);
    }
    drawParticles();
</script>