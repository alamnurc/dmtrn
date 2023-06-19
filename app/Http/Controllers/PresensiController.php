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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presensis = Presensi::all();

        return view('pages.user.presensi', ['items' => $presensis]);
        // return view('pages.user.presensi')->with('presensis', $presensis);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user.presensi-create');
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(PresensiPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Presensi::create($data);
        return redirect()->route('presensi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $items = Presensi::all();

        return view('pages.user.presensi',['items' => $items]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
