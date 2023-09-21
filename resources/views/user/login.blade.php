@extends('layout.auth')
@section('authentificate')
<body class="hold-transition login-page">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card card-outline card-primary">
			  <div class="card-header text-center">
				<a href="#" class="h3">FASO TONTINE</a>
			  </div>
			  <div class="card-body">
				<p class="login-box-msg">Connectez-vous</p>
				<form action="{{route('user.login.post')}}" method="post">
					@csrf
					  <div class="input-group mb-3">
						<input type="text" name="phone" class="form-control" placeholder="phone">
						<div class="input-group-append">
							  <div class="input-group-text">
								<span class="fas fa-phone"></span>
							  </div>
						</div>
					</div>
					@error('phone')
						<b style="color: red">{{$message}}</b>
					@enderror
					  <div class="input-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Mot de passe">
						<div class="input-group-append">
							  <div class="input-group-text">
								<span class="fas fa-lock"></span>
							  </div>
						</div>
					</div>
					@error('password')
						<b style="color: red">{{$message}}</b>
					@enderror
					  <div class="row">
						 <div class="col-8">
							  <div class="icheck-primary">
								<input type="checkbox" name="remember" id="remember">
								<label for="remember">
									  Se souvenir de moi
								</label>
							  </div>
						</div>
						<!-- /.col -->
						<div class="col">
							  <button type="submit" class="btn btn-primary btn-block">Connexion</button>
						</div>
						<!-- /.col -->
					  </div>
				</form>
				  <p class="mb-1 mt-3">
					  <a href="forgot-password.html">J'ai oublié mon mot de passe</a>
				</p>					
			  </div>
			  <!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	
</body>
@endsection
