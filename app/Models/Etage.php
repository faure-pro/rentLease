<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etage extends Model
{
    use HasFactory;


    protected $fillable = ['numero','nomreAppartements', 'description','batiment_id' ];

    protected $attributes = [
        'nombreAppartements' => 0, // Valeur par défaut
    ];
    public function batiment()
    {
        return $this->belongsTo(Batiment::class);
    }
    public function appartements()
    {
        return $this->hasMany(Appartement::class);
    }


}
