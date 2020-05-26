@extends("interface.index")
@section("contenu")
<!-- /* Faire afficher l'article ici */ -->
<article>
    <header>
        <h1>Liste des recettes</h1>
    </header>
    <table class="categories" border="1">
    @foreach($recettes as $recette)
        <tr>
            <td>
                <a href="{{action('RecetteController@edit', $recette)}}">{{$recette->titre}}</a>
            </td>
            <td>
                <a href="{{action('RecetteController@edit', $recette)}}">Modifier</a>
            </td>
            <td>
                <a href="{{action('RecetteController@delete', $recette)}}">Supprimer</a>
            </td>
        </tr>
    @endforeach
        <tr>
            <td></td>
            <td colspan="2">
                <a href="{{action('RecetteController@create')}}">Ajouter une recette</a>
            </td>
        </tr>
    </table>
</article>
@endsection
