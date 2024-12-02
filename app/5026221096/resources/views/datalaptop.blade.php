@extends('template')

@section('headerPage', 'Data Laptop')

@section('content')
	<div class="d-flex justify-content-between align-items-center mb-3">
		<a href="/laptop/tambah" class="btn btn-primary">
			<i class="fa-solid fa-plus"></i> Tambah Laptop Baru
		</a>

		<!-- Search Form -->
		<form action="/laptop" method="GET" class="d-flex align-items-center">
			<input type="text" name="cari" class="form-control me-2" placeholder="Cari Merk Laptop" value="{{ request('cari') }}">
			<input type="number" name="pagination" class="form-control me-2" placeholder="Pagination" value="{{ request('pagination', 10) }}" style="max-width: 100px;">
			<button type="submit" class="btn btn-success">
				<i class="fa-solid fa-magnifying-glass"></i>
			</button>
		</form>
	</div>

	<table class="table table-bordered table-striped table-hover">
		<thead class="table-dark">
			<tr>
				<th>Kode Laptop</th>
				<th>Merk Laptop</th>
				<th>Stock</th>
				<th>Tersedia</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($laptop as $l)
			<tr>
				<td>{{ $l->kodelaptop }}</td>
				<td>{{ $l->merklaptop }}</td>
				<td>{{ $l->stocklaptop }}</td>
				<td>
                    @if ( $l->tersedia === 'Y' )
                        <i class="fa-solid fa-check text-success"></i>
                    @else
                        <i class="fa-solid fa-minus text-danger"></i>
                    @endif
                </td>
				<td class="text-center">
					<a href="/laptop/edit/{{ $l->kodelaptop }}" class="btn btn-warning btn-icon">
						<i class="fa-solid fa-pen-to-square"></i>
					</a>
					<form action="/laptop/hapus/{{ $l->kodelaptop }}" method="POST" style="display: inline;">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger btn-icon">
							<i class="fa-solid fa-trash"></i>
						</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<br/>
	Halaman : {{ $laptop->currentPage() }} <br/>
	Jumlah Data : {{ $laptop->total() }} <br/>
	Data Per Halaman : {{ $laptop->perPage() }} <br/>

	<!-- Pagination Links -->
	<div class="d-flex justify-content-center px-2">
		{{ $laptop->appends(['cari' => request('cari'), 'pagination' => request('pagination')])->links() }}
	</div>
@endsection
