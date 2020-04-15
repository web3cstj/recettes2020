<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="{{asset('recettes.css')}}" />
	<title>Liste des recettes</title>
</head>

<body>
	<div class="interface">
		@include("interface.header")
		@include("interface.ariane")
		<section class="body">
            @section("contenu")
            @show
		</section>
		@include("interface.footer")
	</div>
</body>

</html>
