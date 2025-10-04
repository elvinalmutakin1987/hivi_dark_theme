<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KetentuanController extends Controller
{
    public function index()
    {
        return view('ketentuan.index');
    }
}
