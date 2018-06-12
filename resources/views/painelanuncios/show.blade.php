@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="title-pg">
            <a href="{{route('anuncios.index')}}">
                <span class="glyphicon glyphicon-fast-backward"></span>
            </a>
            Anuncio:
            <b>{{$anuncio->nome}}</b>
        </h1>

        

        <hr>

        @if (isset($errors) && count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>
        @endif

        {!!Form::open(['route' => ['anuncios.destroy', $anuncio->id],'method'=>'DELETE'])!!}
        {!!Form::submit("Deletar anuncio: $anuncio->nome",['class'=> 'btn btn-danger'])!!}
        {!!Form::close()!!}
    </div>
@endsection





