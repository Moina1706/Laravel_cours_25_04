@extends('layouts.main')

@section('main')
<h1>{{$titre}}</h1>
    <p>This is my body content.</p>
    <ul>
        @foreach ($livres as $cle=> $livre)
   
        <li>
        <a href="/livres/{{$livre->id}}">:{{$livre->titre}}({{$livre->auteur->nom}} {{$livre->auteur->prenom}})</a></li>
    @endforeach
</ul>
@endsection