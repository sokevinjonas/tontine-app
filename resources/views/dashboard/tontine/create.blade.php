@extends('layout.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">					
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nouvelle Tontine</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{route('tontine.index')}}" class="btn btn-primary">Retour</a>
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
                <form action="{{route('tontine.store')}}" method="post">
                    @csrf
                    <div class="card-body">								
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="libeler">Nom</label>
                                    <input type="text" name="libeler" id="name" class="form-control" placeholder="Entrer le nom de la tontine">	
                                </div>
                                @error('libeler')
                                    <b style="color: red">{{$message}}</b>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" id="description" class="form-control" placeholder="Une description">	
                                </div>
                                @error('description')
                                    <b style="color: red">{{$message}}</b>
                                @enderror								
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="limite_participant">Nombre de participants</label>
                                    <input type="number" name="limite_participant" id="limite_participant" class="form-control" placeholder="Nombre de participants">	
                                </div>
                                @error('limite_participant')
                                    <b style="color: red">{{$message}}</b>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="montant_participant">Montant</label>
                                    <input type="number" name="montant_participant" id="description" class="form-control" placeholder="Montant de la participation">	
                                </div>
                                @error('montant_participant')
                                    <b style="color: red">{{$message}}</b>
                                @enderror								
                            </div>	
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="periode_paiment">Période de paiement par :</label>
                                    <select name="periode_paiment" id="periode_paiment" onchange="displayTable()">
                                        <option value="">-- Choisir --</option>    
                                        <option value="jour">Jour</option>    
                                        <option value="semaine">Semaine</option>    
                                        <option value="mois">Mois</option>    
                                    </select>	
                                </div>
                                @error('periode_paiement')
                                    <b style="color : red">{{$message}}</b>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="periode_paiment">Date de paiement:</label>
                                    <select name="date_paiment" id="date_paiment">
                                        <option value="date_paiment"></option>        
                                    </select>	
                                </div>
                                @error('date_paiement')
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
@section('customJs')
<script>
    // Récupérez l'élément select
    var selectElement = document.getElementById("date_paiment");

    // Boucle pour générer les options de 1 à 31
    for (var i = 1; i <= 31; i++) {
        var option = document.createElement("option");
        option.value = i;
        option.textContent = i;
        selectElement.appendChild(option);
    }
</script>
@endsection
