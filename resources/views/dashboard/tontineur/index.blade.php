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
                        <h1>Liste de participants</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{route('tontineurs.create')}}" class="btn btn-primary">Enregistrer un participant</a>
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
                                    <th>Nom & Prenom (s)</th>
                                    <th>Téléphone</th>
                                    <th>Ville / Quartier</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tontineurs as $tontineur )
                                <tr>
                                    <td>
                                        <a href="" class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                                              </svg>
                                        </a>
                                    </td>
                                    <td>{{ $tontineur->nom . ' '. $tontineur->prenom }}</td>
                                    <td>
                                         <b> {{ $tontineur->tel_1 }} </b>
                                    </td>
                                    <td>
                                        {{ $tontineur->ville_quartier }}
                                    </td>
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