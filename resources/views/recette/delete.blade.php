@extends("interface.index")
@section("contenu")
<!-- /* Faire afficher l'article ici */ -->
<article>
	<header>
		<h1>Supprimer une recette</h1>
    </header>
    {{Form::model($recette)}}
        <h2>Voulez-vous vraimment supprimer "{{$recette->titre}}"</h2>
        <div>{{Form::submit("Oui")}} {{Form::submit("Non", ["name"=>"annuler"])}}</div>
	{{Form::close()}}
    </article>
@endsection
