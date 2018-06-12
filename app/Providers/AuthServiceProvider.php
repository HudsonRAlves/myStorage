<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Anuncio;
use App\User;
use App\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
       /* \App\anuncio::class => \App\Policies\AnuncioPolicy::class
        */
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
       
        Gate::define('visualizar-anuncio', function(User $user, Anuncio $anuncio){
            return $user->id == $anuncio->user_id;
       });
        
       $permissions = Permission::with('roles')->get();
       foreach ($permissions as $permission){
           Gate::define($permission->name, function(User $user) use ($permission){
                return $user->hasPermission($permission);
           });
       }
      
       Gate::before(function (User $user, $ability){
          if ($user->hasAnyRoles('Adm'))
           return true;
       });
    }
}
