@extends('app')

@section('content')

<div class="container px-3 py-5">
    <h1>{{$post->titulo}}</h1>

    <hr>
    
    <p>
        {{$post->cuerpo}}
    </p>
    
</div>
@endsection