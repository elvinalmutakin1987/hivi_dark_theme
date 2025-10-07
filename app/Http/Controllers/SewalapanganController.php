<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SewalapanganController extends Controller
{
    public function index()
    {
        return view('sewa-lapangan.index');
    }
}
