<?php

namespace App\Providers;

use App\Models\User;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('isAdmin', function (User $user) {
            return $user->role === 'admin';
        });
        Gate::define('view-profile', function (User $user, $profileUser) {
            return $user->id === $profileUser;
        });
        Gate::define('update-post', function (User $user, $targetuser) {
            return $user->id === $targetuser;
        });
        Gate::define('delete-post', function (User $user, $targetuser) {
            return $user->id === $targetuser;
        });

        // Gate::before(function (User $user) {
        //     echo "Before Gate";
        // });
        // Gate::after(function (User $user) {
        //     echo "After Gate";
        // });
    }
}
