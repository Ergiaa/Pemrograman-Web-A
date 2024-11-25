@extends('template')  <!-- Extend the template -->

@section('headerPage', 'Edit Data Pegawai')

@section('content')  <!-- Start the content section -->

<div class="container">
    <p class="text-center">
        <a href="/pegawai" class="btn btn-warning btn-sm">Kembali</a>
    </p>

    <div class="card p-4">
        <form action="/pegawai/edit/{{ $pegawai->pegawai_id }}" method="POST">
            {{ csrf_field() }}

            <input type="hidden" name="id" id="id" class="form-control" required="required" value="{{ $pegawai->pegawai_id }}"></input>

            <div class="form-group row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" id="nama" class="form-control" required="required" value="{{ $pegawai->pegawai_nama }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" name="jabatan" id="jabatan" class="form-control" required="required" value="{{ $pegawai->pegawai_jabatan }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="number" name="umur" id="umur" class="form-control" required="required" value="{{ $pegawai->pegawai_umur }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea name="alamat" id="alamat" class="form-control" required="required">{{ $pegawai->pegawai_alamat }}</textarea>
                </div>
            </div>

            <center><button type="submit" class="btn btn-primary mt-2">Update Data</button></center>
        </form>
    </div>
</div>

@endsection  <!-- End the content section -->
