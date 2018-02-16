<?php
/*__rester vrai__*/
 use Illuminate\Database\Seeder; class DatabaseSeeder extends Seeder { public function run() { $this->call(DocumentsTypeSeeder::class); $this->call(DomainsSousDomainsSeeder::class); } }
