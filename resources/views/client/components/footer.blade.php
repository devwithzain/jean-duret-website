<div class="w-full px-20 py-10 bg-[#000D51]">
    <div class="w-full flex items-start justify-between gap-10 py-10">
        <div class="w-1/4 flex flex-col gap-4">
            <img src={{ asset('assets/logo.png') }} alt="aboutUsImage" width="80" height="80">
            <p class="text-white text-lg font-normal leading-normal tracking-normal">Lorem Ipsum is simply dummy text of
                the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                since
                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
            <div class="flex items-center gap-4">
                <a
                    href="https://www.facebook.com/people/Divine-Solution-Funding/61567715197954/?mibextid=wwXIfr&rdid=iILrZ6IaLAqOqXRt&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1Az3n8im3L%2F%3Fmibextid%3DwwXIfr">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                        fill="#000D51" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-facebook-icon lucide-facebook">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/divinesolutionfunding">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                        fill="#000D51" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-instagram-icon lucide-instagram">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                    </svg>
                </a>
                <a href="https://www.tiktok.com/@divinesolutionfunding">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                        fill="#000D51" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-twitter-icon lucide-twitter">
                        <path
                            d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <h1 class="text-white text-2xl font-medium leading-tight tracking-tight">Services
            </h1>
            <div class="flex flex-col gap-4">
                @if ($services)
                    @foreach ($services as $service)
                        <a href="{{ route('service-detail', ['slug' => $service->slug]) }}"
                            class="text-white text-lg font-normal leading-tight tracking-tight">
                            {{ $service->title }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <h1 class="text-white text-2xl font-medium leading-tight tracking-tight">Useful links
            </h1>
            <div class="flex flex-col gap-4">
                <a href={{ route('home') }} class="text-white text-lg font-normal leading-tight tracking-tight">Home</a>
                <a href={{ route('about') }}
                    class="text-white text-lg font-normal leading-tight tracking-tight">About</a>
                <a href={{ route('services') }}
                    class="text-white text-lg font-normal leading-tight tracking-tight">Services</a>
                <a href={{ route('contact') }}
                    class="text-white text-lg font-normal leading-tight tracking-tight">Contact
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <h1 class="text-white text-2xl font-medium leading-tight tracking-tight">Subscribe for our newsletter
            </h1>
            <div class="flex flex-col gap-4">
                <p class="text-white text-lg font-normal leading-tight tracking-tight">Consequat vel arcu feugiat
                    dui eu tempor pretium </p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex items-center gap-4">
                    @csrf
                    <input
                        class="w-full bg-white text-lg font-medium leading-tight tracking-tight border p-4 text-[#000D5199]"
                        placeholder="Your email" type="email" name="email">
                    <button type="submit"
                        class="w-fit text-white text-xl font-medium leading-tight tracking-tight p-4 bg-[#2460FD]">Subscribe</button>
                </form>
            </div>
            <div class="w-full flex items-start gap-8">
                <div class="w-full flex justify-between flex-col gap-4">
                    <div class="w-full flex flex-col gap-4">
                        <h1 class="text-white text-2xl font-medium leading-tight tracking-tight">Address
                        </h1>
                        <div class="flex flex-col gap-4">
                            <a class="text-white text-lg font-normal leading-tight tracking-tight">123 State St. Xyz,
                                Texas, USA</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h1 class="text-white text-2xl font-medium leading-tight tracking-tight">Email
                        </h1>
                        <div class="flex flex-col gap-4">
                            <a
                                class="text-white text-lg font-normal leading-tight tracking-tight">info@divinesolutionfinding.com</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h1 class="text-white text-2xl font-medium leading-tight tracking-tight">Phone
                        </h1>
                        <div class="flex flex-col gap-4">
                            <a class="text-white text-lg font-normal leading-tight tracking-tight">+1 ( 123 ) 456
                                7890</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex items-center justify-center pt-5">
        <p class="text-white text-lg font-normal leading-normal tracking-normal">
            Copyright © {{ date('Y') }} Divine Solution Fundings. All rights reserved.
        </p>
    </div>
</div>
