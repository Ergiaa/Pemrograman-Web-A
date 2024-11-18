<!DOCTYPE html>
<html>
<head>
	<title>Viera Tito Virgiawan - 5026221096</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
	  href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@400;500;600&display=swap"
	  rel="stylesheet">

	<!-- Font Awesome for Modern Icons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<style>
		body {
			font-family: 'Be Vietnam Pro', sans-serif;
		}
		.table th, .table td {
			vertical-align: middle;
		}
		.btn-icon {
			padding: 0.4rem 0.6rem;
			font-size: 0.9rem;
		}
	</style>
</head>
<body class="bg-light">

	<div class="container py-4">
	    <h3 class="mb-4 text-center">Viera Tito Virgiawan - 5026221096</h3>
        <h2 class="mb-4 text-center">@yield('headerPage')</h2>

        @yield('link1')

        <br/>
        <br/>

        @yield('content')
    </div>

	<!-- Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
