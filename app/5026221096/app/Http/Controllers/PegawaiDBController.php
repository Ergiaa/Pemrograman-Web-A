<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    public function index(Request $request)
    {
        // // mengambil data dari table pegawai
        // // $pegawai = DB::table('pegawai')->get();
        // $pagination = $request->query('pagination', 10);

        // $pegawai = DB::table('pegawai')->paginate($pagination);

        // // mengirim data pegawai ke view index
        // return view('index', ['pegawai' => $pegawai]);


        // menangkap data pencarian
		$cari = $request->cari;

        // mengatur jumlah pagination
        $pagination = $request->query('pagination', 10);

    	// mengambil data dari table pegawai sesuai pencarian data
        if($cari == null) {
            $pegawai = DB::table('pegawai')->paginate($pagination);
        } else {
            $pegawai = DB::table('pegawai')
            ->where('pegawai_nama','like',"%".$cari."%")
            ->paginate($pagination);
        }


    	// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

        // mengatur jumlah pagination
        $pagination = $request->query('pagination', 10);

    	// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate($pagination);

    	// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);
	}

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    // method untuk menampilkan form edit data pegawai
    public function editGet($id)
    {
        // mengambil data pegawai berdasarkan id
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first();

        // passing data pegawai yang didapat ke view edit
        return view('edit', ['pegawai' => $pegawai]);
    }

    // method untuk update data pegawai
    public function editPost(Request $request, $id)
    {
        // update data pegawai berdasarkan id
        DB::table('pegawai')->where('pegawai_id', $id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        // alihkan halaman kembali ke halaman pegawai
        return redirect('/pegawai');
    }

    // method untuk hapus data pegawai
    public function delete($id)
    {
        // hapus data pegawai berdasarkan id
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        // alihkan halaman kembali ke halaman pegawai
        return redirect('/pegawai');
    }
}
