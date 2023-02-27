<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){

        $siswas = Siswa::all();
        return view('Dashboard', compact('siswas'));
    }

    public function create(){

        $siswas = Siswa::all();
        return view('Dashboard', compact('siswas'));
    }
}
