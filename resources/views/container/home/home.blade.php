<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Divine Solution Funding</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

   @include('container.home.hero')
   @include('container.home.stats')
   @include('container.home.consulting')
   @include('container.home.choseus')
   @include('container.home.investment')
   @include('container.home.about')
   @include('container.home.testimonials')
   @include('components.footer')

</body>

</html>