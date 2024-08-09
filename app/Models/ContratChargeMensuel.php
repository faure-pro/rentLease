<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratChargeMensuel extends Model
{
    use HasFactory;

    protected $table = 'contrat_charge_mensuels';

    protected $fillable = [
        'contrat_id',
        'charge_mensuel_id'
    ];

    public function contrat()
    {
        return $this->belongsTo(Contrat::class);
    }

    public function chargeMensuel()
    {
        return $this->belongsTo(ChargeMensuel::class);
    }
}
