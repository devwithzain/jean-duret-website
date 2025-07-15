<div class="w-full flex items-center justify-between gap-10 bg-[#F3F4F9]">
   <div class="w-1/2">
      <img src={{ asset('assets/serviceDetail.png') }} alt="serviceDetail" class="w-full h-full object-cover">
   </div>
   <div class="w-1/2 flex flex-col gap-10 p-20">
      <div class="w-full flex flex-col gap-10">
         <div class="w-full flex flex-col gap-4">
            <p class="text-[#000D51] text-lg font-normal leading-tight tracking-tight">Service</p>
            <h1 class="text-[#000D51] text-7xl font-semibold leading-tight tracking-tight">{{ $service->title }}</h1>
            <p class="text-[#000D51] text-lg font-normal leading-normal tracking-normal">
               {{ $service->short_description }}
            </p>
            <p class="text-[#000D51] text-lg font-normal leading-normal tracking-normal">{{ $service->description }}</p>
            <button onclick="document.getElementById('bookingModal').style.display='block'"
               class="w-fit cursor-pointer rounded-md text-white text-lg font-normal leading-normal tracking-normal bg-[#000D51] px-4 py-3">Book
               Now</button>
         </div>
      </div>
   </div>
</div>
<div id="bookingModal" class="fixed hidden inset-0 bg-black/80 z-50 bg-opacity-50 overflow-y-auto h-full w-full"
   style="position: fixed; top: 0; left: 0;"
   onclick="if(event.target==this){document.getElementById('bookingModal').style.display='none';document.body.style.overflow='auto';}">
   <div
      class="relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-5 flex gap-5 border w-[70%] shadow-lg rounded-md bg-white">
      <div class="w-1/2">
         <img src={{ asset('assets/serviceDetail.png') }} alt="serviceDetail"
            class="w-full rounded-lg h-full object-cover">
      </div>
      <div class="w-1/2 mt-3">
         <h3 class="text-[#000D51] text-5xl font-semibold leading-tight tracking-tight">Book Service</h3>
         <form class="mt-4 space-y-4" action="{{ route('book-service') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="service_id" value="{{ $service->id }}">
            <div class="flex flex-col gap-1">
               <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
               <input type="text" id="name" name="name" placeholder="Full Name" required
                  class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex flex-col gap-1">
               <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
               <input type="email" id="email" name="email" placeholder="Email" required
                  class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex flex-col gap-1">
               <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
               <input type="tel" id="phone" name="phone" placeholder="Phone" required
                  class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex flex-col gap-1">
               <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
               <input type="date" id="date" name="date" required class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex flex-col gap-1">
               <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service</label>
               <input type="text" id="service" value="{{ $service->title }}" disabled
                  class="w-full px-3 py-2 border rounded-md bg-gray-100">
            </div>
            <div class="flex flex-col gap-1">
               <label for="specialMessage" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
               <textarea id="specialMessage" name="specialMessage" placeholder="Message" rows="5" required
                  class="w-full px-3 py-2 border rounded-md"></textarea>
            </div>
            <div class="flex flex-col gap-1">
               <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image</label>
               <input type="file" id="image" name="image" accept="image/*" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex justify-between">
               <button type="submit" class="bg-[#000D51] text-white px-4 py-2 rounded-md">Submit</button>
               <button type="button"
                  onclick="document.getElementById('bookingModal').style.display='none';document.body.style.overflow='auto';"
                  class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">Close</button>
            </div>
         </form>
      </div>
   </div>
</div>
<script>
   document.getElementById('bookingModal').addEventListener('show', function () {
      document.body.style.overflow = 'hidden';
   });
</script>