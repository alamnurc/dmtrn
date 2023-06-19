<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RingkasIzinController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    public function index(Request $request)
    {
        $items = Izin::all();

        return view('pages.admin.ringkas-izin',['items' => $items]);
    }
}
