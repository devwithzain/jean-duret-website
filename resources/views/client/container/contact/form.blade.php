<div class="w-full flex items-center justify-center gap-10 xm:flex-col sm:flex-col">
    <div>
        <img src={{ asset('assets/contactImg.png') }} alt=" heroGirl" class="w-full h-auto object-contain">
    </div>
    <div class="w-1/2 xm:w-full sm:w-full flex flex-col gap-10 padding-x padding-y">
        <div class="w-full flex flex-col gap-3">
            <h1 class="text-[#000D51] heading font-semibold ">Get in touch</h1>
            <p class="text-[#000D51] paragraph font-normal">Need Funding for Your Next
                Deal? Get fast, hassle-free funding with no credit checks and quick closings.</p>
        </div>
        <form action="{{ route('contact') }}" method="POST" class="w-full flex flex-col gap-4">
            @csrf
            <div class="flex gap-4 xm:flex-col sm:flex-col">
                <div class="w-1/2 xm:w-full sm:w-full">
                    <label for="first_name" class="block text-[#000D51] mb-2 paragraph font-normal ">First
                        Name</label>
                    <input type="text" id="first_name" name="first_name"
                        class="w-full px-4 py-2 border-2 border-[#8F8F8F] text-[#000D51] paragraph font-normal  focus:outline-none focus:border-[#000D51]">
                </div>
                <div class="w-1/2 xm:w-full sm:w-full">
                    <label for="last_name" class="block text-[#000D51] mb-2 paragraph font-normal ">Last
                        Name</label>
                    <input type="text" id="last_name" name="last_name"
                        class="w-full px-4 py-2 border-2 border-[#8F8F8F] text-[#000D51] paragraph font-normal  focus:outline-none focus:border-[#000D51]">
                </div>
            </div>
            <div class="flex gap-4 xm:flex-col sm:flex-col">
                <div class="w-1/2 xm:w-full sm:w-full">
                    <label for="phone" class="block text-[#000D51] mb-2 paragraph font-normal ">Phone</label>
                    <input type="tel" id="phone" name="phone"
                        class="w-full px-4 py-2 border-2 border-[#8F8F8F] text-[#000D51] paragraph font-normal  focus:outline-none focus:border-[#000D51]">
                </div>
                <div class="w-1/2 xm:w-full sm:w-full">
                    <label for="email" class="block text-[#000D51] mb-2 paragraph font-normal ">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 border-2 border-[#8F8F8F] text-[#000D51] paragraph font-normal  focus:outline-none focus:border-[#000D51]">
                </div>
            </div>
            <div class="w-full">
                <label for="service" class="block text-[#000D51] mb-2 paragraph font-normal ">Services</label>
                <select id="service" name="service"
                    class="w-full px-4 py-2 border-2 border-[#8F8F8F] text-[#000D51] paragraph font-normal  focus:outline-none focus:border-[#000D51]">
                    <option value="">Select a service</option>
                    <option value="Bank Loan Assistant">Bank Loan Assistant</option>
                    <option value="Home Buying Support">Home Buying Support</option>
                    <option value="Property Selling Service">Property Selling Service</option>
                    <option value="Real Estate Investment">Real Estate Investment</option>
                    <option value="Loan Pre-Approval">Loan Pre-Approval</option>
                    <option value="Focused Financial Planing">Focused Financial Planing</option>
                </select>
            </div>
            <div class="w-full">
                <label for="specialMessage" class="block text-[#000D51] mb-2 paragraph font-normal ">Message</label>
                <textarea id="specialMessage" name="specialMessage" rows="4"
                    class="w-full px-4 py-2 border-2 border-[#8F8F8F] text-[#000D51] paragraph font-normal  focus:outline-none focus:border-[#000D51]"></textarea>
            </div>
            <button type="submit"
                class="bg-[#000D51] cursor-pointer text-white px-8 py-3 paragraph font-medium  hover:bg-[#000D51]/90">
                Send Message
            </button>
        </form>
    </div>
</div>