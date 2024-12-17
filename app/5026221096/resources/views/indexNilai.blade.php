@extends('template')

@section('headerPage', 'Data Nilai Kuliah')

@section('content')
	<div class="d-flex justify-content-between align-items-center mb-3">
		<a href="/nilai-kuliah/tambah" class="btn btn-primary">
			<i class="fa-solid fa-plus"></i> Tambah Data
		</a>
	</div>

	<table class="table table-bordered table-striped table-hover">
		<thead class="table-dark">
			<tr>
				<th>ID</th>
				<th>NRP</th>
				<th>Nilai Angka</th>
				<th>SKS</th>
				<th>Nilai Huruf</th>
				<th>Bobot</th>
			</tr>
		</thead>
		<tbody>
			@foreach($nilaikuliah as $n)
			<tr>
				<td>{{ $n->ID }}</td>
				<td>{{ $n->NRP }}</td>
				<td>{{ $n->NilaiAngka }}</td>
				<td>{{ $n->SKS }}</td>
				<td>
                    @if ( $n->NilaiAngka <= 40 )
                        D
                    @elseif ( $n->NilaiAngka <= 60 && $n->NilaiAngka >= 41 )
                        C
                    @elseif ( $n->NilaiAngka <= 80 && $n->NilaiAngka >= 61 )
                        B
                    @else
                        A
                    @endif
                </td>
				<td>
					{{$n->NilaiAngka * $n->SKS}}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
