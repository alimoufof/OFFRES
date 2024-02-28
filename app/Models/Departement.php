<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_departement',
        'admin_id',
        'etat'
    ];

    public function domaines()
    {
        return $this->hasMany(Domaine::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
}
