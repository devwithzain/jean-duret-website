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
      <section data-scroll-section>
         @include('components.navbar')
      </section>

      <main data-scroll-section>
         @yield('content')
      </main>

      <section data-scroll-section>
         @include('components.footer')
      </section>
   </div>
</body>

</html>