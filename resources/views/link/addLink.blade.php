@extends('../master')

@section('titre')
   Ajout de liens
@endsection

@section('titrePage')
    <h1>Ajouter des liens sur la page</h1>
    <!--<a href="/">Retourner à la page racine</a>-->
@endsection

@section('contenu')
    <form method="post" action="{{route('valideLink')}}">
        <p>


            <label for="nom">Nom</label> :
            <input type="text" name="nom" id="nom" placeholder="Tapez votre nom" />

            <label for="lien">Lien</label> :
            <input type="url" name="lien" id="lien" placeholder="Tapez votre lien" />

            <label for="description">description</label> :
            <textarea type="text" name="description" id="description" placeholder="Tapez votre description" /> </textarea>

            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" value="Ajouter" />
        </p>
    </form>
@endsection