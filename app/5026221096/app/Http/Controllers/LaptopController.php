<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaptopController extends Controller
{
    public function index(Request $request)
    {
        // // mengambil data dari table laptop
        // // $laptop = DB::table('laptop')->get();
        // $pagination = $request->query('pagination', 10);

        // $laptop = DB::table('laptop')->paginate($pagination);

        // // mengirim data laptop ke view index
        // return view('index', ['laptop' => $laptop]);


        // menangkap data pencarian
		$cari = $request->cari;

        // mengatur jumlah pagination
        $pagination = $request->query('pagination', 10);

    	// mengambil data dari table laptop sesuai pencarian data
        if($cari == null) {
            $laptop = DB::table('laptop')->paginate($pagination);
        } else {
            $laptop = DB::table('laptop')
            ->where('merklaptop','like',"%".$cari."%")
            ->paginate($pagination);
        }


    	// mengirim data laptop ke view index
		return view('datalaptop',['laptop' => $laptop]);
    }

    public function tambah()
    {
        return view('tambahlaptop');
    }

    // method untuk insert data ke table laptop
    public function store(Request $request)
    {
        // insert data ke table laptop
        DB::table('laptop')->insert([
            'merklaptop' => $request->merklaptop,
            'stocklaptop' => $request->stocklaptop,
            'tersedia' => $request->tersedia
        ]);
        // redirect halaman ke halaman laptop
        return redirect('/laptop');
    }

    // method untuk menampilkan form edit data laptop
    public function editGet($kodelaptop)
    {
        // mengambil data laptop berdasarkan id
        $laptop = DB::table('laptop')->where('kodelaptop', $kodelaptop)->first();

        // passing data laptop yang didapat ke view edit
        return view('editlaptop', ['laptop' => $laptop]);
    }

    // method untuk update data laptop
    public function editPost(Request $request, $kodelaptop)
    {
        // update data laptop berdasarkan id
        DB::table('laptop')->where('kodelaptop', $request->kodelaptop)->update([
            'merklaptop' => $request->merklaptop,
            'stocklaptop' => $request->stocklaptop,
            'tersedia' => $request->tersedia
        ]);

        // redirect halaman kembali ke halaman laptop
        return redirect('/laptop');
    }

    // method untuk hapus data laptop
    public function delete($kodelaptop)
    {
        // hapus data laptop berdasarkan id
        DB::table('laptop')->where('kodelaptop', $kodelaptop)->delete();

        // redirect halaman kembali ke halaman laptop
        return redirect('/laptop');
    }
}
