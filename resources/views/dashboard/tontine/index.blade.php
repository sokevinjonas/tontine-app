@extends('layout.app')
@section('content')
    	<!-- Content Header (Page header) -->
        <section class="content-header">
            @if(Session::get('success'))
            <div class="alert alert-success">
                <b>BRAVO: </b>{{Session::get('success')}}
            </div>
            @endif				
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tontine</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{route('tontine.create')}}" class="btn btn-primary">Nouvelle Tontine</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <div class="input-group input-group" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            
                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                  </button>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">								
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Nom</th>
                                    <th>Nombre Adérants</th>
                                    <th>Date de paie</th>
                                    <th>Montant</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tontines as $tontine )
                                <tr>
                                    <td>
                                        <a href="">
                                            <b class="text-primary">Visualiser</b>
                                        </a>
                                    </td>
                                    <td>{{ $tontine->libeler }}</td>
                                    <td>
                                        0 / <b>{{$tontine->limite_participant}}</b>
                                    </td>
                                    <td>Chaque {{ $tontine->date_paiment }} / {{ $tontine->periode_paiment }}</td>
                                    <td>{{ $tontine->montant_participant}} CFA</td>
                                    <td>{{ substr($tontine->description, 0, 25) }}</td>
                                </tr>
                            </tbody>
                            @empty
                               <div class="alert alert-warning">
                                Aucune tontine a ete ajouter    
                            </div>     
                            @endforelse
                        </table>										
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination m-0 float-right">
                          <li class="page-item"><a class="page-link" href="#">«</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
@endsection