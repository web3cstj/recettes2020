<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    static public function fake() {
        $f = \Faker\Factory::create("fr_CA");
        $resultat = new self();
        $resultat->id = $f->randomNumber(5);
        $resultat->titre = $f->realText(30);
        $resultat->intro = $f->realText(120);
        $resultat->noImage = $f->numberBetween(0, 1000);
        // $resultat->image = "https://i.picsum.photos/id/{$noImage}/400/284.jpg";
        $resultat->legende = $f->realText(60);
        $resultat->description = $f->realText(300);
        $ingredients = [];
        $nbIngredients = rand(5,15);
        for($i = 0; $i < $nbIngredients; $i += 1) {
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
}
