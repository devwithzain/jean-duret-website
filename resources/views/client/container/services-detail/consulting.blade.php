<div class="w-full flex items-center justify-around px-20 py-20">
  <div class="flex flex-col gap-14">
    <h1 class="text-[#000D51] text-5xl text-center font-semibold ">
      Other Related Services</h1>
    <div class="w-full grid grid-cols-3 gap-10">
      @if($services)
        @foreach($services as $service)
          <div
              class="w-full h-[400px] shadow-[0_0_15px_rgba(0,0,0,0.15)] hover:bg-[#000D51] ease-linear duration-200 bg-white p-10 group">
              <div class="w-full h-full flex flex-col justify-center gap-5">
                <img src={{ asset('storage/' . $service->image) }} alt="service-icon"
                    class="w-20 h-20 object-cover group-hover:filter group-hover:brightness-0 group-hover:invert">
                <h1 class="group-hover:text-white text-[#000D51] text-3xl font-semibold ">
                    {{ $service->title }}
                </h1>
                <p class="group-hover:text-white text-[#000D51] text-xl font-normal ">
                    {{ $service->description }}
                </p>
                <a href="{{ route('service-detail', ['slug' => $service->slug]) }}"
                    class="w-fit text-white text-xl font-medium  px-10 py-3 bg-[#2460FD]">Details</a>
              </div>
          </div>
         @endforeach
       @endif
    </div>
  </div>
</div>