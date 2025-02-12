<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    protected $fillable = ['numero', 'dimension', 'description'];

    public function appartement()
    {
        return $this->belongsTo(Appartement::class);
    }
}
