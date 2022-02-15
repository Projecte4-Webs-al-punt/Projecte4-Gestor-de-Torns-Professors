<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function doubt()
    {
        return $this->hasMany(Doubt::class);
    }

    public function classGroup()
    {
        return $this->belongsToMany(ClassGroup::class)->withPivot("tutor");
    }

    public function subject()
    {
        return $this->belongsToMany(Subject::class);
    }
}
