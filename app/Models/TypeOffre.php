<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOffre extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_typeoffre',
        'etat',
        'admin_id'
    ];

    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
}
