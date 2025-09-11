@php
    $navLinks = include resource_path('constants/navlinks.php');
@endphp

<nav class="w-full flex items-center justify-between px-20 py-5 fixed top-0 z-50 bg-transparent transition-transform duration-300"
    x-data="{ scrollAtTop: true }"
    x-init="window.addEventListener('scroll', () => { scrollAtTop = window.scrollY < window.innerHeight * 0.1; })"
    :class="{
        '-translate-y-full': !scrollAtTop && window.scrollY > window.lastScrollY,
        'translate-y-0': scrollAtTop || window
            .scrollY < window.lastScrollY
    }" @scroll.window="window.lastScrollY = window.scrollY">
    <a href={{ route('home') }} class="flex items-center gap-2">
        <img src={{ asset('assets/logo.png') }} alt="logo" width="80" height="80">
    </a>
    <div class="flex gap-8">
        @foreach ($navLinks as $link)
            <a href="{{ route($link['href']) }}" class="text-white text-xl font-medium ">{{ $link['label'] }}</a>
        @endforeach
    </div>
    <div class="flex items-center gap-3">
        @if (!auth()->check())
            <a href="{{ route('login') }}"
                class="text-white text-xl font-medium leading-tight cursor-pointer tracking-tight border-2 border-white px-14 py-3">Login</a>
        @endif
        <div x-data="{ open: false }" class="relative">
            @if (auth()->check())
                <button @click="open = !open" class="rounded-full border-2 border-white w-12 h-12 overflow-hidden">
                    <img src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : asset('assets/placeholder.png') }}"
                        alt="User" class="w-full h-full object-cover">
                </button>
                <div x-show="open" @click.away="open = false"
                    class="absolute right-0 mt-2 w-48 bg-white text-black rounded shadow-lg py-2 z-50 transition-opacity duration-300">
                    @php
                        $role = auth()->user()->role ?? 'user';
                    @endphp
                    @if ($role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 hover:bg-gray-200">Dashboard</a>
                        <a href="{{ route('admin.container.setting.index') }}"
                            class="block px-4 py-2 hover:bg-gray-200">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-200">Logout</button>
                        </form>
                    @else
                        @if ($role === 'user')
                            <a href="{{ route('client.dashboard.container.home.dashboard') }}"
                                class="block px-4 py-2 hover:bg-gray-200">Dashboard</a>
                            <a href="{{ route('client.dashboard.container.setting.index') }}"
                                class="block px-4 py-2 hover:bg-gray-200">Profile</a>
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-200">Logout</button>
                        </form>
                    @endif
                </div>
            @endif
        </div>
    </div>
</nav>