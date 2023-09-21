<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoretontineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'matricule' => 'nullable|string',
            'libeler' => 'required|string',
            'description' => 'required|string',
            'limite_participant' => 'required|integer',
            'montant_participant' => 'required|numeric',
            'periode_paiment' => 'required|in:jour,semaine,mois',
            'date_paiment' => 'required|integer|min:1|max:31',
            'status' => 'filled|in:1,2',
        ];
    }

    public function messages(): array
{
    return [
        'libeler.required' => 'Le champ Libellé est obligatoire.',
        'description.required' => 'Le champ Description est obligatoire.',
        'limite_participant.required' => 'Le champ Limite Participant est obligatoire.',
        'limite_participant.integer' => 'Le champ Limite Participant doit être un nombre entier.',
        'montant_participant.required' => 'Le champ Montant Participant est obligatoire.',
        'montant_participant.numeric' => 'Le champ Montant Participant doit être un nombre.',
        'periode_paiment.required' => 'Le champ Période de Paiement est obligatoire.',
        'periode_paiment.in' => 'La Période de Paiement sélectionnée n\'est pas valide.',
        'date_paiment.required' => 'Le champ Date de Paiement est obligatoire.',
        'date_paiment.integer' => 'Le champ Date de Paiement doit être un nombre entier.',
        'date_paiment.min' => 'Le champ Date de Paiement doit être au moins 1.',
        'date_paiment.max' => 'Le champ Date de Paiement ne peut pas dépasser 31.',
        'status.required' => 'Le champ Statut est obligatoire.',
        'status.in' => 'Le Statut sélectionné n\'est pas valide.',
    ];
}
}
