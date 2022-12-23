<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Home()
    {
        return view('home/index');
    }

    public function gis()
    {
        return view('gis');
    }


}

