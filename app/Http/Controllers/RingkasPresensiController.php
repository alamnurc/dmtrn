<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RingkasPresensiController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    public function index(Request $request)
    {
        $items = Presensi::all();

        return view('pages.admin.ringkas-presensi',['items' => $items]);
    }
}
