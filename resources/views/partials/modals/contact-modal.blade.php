<div id="contact-modal-form" class="fixed inset-0 z-[70] hidden">
    <div class="absolute inset-0 bg-black/60" data-close-modal></div>
    <div role="dialog" aria-modal="true" class="relative mx-auto my-10 max-w-[640px] w-[92%] bg-white rounded-2xl shadow-2xl overflow-hidden">
        <button type="button" class="absolute top-3 right-3 p-2 rounded-full bg-white text-[#185a33] shadow hover:bg-green-50" data-close-modal aria-label="Close">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <div class="p-6">
            <h1 class="text-center text-3xl md:text-4xl font-extrabold text-green-900 mb-6">Contact Us</h1>
            <div id="contactAlert" class="mb-3"></div>
            <form id="contactForm" method="POST" action="{{ route('contact.submit') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block font-semibold mb-1 text-[#185a33]" for="contact_name">Name</label>
                    <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition" id="contact_name" name="name" type="text" placeholder="Your Name" required>
                </div>
                <div>
                    <label class="block font-semibold mb-1 text-[#185a33]" for="contact_email">Email</label>
                    <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition" id="contact_email" name="email" type="email" placeholder="Your Email" required>
                </div>
                <div>
                    <label class="block font-semibold mb-1 text-[#185a33]" for="contact_message">Message</label>
                    <textarea class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none min-h-[120px] resize-y focus:ring-2 focus:ring-green-300 transition" id="contact_message" name="message" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="w-full px-5 py-3 rounded-full bg-green-700 text-white font-bold shadow-lg hover:bg-green-800 transition text-lg flex items-center justify-center">Send</button>
            </form>
        </div>
    </div>
</div>
