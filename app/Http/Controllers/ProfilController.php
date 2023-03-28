<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index($id = 0) {
        if($id != 'ikmal' && $id != 'arainal'){
            return view('error', ['id'=>$id]);
        } else if ($id == 'ikmal'){
            return view('profilIkmal');
        } else {
            return view('profilArainal');
        }
    }
}
