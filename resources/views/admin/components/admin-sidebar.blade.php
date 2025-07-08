<nav class="w-[14%] h-screen fixed top-0 left-0 z-50 bg-[#FAFAFA] border-r border-gray-200">
   <div class="w-full h-full flex flex-col justify-between p-5">
      <div class="flex flex-col gap-7">
         <div class="flex gap-2 items-center">
            <img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-10 h-10">
            <div class="flex flex-col">
               <h1 class="text-xl font-semibold text-gray-800 tracking-tight leading-tight">Jean Duret</h1>
               <p class="text-sm text-gray-500 font-normal tracking-tight leading-tight">Admin Dashboard</p>
            </div>
         </div>
         <div class="flex flex-col gap-5">
            <div>
               <h1 class="text-xl font-medium text-gray-800 tracking-tight leading-tight">Navigation</h1>
            </div>
            <div class="flex flex-col gap-4">
               <a href={{ route('admin.dashboard') }} class="flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-house-icon lucide-house">
                     <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                     <path
                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                  </svg>
                  <h1 class="text-md font-normal text-black tracking-tight leading-tight">Dashboard</h1>
               </a>
               <a href={{ route('admin.dashboard') }} class="flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-layers2-icon lucide-layers-2">
                     <path
                        d="M13 13.74a2 2 0 0 1-2 0L2.5 8.87a1 1 0 0 1 0-1.74L11 2.26a2 2 0 0 1 2 0l8.5 4.87a1 1 0 0 1 0 1.74z" />
                     <path
                        d="m20 14.285 1.5.845a1 1 0 0 1 0 1.74L13 21.74a2 2 0 0 1-2 0l-8.5-4.87a1 1 0 0 1 0-1.74l1.5-.845" />
                  </svg>
                  <h1 class="text-md font-normal text-black tracking-tight leading-tight">Categories</h1>
               </a>
               <a href={{ route('admin.dashboard') }} class="flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-message-square-text-icon lucide-message-square-text">
                     <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                     <path d="M13 8H7" />
                     <path d="M17 12H7" />
                  </svg>
                  <h1 class="text-md font-normal text-black tracking-tight leading-tight">Blogs</h1>
               </a>
               <a href={{ route('admin.dashboard') }} class="flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-server-icon lucide-server">
                     <rect width="20" height="8" x="2" y="2" rx="2" ry="2" />
                     <rect width="20" height="8" x="2" y="14" rx="2" ry="2" />
                     <line x1="6" x2="6.01" y1="6" y2="6" />
                     <line x1="6" x2="6.01" y1="18" y2="18" />
                  </svg>
                  <h1 class="text-md font-normal text-black tracking-tight leading-tight">Services</h1>
               </a>
               <a href={{ route('admin.dashboard') }} class="flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-square-chart-gantt-icon lucide-square-chart-gantt">
                     <rect width="18" height="18" x="3" y="3" rx="2" />
                     <path d="M9 8h7" />
                     <path d="M8 12h6" />
                     <path d="M11 16h5" />
                  </svg>
                  <h1 class="text-md font-normal text-black tracking-tight leading-tight">Products</h1>
               </a>
            </div>
         </div>
      </div>
      <div class="flex gap-2 items-center justify-between">
         <div class="flex gap-2 items-center">
            <div class="w-9 h-9 rounded-full bg-black"></div>
            <div class="flex flex-col">
               <h1 class="text-xl font-semibold text-gray-800 tracking-tight leading-tight">Jean Duret</h1>
               <p class="text-sm text-gray-500 font-normal tracking-tight leading-tight">Admin Dashboard</p>
            </div>
         </div>
         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#000"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down">
            <path d="m7 15 5 5 5-5" />
            <path d="m7 9 5-5 5 5" />
         </svg>
      </div>
   </div>
</nav>