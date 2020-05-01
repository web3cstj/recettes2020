<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $fillable = [
        "id",
        "titre",
        "intro",
        "noImage",
        "legende",
        "description",
        "ingredientsString",
        "instructionsString",
    ];

    static public function fake() {
        $f = \Faker\Factory::create("fr_CA");
        $resultat = new self();
        $resultat->id = $f->randomNumber(5);
        $resultat->titre = $f->realText(30);
        $resultat->intro = $f->realText(120);
        $resultat->noImage = $f->numberBetween(0, 900);
        // $resultat->image = "https://i.picsum.photos/id/{$noImage}/400/284.jpg";
        $resultat->legende = $f->realText(60);
        $resultat->description = $f->realText(300);
        $ingredients = [];
        $nbIngredients = rand(5,15);
        for($i = 0; $i < $nbIngredients; $i += 1) {
            $ingr = [];
            $ingr['quantite'] = rand(1, 10)/4;
            $ingr['unite'] = $f->randomElement(["c. à thé", "c. à soupe", "tasses"]);
            $ingr['ingredient'] = $f->catchPhrase();
            $ingredients[] = $ingr;
        }
        $resultat->ingredients = \json_encode($ingredients);
        $instructions = [];
        $nbInstructions = rand(5,15);
        for($i = 0; $i < $nbInstructions; $i += 1) {
            $instructions[] = $f->sentence(12, true);
        }
        $resultat->instructions = \json_encode($instructions);
        return $resultat;
    }
    public function getIngredientsArrayAttribute() {
        return \json_decode($this->ingredients);
    }
    public function setIngredientsArrayAttribute($val) {
        $this->ingredients = \json_encode($val);
    }
    public function getInstructionsArrayAttribute() {
        return \json_decode($this->instructions);
    }
    public function setInstructionsArrayAttribute($val) {
        $this->instructions = \json_encode($val);
    }

    public function getIngredientsStringAttribute() {
        $resultat = [];
        $ingredients = $this->getIngredientsArrayAttribute();
        foreach($ingredients as $ingredient) {
            $ingr = get_object_vars($ingredient);
            $ingr = implode('|', $ingr);
            $resultat[] = $ingr;
        }
        $resultat = implode("\r\n", $resultat);
        return $resultat;
    }
    public function setIngredientsStringAttribute($val) {
        $resultat = [];
        $ingredients = explode("\r\n", $val);
        foreach($ingredients as $ingredient) {
            $ingredient = explode("|", $ingredient);
            $ingredient = array_combine(['quantite', 'unite', 'ingredient'], $ingredient);
            $resultat[] = $ingredient;
        }
        $this->setIngredientsArrayAttribute($resultat);
    }
    public function getInstructionsStringAttribute() {
        $resultat = $this->getInstructionsArrayAttribute();
        $resultat = implode("\r\n", $resultat);
        return $resultat;
    }
    public function setInstructionsStringAttribute($val) {
        $instructions = explode("\r\n", $val);
        $this->setInstructionsArrayAttribute($instructions);
    }
}
