<div class="w-full p-5 flex items-center justify-between">
   <div class="flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#000"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
         class="lucide lucide-panel-left-icon lucide-panel-left">
         <rect width="18" height="18" x="3" y="3" rx="2" />
         <path d="M9 3v18" />
      </svg>
      <span class="text-lg font-thin text-gray-500"> | </span>
      <h1>Dashboard</h1>
   </div>
   <div class="relative">
      <button class="p-2 bg-white rounded-lg border border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)] flex items-center"
         onclick="toggleDropdown()">
         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-sun-icon lucide-sun">
            <circle cx="12" cy="12" r="4" />
            <path d="M12 2v2" />
            <path d="M12 20v2" />
            <path d="m4.93 4.93 1.41 1.41" />
            <path d="m17.66 17.66 1.41 1.41" />
            <path d="M2 12h2" />
            <path d="M20 12h2" />
            <path d="m6.34 17.66-1.41 1.41" />
            <path d="m19.07 4.93-1.41 1.41" />
         </svg>
      </button>
      <div id="themeDropdown"
         class="hidden absolute top-full right-0 mt-2 w-32 bg-white rounded-lg border border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
         <button class="w-full px-4 py-2 text-left hover:bg-gray-100 border-b border-black/20">Light</button>
         <button class="w-full px-4 py-2 text-left hover:bg-gray-100 border-b border-black/20">Dark</button>
         <button class="w-full px-4 py-2 text-left hover:bg-gray-100 border-b border-black/20">System</button>
      </div>
   </div>
   <script>
      function toggleDropdown() {
         const dropdown = document.getElementById('themeDropdown');
         dropdown.classList.toggle('hidden');
      }
   </script>
</div>