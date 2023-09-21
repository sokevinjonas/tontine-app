@extends('layout.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">					
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Enregistrer un participant</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{route('tontineurs.index')}}" class="btn btn-primary">Retour</a>
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
                    <form action="{{ route('tontineurs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">								
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="libeler">Nom:</label>
                                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom">	
                                </div>
                                @error('nom')
                                    <b style="color: red">{{$message}}</b>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="prenom">Prenom (s):</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Votre prenom"">	
                                </div>
                                @error('prenom')
                                    <b style="color: red">{{$message}}</b>
                                @enderror								
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tel_1">Télephone 1:</label>
                                    <input type="number" name="tel_1" id="tel_1" class="form-control" placeholder="Numero de téléphone">	
                                </div>
                                @error('tel_1')
                                    <b style="color: red">{{$message}}</b>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tel_2">Téléphone 2:</label>
                                    <input type="number" name="tel_2" id="tel_2" class="form-control" placeholder="Facultatif">	
                                </div>
                                @error('tel_2')
                                    <b style="color: red">{{$message}}</b>
                                @enderror								
                            </div>	
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ville_quartier">Ville / Quartier :</label>
                                    <input type="text" name="ville_quartier" id="ville_quartier" placeholder="Ex: Ouaga, Saaba">
                                </div>
                                @error('ville_quartier')
                                    <b style="color : red">{{$message}}</b>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="documentID">Type document:</label>
                                    <select name="documentID" id="documentID">
                                        <option value="CNIB">CNIB</option>        
                                        <option value="PASSEPORT">PASSEPORT</option>        
                                        <option value="PERMIS">PERMIS</option>        
                                    </select>	
                                </div>
                                @error('documentID')
                                    <b style="color: red">{{$message}}</b>
                                @enderror								
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="libeler">Image Recto:</label>
                                    <input type="file" name="imageRecto" id="imageRecto" class="form-control">	
                                </div>
                                @error('imageRecto')
                                    <b style="color: red">{{$message}}</b>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="prenom">Image Verso:</label>
                                    <input type="file" name="imageVerso" id="imageVerso" class="form-control">	
                                </div>
                                @error('imageVerso')
                                    <b style="color: red">{{$message}}</b>
                                @enderror								
                            </div>
                        </div>
                    </div>							
                </div>
                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary">Créer</button>
                    <button type="reset" class="btn btn-outline-dark ml-3">Annuler</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
