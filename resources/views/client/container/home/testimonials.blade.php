<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="w-full flex flex-col items-center justify-center padding-x padding-y relative">
    <div class="swiper testimonials-swiper w-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide w-full flex items-center justify-center">
                <div class="w-full h-full flex items-center justify-center gap-5 xm:flex-col sm:flex-col">
                    <div class="w-1/4 xm:w-full sm:w-full">
                        <img src="{{ asset('assets/testimonials1.png') }}" alt="testimonials"
                            class="w-[500px] h-[500px] object-cover xm:w-full sm:w-full">
                    </div>
                    <div class="w-1/4 xm:w-full sm:w-full flex flex-col gap-5">
                        <div>
                            <h1 class="text-[#000D51] heading font-semibold ">Testimonials
                            </h1>
                            <p class="text-[#000D5199] paragraph font-normal leading-normal tracking-normal">
                                I needed help fast after a deal fell through. Jean listened and walked me through
                                options. No talk about credit. We
                                closed sooner than I expected. I felt heard the whole time and got clear updates daily.
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-[#000D51] text-2xl font-semibold ">James Miller
                            </h1>
                            <p class="text-[#00000080] paragraph font-normal leading-normal tracking-normal">Homeowner

                            </p>
                        </div>
                        <img src="{{ asset('assets/quotes.svg') }}" alt="testimonials"
                            class="w-20 absolute bottom-20 right-20 object-cover xm:hidden sm:hidden">
                    </div>
                </div>
            </div>
            <div class="swiper-slide w-full flex items-center justify-center">
                <div class="w-full h-full flex items-center justify-center gap-5 xm:flex-col sm:flex-col">
                    <div class="w-1/4 xm:w-full sm:w-full">
                        <img src="{{ asset('assets/testimonials2.png') }}" alt="testimonials"
                            class="w-[500px] h-[500px] object-cover xm:w-full sm:w-full">
                    </div>
                    <div class="w-1/4 xm:w-full sm:w-full flex flex-col gap-5">
                        <div>
                            <h1 class="text-[#000D51] heading font-semibold ">Testimonials
                            </h1>
                            <p class="text-[#000D5199] paragraph font-normal leading-normal tracking-normal">
                                I had questions at hours and sent texts. Someone always replied. The process felt
                                simple. No bank forms or long waits.
                                They explained each document. I sold my place without stress and slept better at night.
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-[#000D51] text-2xl font-semibold ">John Anderson</h1>
                            <p class="text-[#00000080] paragraph font-normal leading-normal tracking-normal">Seller
                            </p>
                        </div>
                        <img src="{{ asset('assets/quotes.svg') }}" alt="testimonials"
                            class="w-20 absolute bottom-20 right-20 object-cover xm:hidden sm:hidden">
                    </div>
                </div>
            </div>
            <div class="swiper-slide w-full flex items-center justify-center">
                <div class="w-full h-full flex items-center justify-center gap-5 xm:flex-col sm:flex-col">
                    <div class="w-1/4 xm:w-full sm:w-full">
                        <img src="{{ asset('assets/testimonials3.jpg') }}" alt="testimonials"
                            class="w-[500px] h-[500px] object-cover xm:w-full sm:w-full">
                    </div>
                    <div class="w-1/4 xm:w-full sm:w-full flex flex-col gap-5">
                        <div>
                            <h1 class="text-[#000D51] heading font-semibold ">
                                Testimonials</h1>
                            <p class="text-[#000D5199] paragraph font-normal leading-normal tracking-normal">
                                I came in to ask about a rental purchase. We went over costs and timing. No pressure.
                                They set expectations and kept
                                them. Closing happened the week I needed. It felt like help, not a pitch.
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-[#000D51] text-2xl font-semibold ">William Harris</h1>
                            <p class="text-[#00000080] paragraph font-normal leading-normal tracking-normal">
                                Investor</p>
                        </div>
                        <img src="{{ asset('assets/quotes.svg') }}" alt="testimonials"
                            class="w-20 absolute bottom-20 right-20 object-cover xm:hidden sm:hidden">
                    </div>
                </div>
            </div>
            <div class="swiper-slide w-full flex items-center justify-center">
                <div class="w-full h-full flex items-center justify-center gap-5 xm:flex-col sm:flex-col">
                    <div class="w-1/4 xm:w-full sm:w-full">
                        <img src="{{ asset('assets/testimonials4.jpg') }}" alt="testimonials"
                            class="w-[500px] h-[500px] object-cover xm:w-full sm:w-full">
                    </div>
                    <div class="w-1/4 xm:w-full sm:w-full flex flex-col gap-5">
                        <div>
                            <h1 class="text-[#000D51] heading font-semibold ">
                                Testimonials</h1>
                            <p class="text-[#000D5199] paragraph font-normal leading-normal tracking-normal">
                                My credit history was messy after a tough year. They focused on the property and plan.
                                We kept moving. Calls stayed
                                clear. I finished the loan and got back to work. That approach helped a lot.
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-[#000D51] text-2xl font-semibold ">
                                Michael Brown
                            </h1>
                            <p class="text-[#00000080] paragraph font-normal leading-normal tracking-normal">
                                Contractor</p>
                        </div>
                        <img src="{{ asset('assets/quotes.svg') }}" alt="testimonials"
                            class="w-20 absolute bottom-20 right-20 object-cover xm:hidden sm:hidden">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper navigation -->
    <div class="xm:hidden sm:hidden">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
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
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            effect: 'slide',
            speed: 600,
        });
    });
</script>