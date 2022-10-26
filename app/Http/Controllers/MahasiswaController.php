<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $req) {
        echo "Selamat datang di Mahasiswa Conttroller !";
    }
    public function create(Request $req) {
        return view('createMahasiswa');

    }
}