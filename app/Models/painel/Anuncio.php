<?php

namespace App\Models\painel;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    //Campos que o usuario poderá preencher
    protected $fillable = [
            'id',
            'nome',
            'cep',
            'rua',
            'numero',
            'complemento',
            'bairro',
            'cidade',
            'estado',
            'lat',
            'lgn',
            'figura1',
            'figura2',
            'figura3',
            'figura4',
            'user_id'
    ];
    
    //Campos que o usuario NÂO poderá preencher
    //protected  $guarded = ['id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
