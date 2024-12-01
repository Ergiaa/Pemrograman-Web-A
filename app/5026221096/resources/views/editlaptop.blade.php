@extends('template')  <!-- Extend the template -->

@section('headerPage', 'Edit Data Laptop')

@section('content')  <!-- Start the content section -->

<div class="container">
    <p class="text-center">
        <a href="/laptop" class="btn btn-warning btn-sm">Kembali</a>
    </p>

    <div class="card p-4">
        <form action="/laptop/edit/{{ $laptop->kodelaptop }}" method="POST">
            {{ csrf_field() }}

            <input type="hidden" name="kodelaptop" id="kodelaptop" class="form-control" required="required" value="{{ $laptop->kodelaptop }}">

            <div class="form-group row mb-3">
                <label for="merklaptop" class="col-sm-2 col-form-label">Merk Laptop</label>
                <div class="col-sm-10">
                    <input type="text" name="merklaptop" id="merklaptop" class="form-control" required="required" value="{{ $laptop->merklaptop }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="stocklaptop" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="number" name="stocklaptop" id="stocklaptop" class="form-control" required="required" value="{{ $laptop->stocklaptop }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10 d-flex align-items-center">
                    <!-- Radio Button for N -->
                    <div class="form-check me-3">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="tersedia"
                            id="tersediaN"
                            value="N"
                            {{ $laptop->tersedia == 'N' ? 'checked' : '' }}>
                        <label class="form-check-label" for="tersediaN">
                            Tidak (N)
                        </label>
                    </div>

                    <!-- Radio Button for Y -->
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="tersedia"
                            id="tersediaY"
                            value="Y"
                            {{ $laptop->tersedia == 'Y' ? 'checked' : '' }}>
                        <label class="form-check-label" for="tersediaY">
                            Ya (Y)
                        </label>
                    </div>
                </div>
            </div>



            <center><button type="submit" class="btn btn-primary mt-2">Update Data</button></center>
        </form>
    </div>
</div>

@endsection  <!-- End the content section -->
