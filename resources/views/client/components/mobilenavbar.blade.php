@php
   $navLinks = include resource_path('constants/navlinks.php');
@endphp

<!-- Mobile Hamburger and Fullscreen Menu Overlay -->
<div x-data="{ mobileMenu: false }"
   class="w-full flex items-center justify-between px-6 py-3 fixed top-0 z-[999] bg-[#000D51] sm:flex xm:flex md:hidden lg:hidden xl:hidden">
   <a href={{ route('home') }} class="flex items-center gap-2">
      <img src={{ asset('assets/logo.png') }} alt="logo" width="48" height="48">
   </a>
   <button @click="mobileMenu = true" class="focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
         stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
   </button>
   <!-- Fullscreen Overlay -->
   <div x-show="mobileMenu" x-transition:enter="transition ease-out duration-400"
      x-transition:enter-start="opacity-0 -translate-y-20" x-transition:enter-end="opacity-100 translate-y-0"
      x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
      x-transition:leave-end="opacity-0 -translate-y-20"
      class="fixed inset-0 z-50 bg-[#000D51] flex flex-col items-center justify-center transform">
      <button @click="mobileMenu = false" class="absolute top-8 right-8 text-white">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
         </svg>
      </button>
      <div class="flex flex-col gap-8 items-center">
         @foreach ($navLinks as $link)
            <a href="{{ route($link['href']) }}" class="text-white text-3xl font-semibold"
               @click="mobileMenu = false">{{ $link['label'] }}</a>
         @endforeach
         @if (!auth()->check())
            <a href="{{ route('login') }}"
               class="text-white text-2xl font-medium border-2 border-white px-10 py-3 ">Login</a>
         @endif
      </div>
   </div>
</div>