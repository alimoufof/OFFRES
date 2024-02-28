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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->longText('description');
            $table->text('contenu');
            $table->string('photo');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('lieu');
            $table->double('salaire')->nullable();
            $table->boolean('etat')->default(0);
            $table->foreignId('type_offre_id')->references('id')->on('type_offres')->onUpdate('cascade');
            $table->foreignId('departement_id')->references('id')->on('departements')->onUpdate('cascade');
            $table->foreignId('domaine_id')->references('id')->on('domaines')->onUpdate('cascade');
            $table->foreignId('entreprise_id')->references('id')->on('entreprises')->onUpdate('cascade');
            $table->foreignId('admin_id')->references('id')->on('admins')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
