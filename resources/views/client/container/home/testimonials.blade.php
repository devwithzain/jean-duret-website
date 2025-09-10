<!-- Swiper.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="w-full flex flex-col items-center justify-center p-20 relative">
    <div class="swiper testimonials-swiper w-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide w-full flex items-center justify-center gap-10">
                <div class="w-full h-full flex items-center justify-center gap-10">
                    <div class="w-1/4">
                        <img src="{{ asset('assets/testimonials.png') }}" alt="testimonials"
                            class="w-[500px] object-cover">
                    </div>
                    <div class="w-1/4 flex flex-col gap-10">
                        <div>
                            <h1 class="text-[#000D51] text-7xl font-semibold leading-tight tracking-tight">Testimonials
                            </h1>
                            <p class="text-[#000D5199] text-lg font-normal leading-normal tracking-normal">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-[#000D51] text-2xl font-semibold leading-tight tracking-tight">Lorene Hudson
                            </h1>
                            <p class="text-[#00000080] text-lg font-normal leading-normal tracking-normal">Chief
                                Executive
                                Officer</p>
                        </div>
                        <img src="{{ asset('assets/quotes.svg') }}" alt="testimonials"
                            class="w-20 absolute bottom-20 right-20 object-cover">
                    </div>
                </div>
            </div>
            <div class="swiper-slide w-full flex items-center justify-center gap-10">
                <div class="w-full h-full flex items-center justify-center gap-10">
                    <div class="w-1/4">
                        <img src="{{ asset('assets/testimonials.png') }}" alt="testimonials"
                            class="w-[500px] object-cover">
                    </div>
                    <div class="w-1/4 flex flex-col gap-10">
                        <div>
                            <h1 class="text-[#000D51] text-7xl font-semibold leading-tight tracking-tight">Testimonials
                            </h1>
                            <p class="text-[#000D5199] text-lg font-normal leading-normal tracking-normal">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-[#000D51] text-2xl font-semibold leading-tight tracking-tight">John Doe</h1>
                            <p class="text-[#00000080] text-lg font-normal leading-normal tracking-normal">Managing
                                Director
                            </p>
                        </div>
                        <img src="{{ asset('assets/quotes.svg') }}" alt="testimonials"
                            class="w-20 absolute bottom-20 right-20 object-cover">
                    </div>
                </div>
            </div>
            <div class="swiper-slide w-full flex items-center justify-center gap-10">
                <div class="w-full h-full flex items-center justify-center gap-10">
                    <div class="w-1/4">
                        <img src="{{ asset('assets/testimonials.png') }}" alt="testimonials"
                            class="w-[500px] object-cover">
                    </div>
                    <div class="w-1/4 flex flex-col gap-10">
                        <div>
                            <h1 class="text-[#000D51] text-7xl font-semibold leading-tight tracking-tight">
                                Testimonials</h1>
                            <p class="text-[#000D5199] text-lg font-normal leading-normal tracking-normal">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a
                                galley of type and scrambled
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-[#000D51] text-2xl font-semibold leading-tight tracking-tight">Jane
                                Smith</h1>
                            <p class="text-[#00000080] text-lg font-normal leading-normal tracking-normal">
                                Operations
                                Manager</p>
                        </div>
                        <img src="{{ asset('assets/quotes.svg') }}" alt="testimonials"
                            class="w-20 absolute bottom-20 right-20 object-cover">
                    </div>
                </div>
            </div>
            <div class="swiper-slide w-full flex items-center justify-center gap-10">
                <div class="w-full h-full flex items-center justify-center gap-10">
                    <div class="w-1/4">
                        <img src="{{ asset('assets/testimonials.png') }}" alt="testimonials"
                            class="w-[500px] object-cover">
                    </div>
                    <div class="w-1/4 flex flex-col gap-10">
                        <div>
                            <h1 class="text-[#000D51] text-7xl font-semibold leading-tight tracking-tight">
                                Testimonials</h1>
                            <p class="text-[#000D5199] text-lg font-normal leading-normal tracking-normal">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a
                                galley of type and scrambled
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-[#000D51] text-2xl font-semibold leading-tight tracking-tight">
                                Michael Brown
                            </h1>
                            <p class="text-[#00000080] text-lg font-normal leading-normal tracking-normal">
                                Finance Lead</p>
                        </div>
                        <img src="{{ asset('assets/quotes.svg') }}" alt="testimonials"
                            class="w-20 absolute bottom-20 right-20 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper navigation -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.testimonials-swiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            effect: 'slide',
            speed: 600,
        });
    });
</script>