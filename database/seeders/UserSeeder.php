<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public $users = [
        ["id" => 1,"name" => "Daniel","lastname" => "Prados","email" => "dprados@cendrassos.net", "role" => "teacher", "phone" => "606 715 502"], 
        ["id" => 2,"name" => "Xavier","lastname" => "Vallejo","email" => "xvallejo@cendrassos.net","role" => "teacher","phone" => "672 112 335"], 
        ["id" => 3,"name" => "Josep Maria","lastname" => "Serrainat","email" => "jserrain@cendrassos.net","role" => "teacher","phone" => "662 225 115"], 
        ["id" => 4,"name" => "Josep Maria","lastname" => "Tolsa","email" => "jtolsa@cendrassos.net","role" => "teacher", "phone" => "664 350 024"], 
        ["id" => 5,"name" => "Angel","lastname" => "Bosch","email" => "abosch@cendrassos.net","role" => "teacher","phone" => "604 112 965"], 
        ["id" => 6,"name" => "Àlex","lastname" => "Aguilera Ullés","email" => "aaguilera@cendrassos.net","role" => "student","phone" => "600 216 357"], 
        ["id" => 7,"name" => "David Alejandro","lastname" => "Aguirre Carlier","email" => "daguirre@cendrassos.net","role" => "student","phone" => "601 226 874"], 
        ["id" => 8,"name" => "Zaytouny Hicham","lastname" => "Araid Ez","email" => "zaraid@cendrassos.net","role" => "student","phone" => "698 564 156"], 
        ["id" => 9,"name" => "Oriol","lastname" => "Bech Abad","email" => "obech@cendrassos.net","role" => "student","phone" => "611 156 102"], 
        ["id" => 10,"name" => "Ben Younes","lastname" => "Bouhtat Diba","email" => "bbouhtat@cendrassos.net","role" => "student","phone" => "600 556 241"], 
        ["id" => 11,"name" => "Mohamed","lastname" => "Bourarach Bourarach","email" => "mbourarach@cendrassos.net","role" => "student","phone" => "605 889 998"], 
        ["id" => 12,"name" => "Juan Carlos","lastname" => "Burria Puentedura","email" => "jburria@cendrassos.net","role" => "student","phone" => "715 125 885"], 
        ["id" => 13,"name" => "Kristhel Fernanda","lastname" => "Castro Meza","email" => "kcastro@cendrassos.net","role" => "student","phone" => "789 965 050"], 
        ["id" => 14,"name" => "Sergi","lastname" => "Cufi Ros","email" => "scufi@cendrassos.net","role" => "student","phone" => "702 265 451"], 
        ["id" => 15,"name" => "Alexandre","lastname" => "Gomez Gran","email" => "agomez@cendrassos.net","role" => "student","phone" => "699 965 150"], 
        ["id" => 16,"name" => "Juan José","lastname" => "Gomez Villegas","email" => "jgomez@cendrassos.net","role" => "student","phone" => "604 156 885"], 
        ["id" => 17,"name" => "Simon Eric","lastname" => "Kaufmann","email" => "skaufmann@cendrassos.net","role" => "student","phone" => "605 002 102"], 
        ["id" => 18,"name" => "Kirill","lastname" => "Lupenkov","email" => "klupenkov@cendrassos.net","role" => "student","phone" => "600 854 152"], 
        ["id" => 19,"name" => "Jorge Luis","lastname" => "Martinez Bermúdez","email" => "jmartinez@cendrassos.net","role" => "student","phone" => "515 657 451"], 
        ["id" => 20,"name" => "Eimantas","lastname" => "Milkintas","email" => "emilkintas@cendrassos.net","role" => "student","phone" => "502 125 985"], 
        ["id" => 21,"name" => "Eric","lastname" => "Moreno Pou","email" => "emoreno@cendrassos.net","role" => "student","phone" => "608 896 541"], 
        ["id" => 22,"name" => "Adrián","lastname" => "Pons Luengo","email" => "apons@cendrassos.net","role" => "student","phone" => "604 551 111"], 
        ["id" => 23,"name" => "Iker","lastname" => "Ramajo Sancho","email" => "iramajo@cendrassos.net","role" => "student","phone" => "609 998 541"], 
        ["id" => 24,"name" => "Àlex Ramon","lastname" => "Martinez","email" => "aramon@cendrassos.net","role" => "student","phone" => "611 216 489"], 
        ["id" => 25,"name" => "Bernat","lastname" => "Ruiz Cros","email" => "bruiz@cendrassos.net","role" => "student","phone" => "554 112 350"], 
        ["id" => 26,"name" => "Eduard","lastname" => "Sellas Lleo","email" => "esellas@cendrassos.net","role" => "student","phone" => "502 021 115"], 
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->users as $items) {
            DB::table('users')->insert([
                'id' => $items["id"], 
                'name' => $items["name"], 
                'lastname' => $items["lastname"], 
                'email' => $items["email"], 
                'password' => Hash::make('12345678'), 
                'remember_token' => Str::random(10), 
                'role' => $items["role"], 
                'phone' => $items["phone"], 
            ]);
            if ($items["role"] === "teacher") {
                DB::table('teachers')->insert([
                    'user_id' => $items["id"], 
                ]);
            } elseif ($items["role"] === "student") {
                DB::table('students')->insert([
                    'user_id' => $items["id"], 
                ]);
            }
        }
    }
}
