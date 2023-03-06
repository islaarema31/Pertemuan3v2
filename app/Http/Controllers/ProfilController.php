<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function isla()
    {
        return view('layouts.isla');
    }
    public function abhel()
    {
        return view('layouts.abhel');
    }
}
