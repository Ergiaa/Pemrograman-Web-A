<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
	  href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
	  rel="stylesheet">

	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

	<!-- Leaflet CSS -->
	<link href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<form action="/pegawai/hapus/{{ $p->pegawai_id }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: none; border: none; color: red; cursor: pointer;">Hapus</button>
                </form>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
