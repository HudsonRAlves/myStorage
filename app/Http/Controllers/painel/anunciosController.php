<?php

namespace App\Http\Controllers\painel;

use Illuminate\Http\Request;
use App\Http\Requests\painel\AnuncioFormRequest;
use App\Http\Controllers\Controller;

use App\Models\painel\Anuncio;
use Gate;

class anunciosController extends Controller
{
    private $anuncio; 
    private $totalPage = 10;
    
    public function __construct(Anuncio $anuncio) {
        $this->anuncio = $anuncio;     
        $this->middleware('auth');
    }
    
    public function index()
    {
       $title = 'Listagem dos Produtos'; 
        
       $anuncios = $this->anuncio->paginate($this->totalPage);
       
       return redirect()->route('home');
       //return 'teste';
    }

    public function create()
    {
        $title = 'Cadastrar Novo Anúncio';
        
        return view('painelanuncios.create-edit', compact('title'));
    }

    public function store(AnuncioFormRequest $request)
    {
        //dd($request->all());
        //dd($request->only(['name','number']));
        
        //Pega todos os dados do formulário
       
        $userId = auth()->user()->id;
        
        $dataForm = $request->all();
       
        //$dataForm['figura1']; 
        
        if ($request->hasFile('figura1') && $request->file('figura1')->isValid()){
                $upload = $request->file('figura1')->store('figuras');
                $dataForm['figura1'] = $upload; 
        }
        
        //$request->image->storeAs('imagens', $figura1);
        
        //Valida os dados
        //$this->validate($request, $this->anuncio->rules);
        
        $messages = [
            'nome.required' =>  'O campo nome é de preenchimento obrigatório!'
        ];
        
        $dataForm['user_id'] = $userId;
        
        
        //Faz o cadastro
        $insert= $this->anuncio->create($dataForm);
        
        if($insert) 
            return redirect()->route('home');
        else 
            return redirect()->back();
    }

    public function show($id)
    {
      
        $anuncio = $this->anuncio->find($id);
        
        $title = "Anuncio: {$anuncio->nome}";
        
        if (Gate::denies('visualizar', $anuncio)){
            abort(403,'Nao autorizado');
        };
        
        return view('painelanuncios.show', compact('anuncio','title', 'nameUser'));
    }

    public function edit($id)
    {
    //Recupera o produto pela seu id  
    $anuncio = $this->anuncio->find($id);
    
    $title = "Editando Anúncio Nº:$id";
        
    $categorys = ['standart','premium'];
    
    return view('painelanuncios.create-edit', compact('title', 'anuncio'));
    }
    
    public function update(AnuncioFormRequest $request, $id)
    {
        
       //Recupera todos os dados do formulario
       $dataForm = $request->all();
        
       //Recupera o item para editar
       $anuncio = $this->anuncio->find($id);
       
       //Alterar os itens
       $update = $anuncio->update($dataForm);
       
       //Verifica se realmente editou
       if ($update){
           return redirect()->route('home');
       } else{ 
           return redirect()->route('anuncios.edit', $id)->with(['errors'=>'Falha ao editar']);
       }
    }

    public function destroy($id)
    {
        $anuncio = $this->anuncio->find($id);
        $delete = $anuncio -> delete();
        
        if ($delete)
        {
            return redirect()->route('home');
        }
        else{ 
           return redirect()-route('anuncios.show', $id)->with(['errors'=>'Falha ao deletar.']);
        }
    }
    
    public function test(){
  
    }
}
