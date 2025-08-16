<section class="py-[70px] bg-white bg-gradient-to-b from-green-200/60 to-green-200/30">
    <div class="mx-auto w-[92%] max-w-[1200px]">
        <h2 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">Explore more</h2>
        <p class="text-center m-0 mb-9 text-gray-700 max-w-[70ch] mx-auto">
            Jump to detailed pages for company info, product lineup, branches, and more.
        </p>
        <div class="flex flex-wrap justify-center gap-[22px]">
            <!-- About Us -->
            <a href="{{ route('about') }}" class="block bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6 hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition fadein-left">
                <div class="flex items-center gap-3 mb-2 text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 12c2.7 0 4.88-2.18 4.88-4.88S14.7 2.24 12 2.24 7.12 4.42 7.12 7.12 9.3 12 12 12zm0 2.25c-3.14 0-9.38 1.58-9.38 4.69v2.06h18.75v-2.06c0-3.11-6.24-4.69-9.37-4.69z" />
                    </svg>
                    <h3 class="m-0 text-xl text-[#185a33] font-extrabold">About Us</h3>
                </div>
                <p class="m-0 text-[#2d3d2a]">Mission, vision, and our story.</p>
            </a>
            <!-- Products -->
            <a href="{{ route('products') }}" class="block bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6 hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition fadein-top">
                <div class="flex items-center gap-3 mb-2 text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 4v16h18V4H3zm16 14H5V8h14v10zM8 10h2v6H8v-6zm6 0h2v6h-2v-6z" />
                    </svg>
                    <h3 class="m-0 text-xl text-[#185a33] font-extrabold">Products</h3>
                </div>
                <p class="m-0 text-[#2d3d2a]">See available rice varieties.</p>
            </a>
            <!-- Branch Locator -->
            <a href="{{ route('branches') }}" class="block bg-white rounded-[14px] shadow-md border border-[#e7efe8] p-6 hover:border-green-700 hover:bg-green-80 hover:shadow-green-700 transition fadein-right">
                <div class="flex items-center gap-3 mb-2 text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z" />
                    </svg>
                    <h3 class="m-0 text-xl text-[#185a33] font-extrabold">Branch Locator</h3>
                </div>
                <p class="m-0 text-[#2d3d2a]">Find a store near you.</p>
            </a>
        </div>
    </div>
</section>
