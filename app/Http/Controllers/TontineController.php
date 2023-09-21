<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Tontine;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoretontineRequest;

class TontineController extends Controller
{
    public function index(){
        $tontines = Tontine::latest('created_at')->paginate(5);
        return view('dashboard.tontine.index',compact('tontines'));
    }
    
    public function create(){
        return view('dashboard.tontine.create');
    }

    public function store(StoretontineRequest $request)
    {
        // Valider les données de la demande
        $user_id = Auth::user()->id;
        $validator = $request->all(); 
        // Générer le matricule aléatoire
        $matricule = Str::random(6);   
        // Ajouter le matricule généré au tableau de données
        $validator['matricule'] = $matricule;
        $validator['user_id'] = $user_id;
        $validator['status'] = $request->input('status', 1);
        try {
            // Créer la tontine en utilisant la méthode create
            Tontine::create($validator);
            // dd($validator);
            // Redirection en cas de succès
            return redirect()->route('tontine.index')->with('success', 'Tontine créée avec succès.');
        } catch (Exception $e) {
            dd($e);
            // En cas d'échec, afficher un message d'erreur
            return redirect()->route('tontine.create')->with('msg_error', 'Une erreur s\'est produite lors de la création de la tontine : ' . $e->getMessage());
        }
    }
}
