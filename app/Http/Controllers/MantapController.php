<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantapController extends Controller
{
    // Compact
    // public function index(){
    //     $arrMahasiswa = ['Nicole', 'Glen', 'Natahlie', 'Devin'];
    //     return view('mantap', compact('arrMahasiswa'));
    // }

    // With
    public function index(){
        $arrMahasiswa = ['Nicole', 'Glen', 'Natahlie', 'Devin'];
        return view('mantap') -> with('mhs', $arrMahasiswa);
    }
}
