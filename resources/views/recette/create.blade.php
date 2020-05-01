@extends("interface.index")
@section("contenu")
<!-- /* Faire afficher l'article ici */ -->
<article>
	<header>
		<h1>Créer une recette</h1>
    </header>
    {{Form::model($recette)}}
        @include("recette.form")
        <div>{{Form::submit("Ajouter")}} {{Form::submit("Annuler", ["name"=>"annuler"])}}</div>
	{{Form::close()}}
    </article>
@endsection
