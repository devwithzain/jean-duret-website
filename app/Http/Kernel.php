<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
   protected $middlewareGroups = [
      'web' => [
         \Illuminate\Cookie\Middleware\EncryptCookies::class,
         \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
         \Illuminate\Session\Middleware\StartSession::class,
      ],
   ];
   protected $routeMiddleware = [
      'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
      'admin' => \App\Http\Middleware\AdminMiddleware::class,
   ];
}