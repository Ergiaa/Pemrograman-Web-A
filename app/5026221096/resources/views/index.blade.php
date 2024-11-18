@extends('template')

@section('headerPage', 'Data Pegawai')

@section('content')
	<div class="d-flex justify-content-between align-items-center mb-3">
		<a href="/pegawai/tambah" class="btn btn-primary">
			<i class="fas fa-plus"></i> Tambah Pegawai Baru
		</a>

		<!-- Search Form -->
		<form action="/pegawai" method="GET" class="d-flex align-items-center">
			<input type="text" name="cari" class="form-control me-2" placeholder="Cari Nama Pegawai" value="{{ request('cari') }}">
			<input type="number" name="pagination" class="form-control me-2" placeholder="Pagination" value="{{ request('pagination', 10) }}" style="max-width: 100px;">
			<button type="submit" class="btn btn-success">
				<i class="fas fa-search"></i> Cari
			</button>
		</form>
	</div>

	<table class="table table-bordered table-striped table-hover">
		<thead class="table-dark">
			<tr>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pegawai as $p)
			<tr>
				<td>{{ $p->pegawai_nama }}</td>
				<td>{{ $p->pegawai_jabatan }}</td>
				<td>{{ $p->pegawai_umur }}</td>
				<td>{{ $p->pegawai_alamat }}</td>
				<td class="text-center">
					<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-icon">
						<i class="fas fa-edit"></i>
					</a>
					<form action="/pegawai/hapus/{{ $p->pegawai_id }}" method="POST" style="display: inline;">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger btn-icon">
							<i class="fas fa-trash-alt"></i>
						</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<br/>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>

	<!-- Pagination Links -->
	<div class="d-flex justify-content-center px-2">
		{{ $pegawai->appends(['cari' => request('cari'), 'pagination' => request('pagination')])->links() }}
	</div>
@endsection
