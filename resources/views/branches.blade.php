@extends('layouts.app')

@section('content')
<main class="pt-20">
    <section class="py-[70px] bg-[#1a4a2a]">
        <div class="mx-auto w-[92%] max-w-[1200px]">
            <h1 class="text-center text-3xl md:text-4xl font-extrabold text-[#ffffff] m-0 mb-2 fadein-top">Branch Locator</h1>
            <p class="text-center m-0 mb-6 text-[#ffffff]/80">Find the nearest Bigasan Hub branch. Click a branch to view on Google Maps or get directions.</p>

            <div class="mb-4 flex gap-2">
                <input id="branch-search" type="text" class="w-full px-3 py-3 border border-[#0d2e1a] rounded-lg outline-none bg-[#0d2e1a] text-[#ffffff] placeholder-[#ffffff]/60" placeholder="Search for a branch...">
                <button id="branch-search-btn" type="button" class="px-4 py-3 rounded-lg bg-[#2E6F40] text-[#ffffff] font-bold shadow-md hover:bg-[#0d2e1a] transition">Find Branch</button>
            </div>

            <div class="grid gap-[22px] lg:[grid-template-columns:1.3fr_1fr]">
                <div id="branch-map" class="h-[480px] rounded-[14px] border border-white shadow-xl bg-white"></div>
                <div class="rounded-[14px] border border-white shadow-xl bg-white p-3 h-[480px] overflow-y-auto">
                    <ul id="branch-list" class="space-y-3"></ul>
                </div>
            </div>
        </div>
    </section>
</main>
@include('partials.modals.contact-modal')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('#open-contact-modal, #open-contact-modal-2').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var contactModal = document.getElementById('contact-modal');
                if (contactModal) contactModal.classList.remove('hidden');
            });
        });
        var contactModal = document.getElementById('contact-modal');
        if (contactModal) {
            contactModal.querySelectorAll('[data-close-modal]').forEach(function(el) {
                el.addEventListener('click', function() {
                    contactModal.classList.add('hidden');
                });
            });
        }
    });
</script>
@endsection