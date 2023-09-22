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
        Schema::create('tontines', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('libeler');
            $table->string('description');
            $table->string('limite_participant');
            $table->string('montant_participant');
            $table->enum('periode_paiment', ['jour', 'semaine', 'mois']);
            $table->enum('date_paiment', [
                '1', '2', '3','4','5','6','7','8','9','10',
                '11', '12', '13','14','15','16','17','18','19','20',
                '21', '22', '23','24','25','26','27','28','29','30','31'
            ]);
            $table->enum('status', ['1', '2']);
            $table->foreignIdFor(User::class , 'user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tontines');
    }
};
