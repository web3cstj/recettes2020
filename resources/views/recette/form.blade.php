<!-- /* Faire afficher l'article ici */ -->
<div>
    {{Form::label("id", "Id")}}
    {{Form::text("id")}}
</div>
<div>
    {{Form::label("titre", "Titre")}}
    {{Form::text("titre")}}
</div>
<div>
    {{Form::label("intro", "Intro")}}
    {{Form::text("intro")}}
</div>
<div>
    {{Form::label("noImage", "Numéro de l'image")}}
    {{Form::text("noImage")}}
</div>
<div>
    {{Form::label("legende", "Légende de l'image")}}
    {{Form::text("legende")}}
</div>
<div>
    {{Form::label("intro", "Intro")}}
    {{Form::text("intro")}}
</div>
<div>
    {{Form::label("description", "Description")}}
    {{Form::text("description")}}
</div>
<div>
    {{Form::label("ingredientsString", "Ingrédients")}}
    {{Form::textarea("ingredientsString")}}
</div>
<div>
    {{Form::label("instructionsString", "Instructions")}}
    {{Form::textarea("instructionsString")}}
</div>
