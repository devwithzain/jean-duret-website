<nav class="w-full flex items-center justify-between px-20 py-5 fixed top-0 z-50">
   <div>
      <img src={{ asset('assets/logo.png') }} alt="logo" width="80" height="80">
   </div>
   <div class="flex gap-8">
      <a href="/" class="text-white text-xl font-medium leading-tight tracking-tight">Home</a>
      <a href="/about" class="text-white text-xl font-medium leading-tight tracking-tight">About</a>
      <a href="/services" class="text-white text-xl font-medium leading-tight tracking-tight">Service</a>
      <a href="/contact" class="text-white text-xl font-medium leading-tight tracking-tight">Contact</a>
   </div>
   <div>
      @auth
      <form method="POST" action="{{ route('logout') }}">
         @csrf
         <button type="submit"
            class="text-white text-xl font-medium cursor-pointer leading-tight tracking-tight border-2 border-white px-14 py-3">Logout</button>
      </form>
      @else
      <a href="/login"
         class="text-white text-xl font-medium leading-tight cursor-pointer tracking-tight border-2 border-white px-14 py-3">LogIn</a>
      @endauth
   </div>
</nav>