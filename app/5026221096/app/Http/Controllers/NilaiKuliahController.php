<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index(Request $request) {
        $nilaikuliah = DB::table('nilaikuliah')->get();

		return view('indexNilai',['nilaikuliah' => $nilaikuliah]);
    }

    public function tambah(Request $request) {
        return view('tambahNilai');
    }

    public function tambahPost(Request $request) {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilai,
            'SKS' => $request->sks
        ]);

        return redirect('/nilai-kuliah');
    }
}
