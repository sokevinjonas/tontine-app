<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Tontineur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoretontineurRequest;

class TontineurController extends Controller
{
    public function index()
    {
        return view('dashboard.tontineur.index');
    }

    public function create()
    {
        return view('dashboard.tontineur.create');
    }

    public function store(StoretontineurRequest $request)
    {
        $validatedData = $request->validated();
        
        // Générer le matricule en utilisant la méthode matriculeRegenerate
        $matri = $this->matriculeRegenerate();

        // Créer une instance de Tontineur avec les données validées
        $tontineur = new Tontineur($validatedData);
        
        // Enregistrer les fichiers téléchargés s'ils existent
        if ($request->hasFile('imageRecto')) {
            $imageRectoPath = $request->file('imageRecto')->store('public/documentIdUser');
            $tontineur->imageRecto = $imageRectoPath;
        }

        if ($request->hasFile('imageVerso')) {
            $imageVersoPath = $request->file('imageVerso')->store('public/documentIdUser');
            $tontineur->imageVerso = $imageVersoPath;
        }

        // Ajouter le matricule et l'ID de l'utilisateur connecté
        $tontineur->matricule = $matri;
        $tontineur->tel_2 = NULL;
        $tontineur->user_id = Auth::user()->id;
        try {
            // Enregistrer le nouvel enregistrement Tontineur
            $tontineur->save();
            dd($tontineur);

            // Redirection en cas de succès
            return redirect()->route('tontineurs.index')->with('success', 'Participant créé avec succès.');
        } catch (Exception $e) {
            dd($e);
            // En cas d'échec, afficher un message d'erreur
            return redirect()->route('tontineurs.create')->with('msg_error', 'Une erreur s\'est produite lors de la création du participant : ' . $e->getMessage());
        }
    }

    public function matriculeRegenerate()
    {
        $annee = date('Y');
        $mois = date('m');
        $jour = date('d');

        // Récupérer la première lettre du jour en cours (par exemple : 'M' pour mardi)
        $jourDeLaSemaine = date('l');
        $premiereLettreDuJour = strtoupper(substr($jourDeLaSemaine, 0, 1));

        $matricule = substr($annee, 0, 2) . $mois . $jour . $premiereLettreDuJour;
        return $matricule;
    }
}
