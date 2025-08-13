@extends('layouts.app')

@section('content')
        <main>
            <section class="py-[70px] bg-white bg-gradient-to-b from-green-100 to-[#e9f7ea]">
                <div class="mx-auto w-[92%] max-w-[1200px]">
                    <h1 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">Branch Locator</h1>
                    <p class="text-center m-0 mb-6 text-[#6b856f]">Find the nearest Bigasan Hub branch. Click a branch to view on Google Maps or get directions.</p>

                    <div class="mb-4 flex gap-2">
                        <input id="branch-search" type="text" class="w-full px-3 py-3 border border-[#d8e6da] rounded-lg outline-none" placeholder="Search for a branch...">
                        <button id="branch-search-btn" type="button" class="px-4 py-3 rounded-lg bg-green-300 text-[#114019] font-bold shadow-md hover:bg-white transition">Find Branch</button>
                    </div>

                    <div class="grid gap-[22px] lg:[grid-template-columns:1.3fr_1fr]">
                        <div id="branch-map" class="h-[480px] rounded-[14px] border border-[#e7efe8] shadow-xl bg-white"></div>
                        <div class="rounded-[14px] border border-[#e7efe8] shadow-xl bg-white p-3 h-[480px] overflow-y-auto">
                            <ul id="branch-list" class="space-y-3"></ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection


