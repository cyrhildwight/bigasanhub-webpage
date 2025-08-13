@extends('layouts.app')

@section('content')
        <main>
            <section class="py-[70px] bg-white">
                <div class="mx-auto w-[92%] max-w-[1200px] grid md:grid-cols-2 gap-[22px]">
                    <div class="bg-white border border-[#e7efe8] rounded-[14px] p-5 shadow-xl">
                        <h1 class="text-left text-3xl md:text-4xl font-extrabold text-green-900 m-0 mb-2">Contact Us</h1>
                        <form onsubmit="event.preventDefault(); alert('Thanks! We will get back to you shortly.');">
                            <label class="block font-semibold mt-3 mb-1 text-[#2d3d2a]" for="name">Name</label>
                            <input class="w-full px-3 py-3 border border-[#d8e6da] rounded-lg outline-none" id="name" name="name" type="text" required>

                            <label class="block font-semibold mt-3 mb-1 text-[#2d3d2a]" for="email">Email</label>
                            <input class="w-full px-3 py-3 border border-[#d8e6da] rounded-lg outline-none" id="email" name="email" type="email" required>

                            <label class="block font-semibold mt-3 mb-1 text-[#2d3d2a]" for="message">Message</label>
                            <textarea class="w-full px-3 py-3 border border-[#d8e6da] rounded-lg outline-none min-h-[120px] resize-y" id="message" name="message" placeholder="Tell us what rice you need (volume, variety, delivery location)..."></textarea>

                            <div class="mt-[14px]">
                                <button type="submit" class="inline-block px-5 py-3 rounded-full bg-green-300 text-[#114019] font-bold shadow-lg hover:bg-white transition">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="bg-white border border-[#e7efe8] rounded-[14px] p-5 shadow-xl flex flex-col justify-center">
                        <h2 class="m-0 mb-2 text-[#2d3d2a]">Better yet, see us in person!</h2>
                        <p class="m-0 mb-2">We love our customers—drop by our store or call ahead for wholesale pricing.</p>
                        <p class="m-0 mb-2">Address: Tipolo, Mandaue City, Cebu</p>
                        <p class="m-0 mb-2">Hours: 08:30 am – 05:30 pm</p>
                        <a class="inline-block px-5 py-3 rounded-full bg-green-300 text-[#114019] font-bold shadow-lg hover:bg-white transition" href="tel:+639959171079">Call Us</a>
                    </div>
                </div>
            </section>
        </main>
@endsection


