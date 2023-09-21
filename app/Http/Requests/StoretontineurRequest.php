<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoretontineurRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à effectuer cette requête.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtenez les règles de validation qui s'appliquent à la demande.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'matricule' => 'nullable|string',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'tel_1' => 'required|integer',
            'tel_2' => 'nullable|integer',
            'ville_quartier' => 'required|string|max:255',
            'documentID' => 'required|string',
            'imageRecto' => 'required',
            'imageVerso' => 'required',
        ];
    }

    /**
     * Obtenez les messages d'erreur personnalisés pour les règles de validation.
     *
     * @return array<string, string>
     */
    public function message(): array
    {
        return [
            'nom.required' => 'Le champ nom est obligatoire.',
            'prenom.required' => 'Le champ prénom est obligatoire.',
            'tel_1.required' => 'Le champ téléphone 1 est obligatoire.',
            'ville.required' => 'Le champ ville est obligatoire.',
            'documentID.required' => 'Le champ document ID est obligatoire.',
            'imageRecto.required' => 'Le champ image recto est obligatoire.',
            'imageVerso.required' => 'Le champ image verso est obligatoire.',
        ];
    }
}
