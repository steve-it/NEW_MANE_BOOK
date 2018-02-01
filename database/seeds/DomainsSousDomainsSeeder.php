<?php

use App\Domaine;
use App\SousDomaine;
use Illuminate\Database\Seeder;

class DomainsSousDomainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domaines = [
            [
                'parent'   => ['id' => 1, 'NomDomaines' => 'Economie'],
                'children' => [
                    ['id'=>1, 'domaines_id' => 1, 'NomSousDomaines' => 'Capitalisme'],
                    ['id'=>2, 'domaines_id' => 1, 'NomSousDomaines' => 'Communisme'],
                ]
            ],
            [
                'parent'   => ['id' => 2, 'NomDomaines' => 'Politique'],
                'children' => [
                    ['id'=>3, 'domaines_id' => 2, 'NomSousDomaines' => 'Geo-Polique'],
                    ['id'=>4, 'domaines_id' => 2, 'NomSousDomaines' => 'Science Politique'],
                ]
            ],
            [
                'parent'   => ['id' => 3, 'NomDomaines' => 'Administration'],
                'children' => [
                    ['id'=>5, 'domaines_id' => 3, 'NomSousDomaines' => 'Administration du travail'],
                    ['id'=>6, 'domaines_id' => 3, 'NomSousDomaines' => 'Administration parlementaire'],
                ]
            ],
        ];

        foreach ($domaines as $domaine) {
            Domaine::create($domaine['parent']);

            foreach ($domaine['children'] as $sousDomaine) {
                SousDomaine::create($sousDomaine);
            }
        }
    }
}
