@extends('template')  <!-- Extend the template -->

@section('headerPage', 'Tambah Data Nilai Kuliah')

@section('content')  <!-- Start the content section -->

<div class="container">
    <p class="text-center">
        <a href="/nilai-kuliah" class="btn btn-warning btn-sm">Kembali</a>
    </p>

    <div class="card p-4">
        <form action="/nilai-kuliah/tambah" method="POST">
            {{ csrf_field() }}

            <div class="form-group row mb-3">
                <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                <div class="col-sm-10">
                    <input type="text" name="nrp" id="nrp" class="form-control" required="required" placeholder="Masukkan NRP Mahasiswa" maxlength="6">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
                <div class="col-sm-10">
                    <input type="number" name="nilai" id="nilai" class="form-control" required="required" placeholder="Masukkan Nilai Mahasiswa (Dalam bentuk angka 0 - 100)" min="0" max="100">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                <div class="col-sm-10">
                    <input type="number" name="sks" id="sks" class="form-control" required="required" placeholder="Masukkan SKS Mahasiswa (0 - 24)" min="0" max="24">
                </div>
            </div>

            <center><button type="submit" class="btn btn-primary mt-2">Simpan Data</button></center>
        </form>
    </div>
</div>

@endsection  <!-- End the content section -->
