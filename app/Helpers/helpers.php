
<?php

use App\Models\Service;

if (!function_exists('getAllServices')) {
   function getAllServices()
   {
      return Service::all();
   }
}

if (!function_exists('getServiceBySlug')) {
   function getServiceBySlug($slug)
   {
      return Service::where('slug', $slug)->first();
   }
}
