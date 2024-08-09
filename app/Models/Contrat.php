<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    protected $fillable = ['debut_contrat', 'fin_contrat', 'conditions'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appartement()
    {
        return $this->belongsTo(Appartement::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
    public function chargesMensuelles()
    {
        return $this->hasMany(ChargeMensuel::class);
    }
    public function contratChargeMensuels()
    {
        return $this->hasMany(ContratChargeMensuel::class);
    }




}
