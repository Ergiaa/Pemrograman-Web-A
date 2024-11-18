@extends('template')  <!-- Extend the template -->

@section('headerPage', 'Tambah Data Pegawai')

@section('content')  <!-- Start the content section -->

<div class="container">
    <p class="text-center">
        <a href="/pegawai" class="btn btn-warning btn-sm">Kembali</a>
    </p>

    <div class="card p-4">
        <form action="/pegawai/store" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required="required" placeholder="Masukkan nama pegawai">
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" required="required" placeholder="Masukkan jabatan pegawai">
            </div>

            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" name="umur" id="umur" class="form-control" required="required" placeholder="Masukkan umur pegawai">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="required" placeholder="Masukkan alamat pegawai"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Simpan Data</button>
        </form>
    </div>
</div>

@endsection  <!-- End the content section -->
