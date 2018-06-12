@extends('layouts.app')

@section('content')


<div class="container">
    <h1 class="title-pg">
        <a href="{{route('anuncios.index')}}"><span class="glyphicon glyphicon-fast-backward"></span></a>
        Gestão Anúncio: <b>{{$anuncio->nome or '(Novo)'}}</b>
    </h1>

    @if(isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    </div>
    @endif

    @if (isset($anuncio))
    <!--<form class="form" method="post" action="{{route('anuncios.update', $anuncio->id)}}">
    {!!method_field('PUT')!!}-->
    {!!Form::model($anuncio,['route' => ['anuncios.update',$anuncio->id],'class'=>'form', 'method'=>'put'])!!}
    @else
    <!--<form class="form" method="post" action="{{route('anuncios.store')}}">-->
    {!!Form::open(['route' => 'anuncios.store','class'=>'form', 'enctype'=>'multipart/form-data'])!!}
    @endif
                <!--{!!csrf_field()!!}-->
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Nome:</label>
                        <div class="col-md-6">
                            <div class="input-group">                            
                            {!! Form::text('nome',null,['class'=>'form-control','placeholder'=>'Nome:'])!!}
                            </div>
                        </div>
                </div>

     <!-- Search input-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="CEP">CEP <h11>*</h11></label>
                            <div class="col-md-4">
                                <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="{{$anuncio->cep or old('cep')}}" type="search" maxlength="8" pattern="[0-9]+$">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                            </div>                          
                        </div>

                        <!-- Prepended text-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Endereço</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="rua" name="rua" class="form-control" placeholder="" required="" type="text" value="{{$anuncio->rua or old('rua')}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Nº</label>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text" value="{{$anuncio->numero or old('numero') }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">        
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Complemento:</label>
                            <div class="col-md-5">
                                <input id="complemento" name="complemento" class="form-control" placeholder="Ex. Bloco, Apto" type="text" value="{{$anuncio->complemento or old('complemento') }}">
                                <input id="lat" name="lat" class="form-control" placeholder="" type="hidden" value="{{ old('lat') }}">
                                 <input id="lgn" name="lgn" class="form-control" placeholder="" type="hidden" value="{{ old('lgn') }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Bairro:</label>
                            <div class="col-md-6">
                                <div class="input-group">                                   
                                    <input id="bairro" name="bairro" class="form-control" placeholder="" required="" type="text" value="{{$anuncio->bairro or old('bairro') }}" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Cidade:</label>
                            <div class="col-md-6">
                                <div class="input-group">                                    
                                    <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  type="text" value="{{$anuncio->cidade or old('cidade') }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">UF:</label>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <input id="estado" name="estado" class="form-control" placeholder="" required="" type="text" value="{{$anuncio->estado or old('estado') }}">
                                </div>
                            </div>
                        </div>
    
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Anexar Figura 1:</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            {!!Form::file('figura1', ['class'=>'form-control', 'enctype'=>'multipart/form-data'])!!}
                            @if (isset($anuncio->figura1))
                             <img src="{{url('storage/'.$anuncio->figura1)}}" alt="{{$anuncio->nome}}" style="max-width: 100px;">
                             @endif
                        </div>
                    </div>    
                </div>
    
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Anexar Figura 2:</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            {!!Form::file('figura2', ['class'=>'form-control', 'enctype'=>'multipart/form-data'])!!}
                            @if (isset($anuncio->figura2))
                            <img src="{{url('storage/'.$anuncio->figura2)}}" alt="{{$anuncio->nome}}" style="max-width: 100px;">
                            @endif
                        </div>
                    </div>
                </div>  

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Anexar Figura 3:</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            {!!Form::file('figura3', ['class'=>'form-control', 'enctype'=>'multipart/form-data'])!!}
                            @if (isset($anuncio->figura3))
                            <img src="{{url('storage/'.$anuncio->figura3)}}" alt="{{$anuncio->nome}}" style="max-width: 100px;">
                            @endif 
                        </div>
                    </div>
                </div>  

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Anexar Figura 4:</label>
                         <div class="col-md-6">
                        <div class="input-group">
                            {!!Form::file('figura4', ['class'=>'form-control', 'enctype'=>'multipart/form-data'])!!}
                            @if (isset($anuncio->figura4))
                            <img src="{{url('storage/'.$anuncio->figura4)}}" alt="{{$anuncio->nome}}" style="max-width: 100px;">
                            @endif 
                        </div>
                    </div>
                </div>  
      
                <div class="form-group row mb-0">
                    <div class="col-md-4 offset-md-6">
                    <!--<button class="btn btn-primary">Enviar</button>-->
                    {!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!}

                    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">
                        Cancelar
                    </button>
                    </div>
                </div>

    {!!Form::close()!!}
    

<script src="{{url("/js/validacaoCadastroUsuarios.js")}}"></script>

@endsection