<section class="py-[70px] bg-[#2f7a47]">
    <div class="mx-auto w-[92%] max-w-[1200px]">
        <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white m-0 mb-2">
            Frequently Asked Questions
        </h2>
        <p class="text-center m-0 mb-9 text-white max-w-[70ch] mx-auto">
            Quick answers to common questions about supply, delivery, and pricing.
        </p>
        <div class="grid gap-4 md:grid-cols-2">
            @forelse(($faqs ?? []) as $faq)
                <details class="rounded-lg bg-[#185a33] p-4 open:bg-[#237d4a] shadow-md fadein-top transition hover:shadow-xl hover:border-white border border-transparent">
                    <summary class="cursor-pointer font-semibold text-white">
                        {{ $faq->question }}
                    </summary>
                    <div class="mt-2 text-white">
                        {{ $faq->answer }}
                    </div>
                </details>
            @empty
                <div class="col-span-full text-center text-white/70 py-8">
                    <p>No FAQs available yet.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
