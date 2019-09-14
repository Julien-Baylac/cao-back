<?php

use Illuminate\Database\Seeder;

class TypesBirdhousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types_birdhouses')->insert([
            [
                'name' => 'restaurant',
                'icon' => 'restaurant.png',
            ],
            [
                'name' => 'bar',
                'icon' => 'bar.png',
            ],
            [
                'name' => 'jeux',
                'icon' => 'jeux.png',
            ],
            [
                'name' => 'coiffeur',
                'icon' => 'coiffeur.png',
            ],
            [
                'name' => 'cinéma',
                'icon' => 'cinema.png',
            ],
            [
                'name' => 'crêche',
                'icon' => 'creche.png',
            ],
            [
                'name' => 'magasin de vétement',
                'icon' => 'magasin_vetement.png',
            ],
        ]);
    }
}
