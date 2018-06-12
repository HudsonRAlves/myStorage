@extends('layouts.app')

@section('content')
<div class="container">
 <h1>{{$anuncio->nome}}</h1>
 <b>Author: {{$anuncio->user->name}}</b>
</div>
@endsection
