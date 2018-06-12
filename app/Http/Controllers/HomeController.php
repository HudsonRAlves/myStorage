<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anuncio;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Anuncio $anuncio)
    {
        
        $anuncios = $anuncio->all();
        return view('home', compact('anuncios'));

    }
    
    public function update($idAnuncio){
         
        $anuncio = Anuncio::find($idAnuncio);
        
        //$this->authorize('update-anuncio', $anuncio);
        
        if (Gate::denies('visualizar-anuncio', $anuncio)){
            abort(403,'Nao autorizado');
        };
        
        return view('visualizar-anuncio', compact('anuncio'));
    }
    
    public function rolesPermissions(){
        //echo auth()->user()->name;
        $nameUser = auth()->user()->name;
        
        echo "<h1>$nameUser</h1>";
        
        foreach(auth()->user()->roles as $role){
            echo "<b>$role->name-></b> ";
                
            $permissions = $role->permissions;
            foreach ($permissions as $permission){
                echo "$permission->name ,";
            }
            
            echo '<hr>';
        }
    }
}
