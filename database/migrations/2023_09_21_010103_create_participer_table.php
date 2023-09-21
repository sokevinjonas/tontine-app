<?php

use App\Models\Tontine;
use App\Models\Tontineur;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participer', function (Blueprint $table) {
            $table->id();
            $table->enum('status_paiement', ['payer', 'retard']); // Utilisation correcte des valeurs ENUM
            $table->foreignIdFor(Tontine::class, 'tontine_id');
            $table->foreignIdFor(Tontineur::class, 'tontineur_id');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participer');
    }
};
