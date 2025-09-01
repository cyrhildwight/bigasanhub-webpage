<footer class="text-[#ffffff] py-12 bg-[#1a4a2a] border-t border-[#0d2e1a]">
    <div class="mx-auto w-[92%] max-w-[1200px]">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <!-- Company Info -->
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start mb-4">
                    <img src="/images/logo.png" alt="Bigasan Hub logo" class="w-12 h-12 object-contain bg-white rounded-full shadow mr-3" />
                    <h3 class="text-xl font-bold text-white">Bigasan Hub</h3>
                </div>
                <p class="text-[#ffffff]/80 mb-4">Premier rice supplier for households, restaurants, and retailers across the Philippines.</p>
                <div class="flex justify-center md:justify-start gap-3">
                    <a class="w-10 h-10 bg-[#2E6F40] rounded-full inline-flex items-center justify-center hover:bg-[#0d2e1a] transition-colors duration-300" href="https://www.facebook.com/people/Bigasan-Hub-PH/61573715723031/" title="Facebook" aria-label="Facebook" target="_blank" rel="noopener">
                        <img src="/images/facebook.png" alt="Facebook" class="w-6 h-6 object-contain" />
                    </a>
                    <a class="w-10 h-10 bg-[#2E6F40] rounded-full inline-flex items-center justify-center hover:bg-[#0d2e1a] transition-colors duration-300" href="https://www.instagram.com/bigasan_hub/" title="Instagram" aria-label="Instagram" target="_blank" rel="noopener">
                        <img src="/images/instagram.png" alt="Instagram" class="w-6 h-6 object-contain" />
                    </a>
                    <a class="w-10 h-10 bg-[#2E6F40] rounded-full inline-flex items-center justify-center hover:bg-[#0d2e1a] transition-colors duration-300" href="mailto:info@bigasanhub.com" title="Email" aria-label="Email" target="_blank" rel="noopener">
                        <img src="/images/gmail.png" alt="Gmail" class="w-6 h-6 object-contain" />
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="text-center md:text-left">
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('landing') }}" class="text-[#ffffff]/80 hover:text-[#ffffff] transition-colors duration-300">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-[#ffffff]/80 hover:text-[#ffffff] transition-colors duration-300">About Us</a></li>
                    <li><a href="{{ route('products') }}" class="text-[#ffffff]/80 hover:text-[#ffffff] transition-colors duration-300">Products</a></li>
                    <li><a href="{{ route('branches') }}" class="text-[#ffffff]/80 hover:text-[#ffffff] transition-colors duration-300">Branch Locator</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="text-center md:text-left">
                <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                <div class="space-y-3">
                    <div class="flex items-center justify-center md:justify-start">
                        <svg class="w-5 h-5 text-[#2E6F40] mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        <span class="text-[#ffffff]/80">info@bigasanhub.com</span>
                    </div>
                    <div class="flex items-center justify-center md:justify-start">
                        <svg class="w-5 h-5 text-[#2E6F40] mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <span class="text-[#ffffff]/80">09959171079 | (032) 346 3965</span>
                    </div>
                    <div class="flex items-center justify-center md:justify-start">
                        <svg class="w-7 h-7 text-[#2E6F40] mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        <span class="text-[#ffffff]/80">8WFJ+WFH, Tipolo, Mandaue City, Cebu</span>
                    </div>
                </div>
            </div>

            <!-- Franchise Info -->
            <div class="text-center md:text-left">
                <h4 class="text-lg font-semibold mb-4">Franchise Opportunity</h4>
                <div class="space-y-3">
                    <p class="text-[#ffffff]/80 text-sm">Join our growing network of rice suppliers across the Philippines.</p>
                    <div class="bg-[#2E6F40] rounded-lg p-3">
                        <p class="text-sm font-semibold mb-1">OPEN FOR FRANCHISE</p>
                        <p class="text-xs text-[#ffffff]/80">Contact us for franchise opportunities</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="border-t border-[#0d2e1a] pt-6 text-center">
            <p class="text-[#ffffff]/60 text-sm mb-2">
                © {{ date('Y') }} Bigasan Hub. All rights reserved. | 
                <a href="https://bigasanhub.com" target="_blank" class="hover:text-[#ffffff] transition-colors duration-300">www.bigasanhub.com</a>
            </p>
            <p class="text-[#ffffff]/40 text-xs">ALIN Group of Companies | Jamestowe Unit Do-07, Mantawe Rd.</p>
        </div>
    </div>
</footer>
