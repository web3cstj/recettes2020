@if(count($errors) > 0)
<div style="color:red; font-weight:bold">Veuillez corriger les erreurs dans le formulaire.</div>
@endif
<div>
    {{Form::label("titre", "Titre")}}
    {{Form::text("titre")}}
    @error("titre")
    <span style="color:red;">{{$errors->first("titre")}}</span>
    @enderror
</div>
<div>
    {{Form::label("intro", "Intro")}}
    {{Form::textarea("intro")}}
    @error("intro")
    <span style="color:red;">{{$errors->first("intro")}}</span>
    @enderror
</div>
<div>
    {{Form::label("noImage", "Numéro de l'image")}}
    {{Form::text("noImage")}}
    @error("noImage")
    <span style="color:red;">{{$errors->first("noImage")}}</span>
    @enderror
</div>
<div>
    {{Form::label("legende", "Légende de l'image")}}
    {{Form::text("legende")}}
    @error("legende")
    <span style="color:red;">{{$errors->first("legende")}}</span>
    @enderror
</div>
<div>
    {{Form::label("description", "Description")}}
    {{Form::textarea("description")}}
    @error("description")
    <span style="color:red;">{{$errors->first("description")}}</span>
    @enderror
</div>
<div>
    {{Form::label("ingredientsString", "Ingrédients")}}
    {{Form::textarea("ingredientsString", null, ["style"=>"white-space:pre"])}}
    @error("ingredientsString")
    <span style="color:red;">{{$errors->first("ingredientsString")}}</span>
    @enderror
</div>
<div>
    {{Form::label("instructionsString", "Instructions")}}
    {{Form::textarea("instructionsString", null, ["style"=>"white-space:pre"])}}
    @error("instructionsString")
    <span style="color:red;">{{$errors->first("instructionsString")}}</span>
    @enderror
</div>
