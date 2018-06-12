<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\painel\Anuncio;

class anunciosIndexController extends Controller
{
    private $anuncio; 
           
    public function __construct(Anuncio $anuncio) {
        $this->anuncio = $anuncio;
    }
    
    public function index()
    {  
       //dd($this->anuncio->all());
       $anuncios = $this->anuncio->all();
       //return 'meus anuncios';
       return view('welcome', compact('anuncios'));
    }

}
