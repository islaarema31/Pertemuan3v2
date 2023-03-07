<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
    public function index($id = 0) {
        if($id != 'isla' && $id != 'abhel'){
            return view('error', ['id'=>$id]);
        } else if ($id == 'isla'){
            return view('layouts.isla');
        } else {
            return view('layouts.abhel');
        }
    }
}
