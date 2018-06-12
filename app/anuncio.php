<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anuncio extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
