<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Echeancier extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'frequence_de_paiement'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
