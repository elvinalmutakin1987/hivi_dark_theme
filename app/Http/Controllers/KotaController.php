<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index(Request $request)
    {
        $regency = Regency::limit(15)->get();
        if ($request->term) {
            $regency = Regency::where('name', 'like', '%' . $request->term . '%')->limit(15)->get();
        }
        $data = $regency->pluck('name');
        return response([
            'success' => true,
            'message' => 'Data ditemukan',
            'data' => $regency
        ], 200);
    }
}
