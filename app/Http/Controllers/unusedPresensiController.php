<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PresensiPackageRequest;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PresensiController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $items = Presensi::all();

        return view('pages.user.presensi',['items' => $items]);
    }
}
