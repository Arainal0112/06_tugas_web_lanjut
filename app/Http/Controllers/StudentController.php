<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index($slug = 0) {
        if($slug != 'ikmal' && $slug != 'arainal'){
            return view('error', ['id'=>$slug]);
        } else if ($slug == 'ikmal'){
            return view('profilIkmal', ['student' => Student::getBySlug($slug)]);
        } else {
            return view('profilArainal', ['student' => Student::getBySlug($slug)]);
        }
    }
}
