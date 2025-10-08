<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index(Request $request)
    {
        $sport = Sport::all();
        if ($request->term) {
            $sport = Sport::where('sport_name', 'like', '%' . $request->term . '%')->get();
        }
        return response([
            'success' => true,
            'message' => 'Data ditemukan',
            'data' => $sport
        ], 200);
    }
}
