<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
</head>
<body>
    <h2>Edit Pegawai</h2>
    <form action="/pegawai/edit/{{ $pegawai->pegawai_id }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $pegawai->pegawai_nama }}">
        <br>
        <label>Jabatan:</label>
        <input type="text" name="jabatan" value="{{ $pegawai->pegawai_jabatan }}">
        <br>
        <label>Umur:</label>
        <input type="number" name="umur" value="{{ $pegawai->pegawai_umur }}">
        <br>
        <label>Alamat:</label>
        <textarea name="alamat">{{ $pegawai->pegawai_alamat }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
