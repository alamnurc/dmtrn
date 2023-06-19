<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\TugasPackageRequest;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Tugas::all();

        return view('pages.user.tugas',['items' => $items]);
    }

    public function create()
    {
        return view('pages.user.tugas-create');
    }

    public function store(TugasPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Tugas::create($data);
        return redirect()->route('tugas');
    }

    public function destroy(Tugas $items)

    {
        // $tugas = \App\Models\Tugas::find($id);
        $items->delete();
        return redirect('/tugas')->with('Tugas berhasil dihapus.');

        // $item = Tugas::findOrFail($id);
        // $item->modelKeys();
        // return redirect()->route('tugas');
    }

    // public function delete($items){
    //     $tugas = \App\Models\Tugas::find($items);
    //     $tugas->delete();
    //     return redirect('/tugas')-> with ('Tugas berhasil dihapus');
    // }

    public function indexRingkas() //asal memberi nama method 'indexRIngkas'
    {
        //mengambil data dari table pegawai
        $tugas = DB::table('tugas')->paginate(15);

        //mengirim data pegawai ke view index
        return view('pages.admin.ringkas-rekap', ['tugas' => $tugas]);
    }

}
