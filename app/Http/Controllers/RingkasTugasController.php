<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RingkasTugasController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    public function index()
    {
        $items = Tugas::all();

        return view('pages.admin.ringkas-rekap',['items' => $items]);
    }
}
