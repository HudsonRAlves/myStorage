<?php

namespace App\Policies;

use App\User;
use App\anuncio;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnuncioPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
//    public function updateAnuncio(User $user, Anuncio $anuncio){
//        return $user->id == $anuncio->user_id;
//    }
    
 
}
