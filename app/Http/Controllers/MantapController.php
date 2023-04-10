<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantapController extends Controller
{
    //
    public function index(){
        $arrMahasiswa = ['Nicole', 'Glen', 'Natahlie', 'Devin'];
        return view('mantap', compact('arrMahasiswa'));
    }
}
