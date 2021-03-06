<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassGroup extends Model
{
    use HasFactory;

    public function teacher()
    {
        return $this->belongsToMany(Teacher::class)->withPivot("tutor");
    }

    public function students()
    {
        return $this->belongsToMany(Student::class)->withPivot("tutorship", "delegate");
    }
}

/*
Si es vol Posar un nom personalitzat a la taula pivot s'ha de posar en els dos extrems de la relacio. Exemple:

    - return $this->belongsToMany(Student::class, "nomPresonalitzat")->withPivot("tutorship", "delegate");

*/
