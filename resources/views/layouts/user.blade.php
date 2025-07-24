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
   <div class="w-full flex items-center justify-between">
      <section>
         @include('client.dashboard.components.sidebar')
      </section>
      <main class="w-[86%]">
         @include('client.dashboard.components.navbar')
         @yield('content')
      </main>
   </div>
   <script src="https://unpkg.com/alpinejs" defer></script>
</body>

</html>