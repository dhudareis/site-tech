<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index() {
        return view('matricula');
    }

    public function create() {
        return view('matricula.create');
    }
}
