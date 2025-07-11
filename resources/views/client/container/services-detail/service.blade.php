<div class="w-full flex items-center justify-between gap-10 bg-[#F3F4F9]">
   <div class="w-1/2">
      <img src={{ asset('assets/serviceDetail.png') }} alt="serviceDetail" class="w-full h-full object-cover">
   </div>
   <div class="w-1/2 flex flex-col gap-10 p-20">
      <div class="w-full flex flex-col gap-10">
         <div class="w-full flex flex-col gap-3">
            <p class="text-[#000D51] text-lg font-normal leading-tight tracking-tight">Service</p>
            <h1 class="text-[#000D51] text-7xl font-semibold leading-tight tracking-tight">{{ $service->title }}</h1>
            <p class="text-[#000D51] text-lg font-normal leading-normal tracking-normal">
               {{ $service->short_description }}
            </p>
            <p class="text-[#000D51] text-lg font-normal leading-normal tracking-normal">{{ $service->description }}</p>
         </div>
      </div>
   </div>
</div>