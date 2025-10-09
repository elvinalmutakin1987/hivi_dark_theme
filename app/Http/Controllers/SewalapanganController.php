<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class SewalapanganController extends Controller
{
    public function index(Request $request)
    {
        $kota = $request->kota;
        $sport = $request->sport;
        $tanggal = $request->tanggal;
        $venue = Venue::where('city', $kota)->paginate(10)->appends(request()->query());
        return view('sewa-lapangan.index', compact([
            'kota',
            'sport',
            'tanggal',
            'venue'
        ]));
    }
}
