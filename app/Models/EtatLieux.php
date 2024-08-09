<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtatLieux extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'statut', 'date', 'detailsEtat'];

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
