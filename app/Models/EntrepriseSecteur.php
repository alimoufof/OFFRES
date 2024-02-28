<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntrepriseSecteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'secteur_id',
        'entreprise_id',
    ];
}
