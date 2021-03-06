<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use function foo\func;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // admin higher level permissions
        Gate::define('edit-users', function ($user){
            return $user->hasRole('admin');
        });

        Gate::define('delete-users', function ($user){
            return $user->hasRole('admin');
        });

        Gate::define('manage-users', function ($user){
            return $user->hasAnyRoles(['admin', 'manager']);
        });

        Gate::define('publish-media-content', function ($user){
            return $user->hasRole(['admin', 'manager', 'author', 'member']);
        });

        Gate::define('read-media-content', function ($user){
            return $user->hasRole(['admin', 'manager', 'author', 'member', 'user']);
        });

        // admin lower level permissions
        //Gate::define('edit-users', function ($user){
        //    return $user->hasRole('admin');
        //});
        // lower level permissions

        //
    }
}
