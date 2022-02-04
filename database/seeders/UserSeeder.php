<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public $users = [
        ["name" => "dprados", "email" => "dprados@cendrassos.net", "firstname" => "Daniel", "lastname" => "Prados", "role" => "teacher", "telefon" => "606 715 502"], 
        ["name" => "xvallejo", "email" => "xvallejo@cendrassos.net", "firstname" => "Xavier", "lastname" => "Vallejo", "role" => "teacher", "telefon" => "672 112 335"], 
        ["name" => "jserrainat", "email" => "jserrainat@cendrassos.net", "firstname" => "Josep Maria", "lastname" => "Serrainat", "role" => "teacher", "telefon" => "662 225 115"], 
        ["name" => "jtolsa", "email" => "jtolsa@cendrassos.net", "firstname" => "Josep Maria", "lastname" => "Tolsa", "role" => "teacher", "telefon" => "664 350 024"], 
        ["name" => "abosch", "email" => "abosch@cendrassos.net", "firstname" => "Angel", "lastname" => "Bosch", "role" => "teacher", "telefon" => "604 112 965"], 
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
