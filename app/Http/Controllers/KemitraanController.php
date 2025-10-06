<?php

namespace App\Http\Controllers;

use App\Models\Registeration;
use Illuminate\Http\Request;

class KemitraanController extends Controller
{
    public function index()
    {
        return view('kemitraan.index');
    }

    public function daftar()
    {
        return view('kemitraan.daftar');
    }

    public function simpan_daftar(Request $request)
    {
        $data = $request->except(['_method', '_token']);
        Registeration::create($data);
        return view('kemitraan.thanks');
    }
}
