<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title')</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
   <div data-scroll-container>
      @if(!request()->is('login') && !request()->is('register'))
      <section>
         @include('client.components.navbar')
      </section>
      @endif

      <main data-scroll-section>
         @yield('content')
      </main>

      @if(!request()->is('login') && !request()->is('register'))
      <section>
         @include('client.components.footer')
      </section>
      @endif
   </div>
   <script src="https://unpkg.com/alpinejs" defer></script>
</body>

</html>