@extends('../master')

@section('titre')
    Liste des liens
@endsection

@section('titrePage')
    <h1>Liste des liens de la page</h1>
    <ul>
    @foreach($links as $link)
        <li>{{$link->nom}} -- <a href="{{$link->url}}">{{$link->url}}</a></li>
    @endforeach
    </ul>
@endsection

