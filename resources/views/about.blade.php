@extends('layouts.app')

@section('content')
        <main>
            <section class="py-[70px] bg-white bg-gradient-to-b from-green-100 to-[#e9f7ea]">
                <div class="mx-auto w-[92%] max-w-[1200px] grid items-center gap-9 md:[grid-template-columns:1.2fr_1fr]">
                    <div>
                        <h1 class="text-center md:text-left text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">About Bigasan Hub</h1>
                        <p class="text-center md:text-left text-[#6b856f] m-0 mb-9 max-w-[70ch]">BIGASAN HUB is a premier rice retail and wholesale business dedicated to providing quality rice products to households, restaurants, retailers, and institutions. With a focus on affordability and reliability, BIGASAN HUB aims to become a trusted name in the rice industry across the Philippines.</p>
                    </div>
                    <img alt="Sacks of rice in a store" class="w-full rounded-[14px] shadow-2xl" src="/images/download.jpg" />
                </div>
            </section>

            <section class="py-[70px] bg-white bg-gradient-to-b from-green-100/60 to-green-200/30">
                <div class="mx-auto w-[92%] max-w-[1200px]">
                    <h2 class="text-center text-4xl font-extrabold text-green-900 m-0 mb-10">Vision, Mission & Core Values</h2>
                    <div class="flex flex-col md:flex-row gap-6">
                        <article class="flex-1 bg-white rounded-2xl shadow-md border border-white/40 p-8">
                            <h3 class="text-2xl font-extrabold text-green-900 m-0 mb-2">Vision</h3>
                            <p class="m-0 text-[#2d3d2a] leading-relaxed">To be the leading rice distribution hub in the Philippines, offering quality rice varieties through an extensive network of franchises and retail outlets.</p>
                        </article>
                        <article class="flex-1 bg-white rounded-2xl shadow-md border border-white/40 p-8">
                            <h3 class="text-2xl font-extrabold text-green-900 m-0 mb-2">Mission</h3>
                            <p class="m-0 text-[#2d3d2a] leading-relaxed">To deliver quality rice at competitive prices, ensuring accessibility and affordability while promoting food security.</p>
                        </article>
                        <article class="flex-1 bg-white rounded-2xl shadow-md border border-white/40 p-8">
                            <h3 class="text-2xl font-extrabold text-green-900 m-0 mb-2">Core Values</h3>
                            <ul class="m-0 mt-2 space-y-3">
                                <li class="flex items-start gap-3 text-[#2d3d2a]"><span class="mt-1 text-green-700"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21 12 17.27z"/></svg></span><span class="font-semibold text-green-900">Quality</span><span class="sr-only">-</span><span class="">Commitment to providing the best rice varieties.</span></li>
                                <li class="flex items-start gap-3 text-[#2d3d2a]"><span class="mt-1 text-green-700"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M12 2l7 4v6c0 5-3.5 9.74-7 10-3.5-.26-7-5-7-10V6l7-4z"/></svg></span><span class="font-semibold text-green-900">Integrity</span><span class="sr-only">-</span><span class="">Transparent operations and fair pricing.</span></li>
                                <li class="flex items-start gap-3 text-[#2d3d2a]"><span class="mt-1 text-green-700"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M5 13l4 4L19 7"/></svg></span><span class="font-semibold text-green-900">Customer Satisfaction</span><span class="sr-only">-</span><span class="">Ensuring the best buying experience.</span></li>
                            </ul>
                        </article>
                    </div>
                </div>
            </section>

            <section class="py-[70px] bg-[#2f7a47]">
                <div class="mx-auto w-[92%] max-w-[1200px]">
                    <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white m-0 mb-6">"BIGASAN HUB: Your Premier Rice Supplier for Quality & Afforable"</h2>
                    <div class="bg-white rounded-[14px] shadow-2xl p-6 md:p-8">
                        <p class="m-0 mb-6 text-[#2d3d2a]">BIGASAN HUB offers a lucrative franchise model designed for aspiring entrepreneurs who want to enter the rice retail and wholesale business.</p>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h3 class="text-[#185a33] font-extrabold text-xl m-0 pb-2 border-b border-[#cfe9d2]">Our Franchise Packages Include:</h3>
                                <ul class="mt-4 space-y-4">
                                    <li class="flex gap-3">
                                        <span class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-green-100 text-green-700">✓</span>
                                        <div>
                                            <div class="font-semibold text-[#2d3d2a]">Turnkey Setup:</div>
                                            <div class="text-sm text-[#526b56]">Complete store setup with branding, equipment, and inventory.</div>
                                        </div>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-green-100 text-green-700">✓</span>
                                        <div>
                                            <div class="font-semibold text-[#2d3d2a]">Supply Chain Support:</div>
                                            <div class="text-sm text-[#526b56]">Direct sourcing from trusted rice suppliers and importers.</div>
                                        </div>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-green-100 text-green-700">✓</span>
                                        <div>
                                            <div class="font-semibold text-[#2d3d2a]">Marketing & Branding Assistance:</div>
                                            <div class="text-sm text-[#526b56]">Promotional materials, digital marketing strategies, and ongoing support.</div>
                                        </div>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-green-100 text-green-700">✓</span>
                                        <div>
                                            <div class="font-semibold text-[#2d3d2a]">Training & Operations Support:</div>
                                            <div class="text-sm text-[#526b56]">Guidance on inventory management and financial monitoring.</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-[#185a33] font-extrabold text-xl m-0 pb-2 border-b border-[#cfe9d2]">Target Market</h3>
                                <ul class="mt-4 space-y-4">
                                    <li class="flex gap-3">
                                        <span class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-green-100 text-green-700">✓</span>
                                        <span class="text-[#2d3d2a]">Household Consumers</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-green-100 text-green-700">✓</span>
                                        <span class="text-[#2d3d2a]">Rice Resellers</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-green-100 text-green-700">✓</span>
                                        <span class="text-[#2d3d2a]">Restaurants & Food Businesses</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-green-100 text-green-700">✓</span>
                                        <span class="text-[#2d3d2a]">Sari-sari Stores & Mini Groceries</span>
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-green-100 text-green-700">✓</span>
                                        <span class="text-[#2d3d2a]">Corporate & Government Institutions</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection


