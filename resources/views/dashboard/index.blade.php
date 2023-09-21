@extends('layout.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">					
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Dashboard</h1>
			</div>
			<div class="col-sm-6">
				
			</div>
		</div>
	</div>
	<!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
	<!-- Default box -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-6">							
				<div class="small-box card">
					<div class="inner">
						<h3>0</h3>
						<p>Total tontines</p>
					</div>
					<div class="icon">
						<i class="ion ion-bag"></i>
					</div>
					<a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			
			<div class="col-lg-6 col-6">							
				<div class="small-box card">
					<div class="inner">
						<h3>0</h3>
						<p>Total tonineurs</p>
					</div>
					<div class="icon">
						<i class="ion ion-stats-bars"></i>
					</div>
					<a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>
	</div>					
	<!-- /.card -->
</section>
<!-- /.content -->
@endsection