@extends('layouts.app')

@section('content')

    <div class="container">
        
            <h1 class="title-pg">
                    Meus Anúncios:
            </h1>

        <hr>

        @can('incluir', $anuncios) 
            <a href="{{route('anuncios.create')}}" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-plus"></span> Cadastrar</a>
        @endcan
   
        <hr>
        
        @forelse($anuncios as $anuncio)
                    
                @can('visualizar-anuncio', $anuncio) 
                <h2>Descrição: {{$anuncio->nome}}</h2>
                        <b>Responsável pelo Anúncio: {{$anuncio->user->name}}</br>
                @endcan     
                
                @can('editar', $anuncio) 
                            <a href="{{route('anuncios.edit',$anuncio->id)}}">Editar - </a>
                @endcan

                @can('excluir', $anuncio)
                    <a href="{{route('anuncios.show',$anuncio->id)}}">Excluir</a>
                @endcan
                <hr>
            @empty
                <hr>
                <p>Nada Cadastrado<p>
            @endforelse
    </div>
@endsection
