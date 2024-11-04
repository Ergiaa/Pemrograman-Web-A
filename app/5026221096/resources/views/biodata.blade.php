<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>

	<br>

	<p>Nama : {{ $jsonData['nama'] }}</p>
    <p>Umur : {{ $jsonData['umur'] }}</p>
    <p>Hasil Perkalian : {{ $jsonData['hasil'] }}</p>

	<p>Mata Pelajaran</p>
	<ul>

		@foreach($matkul as $m)

		<li>{{ $m }}</li>

		@endforeach

	</ul>

</body>
</html>
