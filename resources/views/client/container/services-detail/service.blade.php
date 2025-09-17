<div class="w-full flex items-center justify-between gap-8 bg-[#F3F4F9] xm:flex-col sm:flex-col">
   <div class="w-1/2 xm:w-full sm:w-full">
      <img src="{{ asset('assets/serviceDetail.png') }}" alt="serviceDetail" class="w-full h-full object-cover">
   </div>
   <div class="w-1/2 xm:w-full sm:w-full flex flex-col gap-8 padding-x padding-y">
      <div class="w-full flex flex-col gap-10">
         <div class="w-full flex flex-col gap-4">
            <p class="text-[#000D51] paragraph font-normal ">Service</p>
            <h1 class="text-[#000D51] heading font-semibold ">{{ $service->title }}</h1>
            <p class="text-[#000D51] paragraph font-normal leading-normal tracking-normal">
               {{ $service->short_description }}
            </p>
            <p class="text-[#000D51] paragraph font-normal leading-normal tracking-normal">{{ $service->description }}

            </p>
            <button onclick="document.getElementById('bookingModal').style.display='block'"
               class="w-fit cursor-pointer rounded-md text-white paragraph font-normal leading-normal tracking-normal bg-[#000D51] px-4 py-3">Book
               Now</button>
         </div>
      </div>
   </div>
</div>
<div id="bookingModal"
   class="fixed hidden inset-0 bg-black/80 z-50 bg-opacity-50 overflow-y-auto h-full w-full xm:top-1/2 sm:top-1/2"
   style="position: fixed; top: 0; left: 0;"
   onclick="if(event.target==this){document.getElementById('bookingModal').style.display='none';document.body.style.overflow='auto';}">
   <div
      class="relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-5 flex gap-5 border w-[70%] shadow-lg rounded-md bg-white xm:w-full sm:w-full">
      <div class="w-1/2 xm:w-full sm:w-full xm:hidden sm:hidden">
         <img src="{{ asset('assets/serviceDetail.png') }}" alt="serviceDetail"
            class="w-full rounded-lg h-full object-cover">
      </div>
      <div class="w-1/2 xm:w-full sm:w-full mt-3">
         <h3 class="text-[#000D51] heading font-semibold ">Book Service</h3>
         <form class="mt-4 space-y-4" method="POST" action="{{ route('book-service') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="service_id" value="{{ $service->id }}">
            <div class="flex flex-col gap-1">
               <label for="name" class="block paragraph font-medium text-gray-700 mb-1">Full Name</label>
               <input type="text" id="name" name="name" placeholder="Full Name" required
                  class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex flex-col gap-1">
               <label for="email" class="block paragraph font-medium text-gray-700 mb-1">Email</label>
               <input type="email" id="email" name="email" placeholder="Email" required
                  class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex flex-col gap-1">
               <label for="phone" class="block paragraph font-medium text-gray-700 mb-1">Phone</label>
               <input type="tel" id="phone" name="phone" placeholder="Phone" required
                  class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex flex-col gap-1">
               <label for="date" class="block paragraph font-medium text-gray-700 mb-1">Date</label>
               <input type="date" id="date" name="date" required class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex flex-col gap-1">
               <label for="service" class="block paragraph font-medium text-gray-700 mb-1">Service</label>
               <input type="text" id="service" value="{{ $service->title }}" disabled
                  class="w-full px-3 py-2 border rounded-md bg-gray-100">
            </div>
            <div class="flex flex-col gap-1">
               <label for="specialMessage" class="block paragraph font-medium text-gray-700 mb-1">Message</label>
               <textarea id="specialMessage" name="specialMessage" placeholder="Message" rows="5" required
                  class="w-full px-3 py-2 border rounded-md"></textarea>
            </div>
            <div class="flex flex-col gap-1">
               <label for="image" class="block paragraph font-medium text-gray-700 mb-1">Image

                  <span>(optional)</span>
               </label>
               <input type="file" id="image" name="image" accept="image/*" class="w-full sr-only" />
               <label for="image"
                  class="cursor-pointer px-3 py-2 border rounded-md bg-gray-100 text-gray-700 flex items-center justify-between">
                  <span>Select Image</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="upload">
                     <path
                        d="M5 10c-.6 0-1-.4-1-1 0-3.9 3.1-7 7-7 3 0 5.7 2 6.7 4.9.1.5-.1 1.1-.7 1.2-.5.2-1.1-.1-1.3-.6C15.1 5.4 13.2 4 11 4 8.2 4 6 6.2 6 9c0 .6-.4 1-1 1z">
                     </path>
                     <path
                        d="M18 18c-.6 0-1-.4-1-1s.4-1 1-1c2.2 0 4-1.8 4-4s-1.8-4-4-4c-.3 0-.7 0-1 .1-.5.1-1.1-.2-1.2-.7s.2-1.1.7-1.2c.5-.1 1-.2 1.5-.2 3.3 0 6 2.7 6 6s-2.7 6-6 6zM8 18H5c-.6 0-1-.4-1-1s.4-1 1-1h3c.6 0 1 .4 1 1s-.4 1-1 1z">
                     </path>
                     <path
                        d="M18 18h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1s-.4 1-1 1zM5 18c-2.8 0-5-2.2-5-5s2.2-5 5-5c.6 0 1 .4 1 1s-.4 1-1 1c-1.7 0-3 1.3-3 3s1.3 3 3 3c.6 0 1 .4 1 1s-.4 1-1 1zm7 4c-.6 0-1-.4-1-1V11c0-.6.4-1 1-1s1 .4 1 1v10c0 .6-.4 1-1 1z">
                     </path>
                     <path
                        d="M9 15c-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l3-3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-3 3c-.2.2-.4.3-.7.3z">
                     </path>
                     <path
                        d="M15 15c-.3 0-.5-.1-.7-.3l-3-3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l3 3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3z">
                     </path>
                  </svg>
               </label>
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