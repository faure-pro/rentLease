<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'nombreDeChambres', 'prix', 'disponibilite'];

    public function batiment()
    {
        return $this->belongsTo(Batiment::class);
    }
    public function contrats()
    {
        return $this->hasMany(Contrat::class);
    }
    public function chambres()
    {
        return $this->hasMany(Chambre::class);
    }
    
}
