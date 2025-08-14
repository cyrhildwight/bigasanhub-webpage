@extends('layouts.app')

@section('content')
    <main>
        <section class="py-[70px] bg-white">
            <div class="mx-auto w-[92%] max-w-[600px] flex flex-col gap-8">
                <div class="bg-white border border-[#e7efe8] rounded-[18px] p-8 shadow-2xl">
                    <h1 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 mb-6">Contact Us</h1>
                    @if(session('success'))
                        <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-900 text-center font-semibold border border-green-300">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('contact.submit') }}" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block font-semibold mb-1 text-[#185a33]" for="name">Name</label>
                            <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition" id="name" name="name" type="text" required>
                        </div>
                        <div>
                            <label class="block font-semibold mb-1 text-[#185a33]" for="email">Email</label>
                            <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition" id="email" name="email" type="email" required>
                        </div>
                        <div>
                            <label class="block font-semibold mb-1 text-[#185a33]" for="message">Message</label>
                            <textarea class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none min-h-[120px] resize-y focus:ring-2 focus:ring-green-300 transition" id="message" name="message" placeholder="Tell us what rice you need (volume, variety, delivery location)..." required></textarea>
                        </div>
                        <button type="submit" class="w-full px-5 py-3 rounded-full bg-green-700 text-white font-bold shadow-lg hover:bg-green-800 transition text-lg">Send Message</button>
                    </form>
                </div>
                <div class="bg-white border border-[#e7efe8] rounded-[18px] p-8 shadow-xl flex flex-col items-center text-center">
                    <h2 class="mb-2 text-[#185a33] text-xl font-bold">Better yet, see us in person!</h2>
                    <p class="mb-2 text-[#2d3d2a]">We love our customers—drop by our store or call ahead for wholesale pricing.</p>
                    <p class="mb-2 text-[#2d3d2a]">Address: Tipolo, Mandaue City, Cebu</p>
                    <p class="mb-2 text-[#2d3d2a]">Hours: 08:30 am – 05:30 pm</p>
                    <a class="inline-block px-5 py-3 rounded-full bg-green-700 text-white font-bold shadow-lg hover:bg-green-800 transition mt-2" href="tel:+639959171079">Call Us</a>
                </div>
            </div>
        </section>
    </main>
@endsection


