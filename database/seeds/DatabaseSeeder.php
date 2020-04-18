<?php

use Illuminate\Database\Seeder;
use App\Recette;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i += 1) {
            $user = Recette::fake();
            $user->save();
        }
    }
}
