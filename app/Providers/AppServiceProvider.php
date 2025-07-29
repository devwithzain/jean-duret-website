<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\ResetPassword;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        require_once app_path('Helpers/helpers.php');
    }
    public function boot(): void
    {
        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url') . "/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });
        View::composer('*', function ($view) {
            try {
                $services = Service::all();
            } catch (\Throwable $e) {
                $services = collect();
            }
            $view->with('services', $services);
        });
    }
}
