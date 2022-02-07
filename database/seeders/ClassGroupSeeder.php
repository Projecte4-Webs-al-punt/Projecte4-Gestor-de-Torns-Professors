<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassGroup;

class ClassGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classGroup = new ClassGroup;
        $classGroup->name = "2DAW";
        $classGroup->grade = "2DAW";

        $classGroup->save();
    }
}
