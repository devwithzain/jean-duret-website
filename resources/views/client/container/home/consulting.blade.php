<div class="w-full flex items-center justify-around padding-x padding-y">
   <div class="flex flex-col gap-10">
      <div class="w-full flex items-center justify-around xm:flex-col sm:flex-col">
         <div class="w-full flex flex-col gap-3">
            <p class="text-[#000D51] paragraph font-normal">Business consulting</p>
            <h1 class="text-[#000D51] heading font-semibold">Your One-Stop Real <br>
               Estate &
               Loan
               Partner</h1>
         </div>
         <div class="w-full flex flex-col gap-3">
            <p class="text-[#000D51] paragraph font-normal">
               We provide expert guidance in real estate and loan services, helping you make informed decisions for your
               business and personal needs.
            </p>
            <a href="{{ route('services') }}"
               class="w-full text-[#000D51] flex items-end justify-end paragraph font-medium underline xm:justify-start sm:justify-start">
               All services
            </a>
         </div>
      </div>
      <div class="w-full grid grid-cols-3 gap-10 xm:grid-cols-1 sm:grid-cols-1">
         @if ($services)
            @foreach ($services as $service)
               <div
                  class="w-full shadow-[0_0_15px_rgba(0,0,0,0.15)] hover:bg-[#000D51] ease-linear duration-200 bg-white p-10 group">
                  <div class="w-full h-full flex flex-col justify-center gap-5">
                     <img src={{ asset('storage/' . $service->image) }} alt="service-icon"
                        class="w-20 h-20 object-cover group-hover:filter group-hover:brightness-0 group-hover:invert">
                     <h1 class="group-hover:text-white text-[#000D51] text-3xl font-semibold">
                        {{ $service->title }}
                     </h1>
                     <p class="group-hover:text-white text-[#000D51] paragraph font-normal">
                        {{ $service->short_description }}
                     </p>
                     <a href="{{ route('service-detail', ['slug' => $service->slug]) }}"
                        class="w-fit text-white paragraph font-medium px-10 py-3 bg-[#2460FD]">Details</a>
                  </div>
               </div>
            @endforeach
         @endif
      </div>
   </div>
</div>