<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_departement',
        'admin_id',
        'etat'
    ];

    public function domaines(): HasMany
    {
        return $this->hasMany(Domaine::class);
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function offres(): HasMany
    {
        return $this->hasMany(Offre::class);
    }
}
