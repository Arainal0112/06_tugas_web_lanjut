<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sidebar extends Component
{
    public $dashboard;
    public $profil;
    public $ikmal;
    public $arainal;
    public $pengalaman;


    public function __construct($dashboard, $profil, $ikmal, $arainal, $pengalaman)
    {
        $this->dashboard = $dashboard;
        $this->profil = $profil;
        $this->ikmal = $ikmal;
        $this->arainal = $arainal;
        $this->pengalaman = $pengalaman;
        
    }


    public function render()
    {
        return view('components.sidebar');
    }
}
