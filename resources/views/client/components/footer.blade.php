<div class="w-full px-20 py-10 bg-[#000D51]">
    <div class="w-full flex items-start justify-between gap-10 py-10">
        <div class="w-1/4 flex flex-col gap-4">
            <img src={{ asset('assets/logo.png') }} alt="aboutUsImage" width="80" height="80">
            <p class="text-white text-xl font-normal leading-normal tracking-normal">Divine Solution Funding helps you
                move your property goals forward. We guide buying and selling and funding. We use
                private money loans with quick closings and no credit checks. Get clear advice and fast answers. Work
                with a partner
                focused on your success.
            </p>
            <div class="flex items-center gap-4">
                <a
                    href="https://www.facebook.com/people/Divine-Solution-Funding/61567715197954/?mibextid=wwXIfr&rdid=iILrZ6IaLAqOqXRt&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1Az3n8im3L%2F%3Fmibextid%3DwwXIfr">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="#000D51"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-facebook-icon lucide-facebook">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/divinesolutionfunding">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="#000D51"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-instagram-icon lucide-instagram">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                    </svg>
                </a>
                <a href="https://www.tiktok.com/@divinesolutionfunding">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="#000D51"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <h1 class="text-white text-2xl font-medium ">Services
            </h1>
            <div class="flex flex-col gap-4">
                @if ($services)
                    @foreach ($services as $service)
                        <a href="{{ route('service-detail', ['slug' => $service->slug]) }}"
                            class="text-white text-xl font-normal ">
                            {{ $service->title }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <h1 class="text-white text-2xl font-medium ">Useful links
            </h1>
            <div class="flex flex-col gap-4">
                <a href={{ route('home') }} class="text-white text-xl font-normal ">Home</a>
                <a href={{ route('about') }} class="text-white text-xl font-normal ">About</a>
                <a href={{ route('services') }} class="text-white text-xl font-normal ">Services</a>
                <a href={{ route('contact') }} class="text-white text-xl font-normal ">Contact
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <h1 class="text-white text-2xl font-medium ">Subscribe for our newsletter
            </h1>
            <div class="flex flex-col gap-4">
                <p class="text-white text-xl font-normal ">Get updates on property loans and
                    investment options. </p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex items-center gap-4">
                    @csrf
                    <input class="w-full bg-white text-xl font-medium  border p-4 text-[#000D5199]"
                        placeholder="Your email" type="email" name="email">
                    <button type="submit"
                        class="w-fit text-white text-xl font-medium  p-4 bg-[#2460FD]">Subscribe</button>
                </form>
            </div>
            <div class="w-full flex items-start">
                <div class="w-full flex justify-between flex-col gap-2">
                    <div class="flex items-center gap-4">
                        <h1 class="text-white text-2xl font-medium ">Email:
                        </h1>
                        <div class="flex items-center gap-2">
                            <a href="mailto:jduret@divinesolutionfunding.com"
                                class="text-white text-xl font-normal ">Jduret@divinesolutionfunding.com</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <h1 class="text-white text-2xl font-medium ">Phone:
                        </h1>
                        <div class="flex items-center gap-2">
                            <a href="tel:+1 (866) 234-8080" class="text-white text-xl font-normal ">+1 ( 866 ) 234
                                8080</a>
                        </div>
                    </div>
                    <div class="w-full flex items-center gap-4">
                        <h1 class="text-white text-2xl font-medium ">Address:
                        </h1>
                        <div class="flex items-center gap-2">
                            <a class="text-white text-xl font-normal ">123 State St. Xyz,
                                Texas, USA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex items-center justify-center pt-5">
        <p class="text-white text-xl font-normal leading-normal tracking-normal">
            Copyright © {{ date('Y') }} Divine Solution Fundings. All rights reserved.
        </p>
    </div>
</div>