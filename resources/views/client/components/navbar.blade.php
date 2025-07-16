@php
   $navLinks = include resource_path('constants/navlinks.php');
@endphp

<nav
   class="w-full flex items-center justify-between px-20 py-5 fixed top-0 z-50 bg-transparent transition-transform duration-300"
   x-data="{ scrollAtTop: true }"
   x-init="window.addEventListener('scroll', () => { scrollAtTop = window.scrollY < window.innerHeight * 0.1; })"
   :class="{ '-translate-y-full': !scrollAtTop && window.scrollY > window.lastScrollY, 'translate-y-0': scrollAtTop || window.scrollY < window.lastScrollY }"
   @scroll.window="window.lastScrollY = window.scrollY">
   <a href={{ route('home') }} class="flex items-center gap-2">
      <img src={{ asset('assets/logo.png') }} alt="logo" width="80" height="80">
   </a>
   <div class="flex gap-8">
      @foreach($navLinks as $link)
        <a href="{{ $link['href'] }}"
          class="text-white text-xl font-medium leading-tight tracking-tight">{{ $link['label'] }}</a>
     @endforeach
   </div>
   <div>
      @if(auth()->check() && auth()->user()->role === 'user')
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit"
            class="text-white text-xl font-medium cursor-pointer leading-tight tracking-tight border-2 border-white px-14 py-3">Logout</button>
        </form>
     @else
        <a href="/login"
          class="text-white text-xl font-medium leading-tight cursor-pointer tracking-tight border-2 border-white px-14 py-3">LogIn</a>
     @endif
   </div>
</nav>