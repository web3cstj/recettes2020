@extends("interface.index")
@section("contenu")
<!-- /* Faire afficher l'article ici */ -->
<article>
    <header>
        <h1>Liste des recettes</h1>
    </header>
    <ul class="categories">
    @foreach($recettes as $recette)
        <li><img src="https://i.picsum.photos/id/{{$recette->noImage}}/64/64.jpg"/><a href="{{action('RecetteController@show', $recette)}}">{{$recette->titre}}</a></li>
    @endforeach
    </ul>
</article>
@endsection
