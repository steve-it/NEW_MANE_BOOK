<?php

use App\Categorie;
use Illuminate\Database\Seeder;

class DocumentsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [
                    ['id' => 1, 'libelle' => 'Memoires'],
                    ['id' => 2, 'libelle' => 'Revues et Periodiques'],
                    ['id' => 3, 'libelle' => 'Textes et Decrets'],
                    ['id' => 4, 'libelle' => 'Livres']
                ];
        foreach ($cats as $cat) {
            Categorie::create($cat);
        }
    }
}
