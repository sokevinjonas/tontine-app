<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>FASO TONTINE</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
		@yield('customCss')
	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
		@include('layout.topbard')
			<!-- /.navbar -->
			@include('layout.sidebard')
			<div class="content-wrapper">
				@yield('content')
			</div>
			<!-- /.content-wrapper -->
			<footer class="main-footer">
				
				<strong>Droits d'auteur © 2023-2024 Tous droits réservés par <a href="https://github.com/jonasdevpro"> JonasDePro <i class="fab fa-github"> </i></a></strong>
			</footer>
			
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- AdminLTE App -->
		<script src="{{asset('assets/js/adminlte.min.js')}}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{asset('assets/js/demo.js')}}"></script>
		@yield('customJs')
	</body>
</html>