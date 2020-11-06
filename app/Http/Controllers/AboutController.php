<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', ['NIM' => '1931710040'], ['Nama' => 'Gantangsanra Pradipta P.K']);
    }
}
