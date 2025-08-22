<section class="py-[70px] bg-[#1a4a2a]">
    <div class="mx-auto w-[92%] max-w-[1200px]">
        <h2 class="text-center text-3xl md:text-4xl font-extrabold text-[#ffffff] m-0 mb-2 fadein-top">Featured Varieties</h2>
        <p class="text-center m-0 mb-9 text-[#ffffff]/80 max-w-[70ch] mx-auto">
            Our most requested rice for homes and food businesses.
        </p>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @forelse(($featuredVarieties ?? []) as $i => $variety)
                @php 
                    $fadeClasses = ['fadein-left', 'fadein-top', 'fadein-right', 'fadein-top'];
                    $fadeClass = $fadeClasses[$i % count($fadeClasses)];
                @endphp
                <article class="group bg-[#0d2e1a] rounded-[14px] shadow-md border border-[#0d2e1a] overflow-hidden hover:border-[#2E6F40] hover:bg-[#1a4a2a] hover:shadow-xl hover:scale-105 transition-all duration-300 {{ $fadeClass }}">
                    <div class="aspect-[4/3] bg-[#2E6F40]/20 grid place-items-center group-hover:bg-[#2E6F40]/30">
                        <img src="images/{{ $variety->image }}" alt="{{ $variety->name }} rice" class="max-h-[150px] w-auto transition-transform duration-300 group-hover:scale-110" />
                    </div>
                    <div class="p-5">
                        <h3 class="m-0 mb-1 text-lg text-[#ffffff] group-hover:text-[#ffffff] font-extrabold transition-colors duration-300">{{ $variety->name }}</h3>
                        <p class="m-0 text-sm text-[#ffffff]/80 group-hover:text-[#ffffff]/90 mb-3 transition-colors duration-300">{{ $variety->description }}</p>
                        <a href="{{ route('products') }}" class="inline-block text-sm font-semibold text-[#ffffff] group-hover:text-[#ffffff] transition-colors duration-300 hover:underline">View details →</a>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center text-[#ffffff]/70 py-8">
                    <p>No featured varieties available yet.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
