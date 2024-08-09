<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['montant', 'mode_paiement', 'statut', 'date'];

    public function contrat()
    {
        return $this->belongsTo(Contrat::class);
    }
}
