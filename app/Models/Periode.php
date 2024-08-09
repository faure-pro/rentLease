<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;

    protected $fillable = ['date'];

    public function paiement()
    {
        return $this->belongsTo(Paiement::class);
}
    public function etatLieux()
    {
        return $this->hasMany(EtatLieux::class);
    }
}