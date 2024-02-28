<?php

use App\Models\Entreprise;
use App\Models\Secteur;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entreprise_secteur', function (Blueprint $table) {
            $table->primary(['entreprise_id','secteur_id']);
            $table->foreignIdFor(Entreprise::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Secteur::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprise_secteur');
    }
};
