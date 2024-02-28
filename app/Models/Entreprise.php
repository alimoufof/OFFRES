<?php

namespace App\Models;

use App\Models\Secteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_entreprise',
        'adresse',
        'contact',
        'email',
        'description',
        'site_web',
        'logo',
        'admin_id',
        'etat'
    ];

    public function secteurs() 
    {
        return $this->belongsToMany(Secteur::class);
    }

    public function offres()
    {
        return $this->hasMany(Offre::class);
    }

    public function admin() 
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
