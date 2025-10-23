<div class="w-full bg-[#000D51]">
    <div class="w-full padding-x py-10 flex items-start justify-between gap-10 xm:flex-col sm:flex-col">
        <div class="w-1/3 flex flex-col gap-4 sm:w-full xm:w-full">
            <img src={{ asset('assets/logo.png') }} alt="aboutUsImage" width="80" height="80">
            <p class="text-white paragraph font-normal leading-normal tracking-normal">Divine Solution Funding helps you
                move your property goals forward. We guide buying and selling and funding. We use
                private money loans with quick closings and no credit checks. Get clear advice and fast answers. Work
                with a partner
                focused on your success.
            </p>
            <div class="flex items-center gap-2">
                <a
                    href="https://www.facebook.com/people/Divine-Solution-Funding/61567715197954/?mibextid=wwXIfr&rdid=iILrZ6IaLAqOqXRt&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1Az3n8im3L%2F%3Fmibextid%3DwwXIfr">
                    <img src="{{ asset('assets/facebook.svg') }}" alt="facebook" width="35" height="35">
                </a>
                <a href="https://www.instagram.com/divinesolutionfunding">
                    <img src="{{ asset('assets/instagram.svg') }}" alt="instagram" width="35" height="35">
                </a>
                <a href="https://www.tiktok.com/@divinesolutionfunding">
                    <img src="{{ asset('assets/tiktok.svg') }}" alt="tiktok" width="35" height="35">
                </a>
            </div>
        </div>
        <div class="flex-1 flex flex-col gap-2 sm:w-full xm:w-full">
            <h1 class="text-white text-2xl font-medium ">Services
            </h1>
            <div class="flex flex-col gap-2">
                @if ($services)
                    @foreach ($services as $service)
                        <a href="{{ route('service-detail', ['slug' => $service->slug]) }}"
                            class="text-white paragraph font-normal ">
                            {{ $service->title }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="flex-1 flex flex-col gap-2 sm:w-full xm:w-full">
            <h1 class="text-white text-2xl font-medium ">Useful links
            </h1>
            <div class="flex flex-col gap-2">
                <a href={{ route('home') }} class="text-white paragraph font-normal ">Home</a>
                <a href={{ route('about') }} class="text-white paragraph font-normal ">About</a>
                <a href={{ route('services') }} class="text-white paragraph font-normal ">Services</a>
                <a href={{ route('contact') }} class="text-white paragraph font-normal ">Contact
                </a>
            </div>
        </div>
        <div class="flex-1 flex flex-col gap-2 sm:w-full xm:w-full">
            <h1 class="text-white text-2xl font-medium ">Subscribe for our newsletter
            </h1>
            <div class="flex flex-col gap-2">
                <p class="text-white paragraph font-normal ">Get updates on property loans and
                    investment options. </p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST"
                    class="flex gap-2 xm:flex-col sm:flex-col">
                    @csrf
                    <input class="w-auto bg-white paragraph font-medium  border p-4 text-[#000D5199]"
                        placeholder="Your email" type="email" name="email">
                    <button type="submit"
                        class="w-fit text-white paragraph font-medium  p-4 bg-[#2460FD]">Subscribe</button>
                </form>
            </div>
            <div class="w-full flex items-start">
                <div class="w-full flex justify-between flex-col gap-2">
                    <div class="flex items-center gap-4">
                        <h1 class="text-white paragraph font-medium ">Email:
                        </h1>
                        <div class="flex items-center gap-2">
                            <a href="mailto:jduret@divinesolutionfunding.com"
                                class="text-white paragraph font-normal ">Jduret@divinesolutionfunding.com</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <h1 class="text-white paragraph font-medium ">Phone:
                        </h1>
                        <div class="flex items-center gap-2">
                            <a href="tel:+1 (866) 234-8080" class="text-white paragraph font-normal ">+1 ( 866 ) 234
                                8080</a>
                        </div>
                    </div>
                    <div class="w-full flex items-center gap-4">
                        <h1 class="text-white paragraph font-medium ">Address:
                        </h1>
                        <div class="flex items-center gap-2">
                            <a class="text-white paragraph font-normal ">2695 Post St #1087 Jacksonville Florida
                                32204</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full padding-x flex items-center justify-between py-5 border-t border-white/20">
        <p class="text-white paragraph font-normal leading-normal tracking-normal">
            Copyright © {{ date('Y') }} Divine Solution Fundings. All rights reserved.
        </p>
        <p class="text-white paragraph font-normal leading-normal tracking-normal">
            Designed & Developed by <a href="https://americanwebtronics.com/" class="hover:underline">American Web
                Tronics</a>
        </p>
    </div>
</div>