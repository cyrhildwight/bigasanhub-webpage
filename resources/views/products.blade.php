@extends('layouts.app')

@section('content')
        <main class="pt-20">
            <section class="py-[70px] bg-[#1a4a2a] fadein-top">
                <div class="mx-auto w-[92%] max-w-[1200px]">
                    <h1 class="text-center text-3xl md:text-4xl font-extrabold text-[#ffffff] m-0 mb-2 fadein-top">What we offer</h1>
                    <p class="text-center m-0 mb-9 text-[#ffffff]/80 max-w-[70ch] mx-auto">Popular rice varieties for every kitchen and business need. Wholesale and retail options available.</p>

                    <div class="grid gap-[22px] sm:grid-cols-2 lg:grid-cols-4">
                        @forelse(($varieties ?? []) as $i => $variety)
                            @php $fade = ($i % 3 === 0) ? 'fadein-left' : (($i % 3 === 1) ? 'fadein-top' : 'fadein-right'); @endphp
                            <article class="group relative bg-[#0d2e1a] rounded-[14px] overflow-hidden border border-[#0d2e1a] shadow-md transition-all duration-300 ease-out hover:border-[#2E6F40] hover:bg-[#1a4a2a] hover:shadow-xl hover:scale-105 cursor-pointer {{ $fade }}">
                                <img class="w-full h-56 object-contain p-3 transition-transform duration-300 ease-out group-hover:scale-105" src="/images/{{ $variety->image }}" alt="{{ $variety->name }}"/>
                                <div class="px-4 pt-3 pb-4 text-center">
                                    <div class="mb-2 flex justify-center">
                                        <span class="inline-flex items-center gap-2 rounded-lg border-2 border-[#2E6F40] bg-[#ffffff] px-3 py-1 shadow-md">
                                            <img src="/images/logo.v2.png" alt="Bigasan Hub logo" class="h-5 w-auto" />
                                        </span>
                                    </div>
                                    <h3 class="m-0 mb-1 text-lg text-[#ffffff]">{{ $variety->name }}</h3>
                                </div>
                            </article>
                        @empty
                            <div class="col-span-full text-center text-[#ffffff]/70 py-8">
                                <p>No product varieties available yet.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>
        </main>
@include('partials.modals.contact-modal')
@endsection


