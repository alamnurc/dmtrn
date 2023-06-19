<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ProfilRequest;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index(Request $request)
    // {
    //     return view('pages.user.profil');
    // }
    
    // public function index()
    // {
    //     $items = Profil::all();

    //     return view('pages.user.profil',['items' => $items]);

    // }

    public function index()
    {
        $users = User::all();

        return view('pages.user.profil',['items' => $users]);
    }


    public function show(string $id)
    {
        $items = Profil::all();

        return view('pages.user.profil',['items' => $items]);

    }

}
