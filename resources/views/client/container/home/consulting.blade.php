<div class="w-full flex items-center justify-around px-20 py-20">
   <div class="flex flex-col gap-10">
      <div class="w-full flex items-center justify-around">
         <div class="w-full flex flex-col gap-3">
            <p class="text-[#000D5180] text-lg font-normal leading-tight tracking-tight">Business consulting</p>
            <h1 class="text-[#000D51] text-7xl font-semibold leading-tight tracking-tight">Your One-Stop Real <br>
               Estate &
               Loan
               Partner</h1>
         </div>
         <div class="w-full flex flex-col gap-3">
            <p class="text-[#000D5180] text-lg font-normal leading-tight tracking-tight">Lorem Ipsum is simply dummy
               text
               of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
               since
               the 1500</p>
            <a href="{{ route('services') }}"
               class="w-full text-[#000D51] flex items-end justify-end text-xl font-medium underline leading-tight tracking-tight">
               All services
            </a>
         </div>
      </div>
      <div class="w-full grid grid-cols-3 gap-10">
         @foreach(getAllServices() as $service)
          <div
            class="w-full h-[400px] shadow-[0_0_15px_rgba(0,0,0,0.15)] hover:bg-[#000D51] ease-linear duration-200 bg-white p-10 group">
            <div class="w-full h-full flex flex-col justify-center gap-5">
               <img src={{ asset('storage/' . $service->image) }} alt="service-icon"
                 class="w-20 h-20 object-cover group-hover:filter group-hover:brightness-0 group-hover:invert">
               <h1 class="group-hover:text-white text-[#000D51] text-3xl font-semibold leading-tight tracking-tight">
                 {{ $service->title }}
               </h1>
               <p class="group-hover:text-white text-[#000D51] text-lg font-normal leading-tight tracking-tight">
                 {{ $service->description }}
               </p>
               <a href="{{ route('service-detail', ['slug' => $service->slug]) }}"
                 class="w-fit text-white text-xl font-medium leading-tight tracking-tight px-10 py-3 bg-[#2460FD]">Details</a>
            </div>
          </div>
       @endforeach
      </div>
   </div>
</div>