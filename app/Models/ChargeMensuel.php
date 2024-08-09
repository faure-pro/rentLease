<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargeMensuel extends Model
{
    use HasFactory;

    protected $fillable = ['type_charge', 'montant_charge', 'etat'];

    public function contrat()
    {
        return $this->belongsTo(Contrat::class);
    }
    public function contratChargeMensuels()
    {
        return $this->hasMany(ContratChargeMensuel::class);
    }
}
