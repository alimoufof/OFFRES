<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'contenu',
        'photo',
        'date_debut',
        'date_fin',
        'lieu',
        'salaire',
        'etat',
        'type_offre_id',
        'departement_id',
        'domaine_id',
        'entreprise_id',
        'admin_id',
    ];

    public function typeoffre()
    {
        return $this->belongsTo(TypeOffre::class, 'type_offre_id');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }

    public function domaine()
    {
        return $this->belongsTo(Domaine::class, 'domaine_id');
    }

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class, 'entreprise_id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}