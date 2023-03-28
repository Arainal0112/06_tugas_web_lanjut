<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public static function getBySlug($slug)
    {
        return Student::where([
            'slug' => $slug,
        ])->first();
    }
}
