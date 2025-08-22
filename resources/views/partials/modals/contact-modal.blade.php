<div id="contact-modal-form" class="fixed inset-0 z-[70] hidden">
    <div class="absolute inset-0 bg-black/70" data-close-modal></div>
    <div role="dialog" aria-modal="true" class="relative mx-auto my-10 max-w-[640px] w-[92%] bg-[#185a33] rounded-2xl shadow-2xl overflow-hidden text-white">
        <button type="button" class="absolute top-3 right-3 p-2 rounded-full bg-[#2E6F40] text-white shadow hover:bg-[#237d4a] transition" data-close-modal aria-label="Close">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <div class="p-6">
            <h1 class="text-center text-3xl md:text-4xl font-extrabold text-white mb-6">Contact Us</h1>
            <div id="contactAlert" class="mb-3"></div>
            <form id="contactForm" method="POST" action="{{ route('contact.submit') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block font-semibold mb-1 text-white" for="contact_name">Name</label>
                    <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition bg-white text-[#185a33] placeholder-[#185a33]/60" id="contact_name" name="name" type="text" placeholder="Your Name" required>
                </div>
                <div>
                    <label class="block font-semibold mb-1 text-white" for="contact_email">Email</label>
                    <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition bg-white text-[#185a33] placeholder-[#185a33]/60" id="contact_email" name="email" type="email" placeholder="Your Email" required>
                </div>
                <div>
                    <label class="block font-semibold mb-1 text-white" for="contact_message">Message</label>
                    <textarea class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none min-h-[120px] resize-y focus:ring-2 focus:ring-green-300 transition bg-white text-[#185a33] placeholder-[#185a33]/60" id="contact_message" name="message" rows="4" placeholder="Your Message" required></textarea>
</div>
<style>
    #contact-modal-form input,
    #contact-modal-form textarea {
        background: #fff !important;
        color: #185a33 !important;
    }
    #contact-modal-form input::placeholder,
    #contact-modal-form textarea::placeholder {
        color: #185a33 !important;
        opacity: 0.6;
    }
</style>
                </div>
                <button type="submit" class="w-150 ml-5 px-4 py-3 rounded-full bg-[#2E6F40] text-white font-bold shadow-lg hover:bg-[#237d4a] transition text-lg flex items-center justify-center mb-10">Send</button>
            </form>
        </div>
    </div>
</div>
