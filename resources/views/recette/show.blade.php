@extends("interface.index")
@section("contenu")
<!-- /* Faire afficher l'article ici */ -->
<article>
	<header>
		<h1>{{$recette->titre}}</h1></header>
	<p class="intro">{{$recette->intro}}</p>
	<figure class="photoprincipale"><img src="https://picsum.photos/400/284" alt="{{$recette->legende}}" title="Le meilleur des sucres à la crème">
		<figcaption>{{$recette->legende}}</figcaption>
	</figure>
    {{$recette->description}}
	<h2>Ingrédients</h2>
	<ul class="ingredients">
    @foreach($recette->ingredients as $ing)
        <li><span class="quantite">{{$ing->quantite}}</span><span class="unite">{{$ing->unite}}</span><span class="ingredient">{{$ing->ingredient}}</span></li>
    @endforeach
	</ul>
	<h2>Instructions</h2>
	<ol class="instructions">
    @foreach($recette->instructions as $instr)
        <li>{{$instr}}</li>
    @endforeach
    </ol>
</article>
@endsection