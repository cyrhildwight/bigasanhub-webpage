<div id="signup-modal-form" class="fixed inset-0 z-[60] hidden">
    <div class="absolute inset-0 bg-black/70" data-close-modal></div>
    <div role="dialog" aria-modal="true" class="relative mx-auto my-10 max-w-[640px] w-[92%] bg-[#185a33] rounded-2xl shadow-2xl overflow-hidden text-white">
        <button type="button" class="absolute top-3 right-3 p-2 rounded-full bg-[#2E6F40] text-white shadow hover:bg-[#237d4a] transition" data-close-modal aria-label="Close">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <div class="p-6">
            <h1 class="text-center text-3xl md:text-4xl font-extrabold text-white mb-6">Franchise Sign Up</h1>
            <div id="franchiseAlert" class="mb-3"></div>
            <form id="franchiseForm" method="POST" action="{{ route('franchise.submit') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block font-semibold mb-1 text-white" for="name">Full Name</label>
                    <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition bg-white text-[#185a33] placeholder-[#185a33]/60" id="name" name="name" type="text" placeholder="Enter your full name" required>
                </div>
                <div>
                    <label class="block font-semibold mb-1 text-white" for="email">Email</label>
                    <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition bg-white text-[#185a33] placeholder-[#185a33]/60" id="email" name="email" type="email" placeholder="Enter your email" required>
                </div>
                <div>
                    <label class="block font-semibold mb-1 text-white" for="phone">Phone Number</label>
                    <input class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none focus:ring-2 focus:ring-green-300 transition bg-white text-[#185a33] placeholder-[#185a33]/60" id="phone" name="phone" type="text" placeholder="Enter your phone number" required>
                </div>
                <div>
                    <label class="block font-semibold mb-1 text-white" for="message">Message</label>
                    <textarea class="w-full px-4 py-3 border border-[#cfe9d2] rounded-lg outline-none min-h-[120px] resize-y focus:ring-2 focus:ring-green-300 transition bg-white text-[#185a33] placeholder-[#185a33]/60" id="message" name="message" placeholder="Tell us about your interest in franchising..." required></textarea>
</div>
<style>
    #signup-modal-form input,
    #signup-modal-form textarea {
        background: #fff !important;
        color: #185a33 !important;
        border-color: #cfe9d2 !important;
    }
    #signup-modal-form input::placeholder,
    #signup-modal-form textarea::placeholder {
        color: #185a33 !important;
        opacity: 0.6;
    }
</style>
                </div>
                <button type="submit" id="franchiseSubmitBtn" class="w-150 ml-5 px-4 py-3 rounded-full bg-[#2E6F40] text-white font-bold shadow-lg hover:bg-[#237d4a] transition text-lg flex items-center justify-center mt-0.5 mb-10">
                    <span id="btnText">Submit Application</span>
                    <svg id="btnLoader" class="hidden animate-spin ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>
