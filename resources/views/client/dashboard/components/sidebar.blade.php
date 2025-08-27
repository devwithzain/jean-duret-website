@if(auth()->check() && auth()->user()->role === 'user')
  <nav
    class="w-[14%] h-screen fixed top-0 left-0 z-50 bg-[#FAFAFA] dark:bg-black border-r border-gray-200 dark:border-gray-700">
    <div class="w-full h-full flex flex-col justify-between p-3">
      <div class="flex flex-col gap-7">
        <div class="flex gap-2 items-center">
          <img src="{{ asset('assets/sidebarLogo.png') }}" alt="logo" class="w-10 h-10">
          <div class="flex flex-col">
            <h1 class="text-lg font-semibold text-gray-800 dark:text-white tracking-tight leading-tight capitalize">
              {{ auth()->user()->name }}
            </h1>
            <p class="text-sm text-gray-500 dark:text-white font-normal tracking-tight leading-tight">User Dashboard</p>
          </div>
        </div>
        <div class="flex flex-col gap-5">
          <div>
            <h1 class="text-xl font-medium text-gray-800 dark:text-white tracking-tight leading-tight">Navigation</h1>
          </div>
          <div class="flex flex-col gap-4">
            <a href={{ route('client.dashboard.container.home.dashboard') }} class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-house-icon lucide-house stroke-black dark:stroke-white">
                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                <path
                  d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              </svg>
              <h1 class="text-md font-normal text-black dark:text-white tracking-tight leading-tight">Dashboard</h1>
            </a>
            <a href={{ route('client.dashboard.container.inquries.listings') }} class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-layers2-icon lucide-layers-2 stroke-black dark:stroke-white">
                <path
                  d="M13 13.74a2 2 0 0 1-2 0L2.5 8.87a1 1 0 0 1 0-1.74L11 2.26a2 2 0 0 1 2 0l8.5 4.87a1 1 0 0 1 0 1.74z" />
                <path
                  d="m20 14.285 1.5.845a1 1 0 0 1 0 1.74L13 21.74a2 2 0 0 1-2 0l-8.5-4.87a1 1 0 0 1 0-1.74l1.5-.845" />
              </svg>
              <h1 class="text-md font-normal text-black dark:text-white tracking-tight leading-tight">Inquries</h1>
            </a>
          </div>
        </div>
      </div>
      <div class="flex gap-2 items-center justify-between">
        <div class="flex gap-2 items-center">
          <img id="imagePreview"
            src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : asset('assets/placeholder.png') }}"
            alt="Preview" class="w-10 rounded-full object-cover">
          <div class="flex flex-col">
            <h1 class="text-lg font-semibold text-gray-800 dark:text-white tracking-tight leading-tight capitalize">
              {{ auth()->user()->name }}
            </h1>
            <p class="text-[12px] text-gray-500 dark:text-white font-normal tracking-tight leading-tight">
              {{ auth()->user()->email }}
            </p>
          </div>
        </div>
        <div class="relative">
          <button onclick="toggleSettingDropdown()">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down stroke-black dark:stroke-white">
              <path d="m7 15 5 5 5-5" />
              <path d="m7 9 5-5 5 5" />
            </svg>
          </button>
          <div id="settingDropdown"
            class="hidden absolute -bottom-full left-full mb-4 ml-2 w-60 bg-white dark:bg-black rounded-lg border dark:border-gray-700 border-black/20 shadow-[0_1px_1px_rgb(0,0,0,0.2)]">
            <button
              class="w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-900/70 border-b border-black/20 dark:border-gray-700">
              <div class="flex gap-2 items-center">
                <img id="imagePreview"
                  src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : asset('assets/placeholder.png') }}"
                  alt="Preview" class="w-10 rounded-full object-cover">
                <div class="flex flex-col gap-1">
                  <h1 class="text-lg font-semibold text-gray-800 dark:text-white tracking-tight leading-tight">
                    {{ auth()->user()->name }}
                  </h1>
                  <p class="text-[12px] text-gray-500 dark:text-white font-normal tracking-tight leading-tight">
                    {{ auth()->user()->email }}
                  </p>
                </div>
              </div>
            </button>
            <a href={{route('client.dashboard.container.setting.index')}}
              class="w-full block px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-900/70 border-b border-black/20 dark:border-gray-700">
              <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-settings-icon lucide-settings dark:text-white">
                  <path
                    d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                  <circle cx="12" cy="12" r="3" />
                </svg>
                <p class="text-[12px] text-gray-500 dark:text-white font-normal tracking-tight leading-tight">Account</p>
              </div>
            </a>
            <form action={{ route('logout') }} method="post"
              class="w-full px-4 py-2 cursor-pointer text-left hover:bg-gray-100 dark:hover:bg-gray-900/70">
              @csrf
              <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                  class="dark:text-white" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out">
                  <path d="m16 17 5-5-5-5" />
                  <path d="M21 12H9" />
                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                </svg>
                <button type="submit"
                  class="text-[12px] text-gray-500 dark:text-white font-normal tracking-tight leading-tight">LogOut</button>
              </div>
            </form>
          </div>
        </div>
        <script>
          function toggleSettingDropdown() {
            const dropdown = document.getElementById('settingDropdown');
            dropdown.classList.toggle('hidden');
          }
        </script>
      </div>
    </div>
  </nav>
@endif