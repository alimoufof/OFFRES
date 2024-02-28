<?php

namespace App\Models;

use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Secteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_secteur',
        'admin_id',
        'etat'
    ];

    
    public function entreprises() 
    {
        return $this->belongsToMany(Entreprise::class);
    }
}
