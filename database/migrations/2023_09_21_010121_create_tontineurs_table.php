<?php

use App\Models\User;
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
        Schema::create('tontineurs', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->default(NULL);
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel_1');
            $table->string('tel_2')->nullable;
            $table->string('ville_quartier');
            $table->string('documentID');
            $table->string('imageRecto');
            $table->string('imageVerso');
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tontineurs');
    }
};
