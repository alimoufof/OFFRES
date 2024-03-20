<?php

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
        Schema::create('domaines', function (Blueprint $table) {
            $table->id();
            $table->string('nom_domaine');
            $table->boolean('etat')->default(0);
            $table->foreignId('departement_id')->references('id')->on('departements')->onUpdateCascade();
            $table->foreignId('admin_id')->references('id')->on('admins')->onUpdateCascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domaines');
    }
};
