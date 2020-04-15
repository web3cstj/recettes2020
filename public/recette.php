<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page affiche une auto en fonction de la marque et de l'adresse fournis dans l'adresse
- Inclure le fichier donnees.inc.php contenant les données des recettes (crée la variable $donnees)
- Inclure le fichier de la class Cuisine
- Commencer par le fichier Cuisine.php

- Cette page s'attend à recevoir de l'adresse les données "nomMarque" et "nomModele". Il faut donc récupérer ces données.
- S'il manque une de ces deux données dans l'adresse, on DOIT retourner à la page index.php
- Récupérer la recette correspondante
- Si la recette ne se trouve pas dans la variable $donnees, on DOIT retourner à la page index.php
=========================================================================
*/
?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="recettes.css" />
	<!-- /* Faire afficher le titre de la recette ici (dans un title); */ -->
	<title>Le sucre à la crème</title>
</head>

<body>
	<div class="interface">
		<!-- /* Inclure l'entête ici */ -->
		<header>
			<h1><a href="index.php">Les recettes <span>extrêmes</span></a></h1>
		</header>
		<!-- /* Faire afficher le fil d'Ariane ici */ -->
		<nav id="ariane">
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="categorie.php?nomCategorie=Desserts">Desserts</a></li>
				<li><span>Le sucre à la crème</span></li>
			</ul>
		</nav>
		<section class="body">
			<!-- /* Faire afficher l'article ici */ -->
			<article>
				<header>
					<h1>Le sucre à la crème</h1></header>
				<p class="intro">Je pourrais en faire toute l'année... Mais non !.. Je n'en fais que pour Noël... C'est la sucrerie la meilleure que je connaisse... c'est... n'ayons pas peur des mots... jouissif pour le palais... et c'est la gourmandise, qui pour moi, représente le mieux Noël... et le Québec !</p>
				<figure class="photoprincipale"><img src="https://picsum.photos/400/284" alt="Le meilleur des sucres à la crème" title="Le meilleur des sucres à la crème">
					<figcaption>Le meilleur des sucres à la crème</figcaption>
				</figure>
				<p>Il faut que le sucre à la crème se tienne mais qu il soit fondant dans la bouche.</p>
				<p>Si vous l'avez trop cuit, il sera cassant et grumeleux..et c'est carrément moins bon !</p>
				<p>Il existe beaucoup de variantes et de recettes, mais pour mes proches et moi même, cette recette est la meilleure.</p>
				<h2>Note importante</h2>
				<p>Avant de commencer, je vous conseille vivement de tarer votre thermomètre à bonbons.</p>
				<p>Faire bouillir de l'eau et y plonger le thermomètre. Si il est bien "réglé" il devrait être à 100 C....si ce n'est pas le cas, ajouter ou diminuer en fonction de température demandée pour obtenir un sucre à la crème parfait.</p>
				<h2>Ingrédients</h2>
				<ul class="ingredients">
					<li><span class="quantite">2</span><span class="unite">tasses</span><span class="ingredient">creme 35%</span></li>
					<li><span class="quantite">2<span class="fraction"><sup>1</sup>/<sub>4</sub></span></span><span class="unite">tasses</span><span class="ingredient">cassonade</span></li>
					<li><span class="quantite">2</span><span class="unite">c à soupe</span><span class="ingredient">sucre</span></li>
					<li><span class="quantite">2</span><span class="unite">c à soupe</span><span class="ingredient">sirop de maïs ( peut être remplacé par du sirop de canne à sucre ou du sirop d'érable )</span></li>
				</ul>
				<h2>Instructions</h2>
				<ol class="instructions">
					<li>Dans une casserole, mélanger tous les ingrédients.</li>
					<li>Porter à ébullition et cuire a feu vif environ 20 mn, ou jusqu'à ce qu'un thermomètre à bonbons indique 116 C (241 F ).</li>
					<li>Retirer du feu et laissez tiédir 10 mn.</li>
					<li>Fouetter à vitesse élevée pendant 5 mn avec le batteur électrique. (je jauge à l'oeil..ça épaissit )</li>
					<li>Étendre dans le moule carré, chemisé, de 8" ( 20 cm ).</li>
					<li>Couvrir et laisser refroidir plusieurs heures.</li>
					<li>Découper en carres et servir.</li>
				</ol>
			</article>
		</section>
		<!-- /* Inclure le pied de page ici */ -->
		<footer>
			<p>Travail fait par Rita Raté dans le cadre du cours "<a target="_blank" href="http://prof-tim.cstj.qc.ca/cours/web3">Intégration Web III</a>".</p>
		</footer>
	</div>
</body>

</html>
