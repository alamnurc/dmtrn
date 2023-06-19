<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\IzinRequest;
use App\Models\Izin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IzinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {
    //     $items = Izin::all();

    //     return view('pages.user.izin',['items' => $items]);

    // }

    public function index()
    {

            // Retrieve the authenticated user
    $authenticatedUser = Auth::user();

    if ($authenticatedUser) {
        // Retrieve data for the authenticated user
        $izins = Izin::where('nama', $authenticatedUser->name)
        //-> ()
        ->get();

        echo $izins;
        $a = $authenticatedUser->name;
        echo $a;
        echo $authenticatedUser;

        // Pass the user data to the Blade view
        return view('pages.user.izin', compact('izins'));
    }

    

        // $izins = Izin::where('id', auth()->user()->id)->
        //     get();
        // // collection of todos

        // $izinsCompleted = Izin::where('id');
        // // dd($todos);
        // return view('pages.user.izin', compact('izins'));
    }


    public function create()
    {
        return view('pages.user.izin-create');
    }

    public function show(string $id)
    {
        $items = Izin::all();

        return view('pages.user.izin',['items' => $items]);

    }

    public function store(IzinRequest $request, Izin $izin)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);


        // $izin = Izin::create([
        //     'user_id'     => auth()->user()->id,
        // ]);

        Izin::create($data);
        return redirect()->route('izin');

    }

    public function destroy(Izin $items)

    {
        $items->delete();
        return redirect('/izin')->with('Izin berhasil dihapus.');
    }
}
