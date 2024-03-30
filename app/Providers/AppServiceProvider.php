<?php

namespace App\Providers;

use App\Http\Controllers\StudentController;
use App\Models\Message;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $user_id = Auth::user()->id;
                $message = Message::where('user_id', $user_id)
                                    ->where('status',false)
                                    ->get();
                $view->with('message', $message);
            }
        });
    }
}
