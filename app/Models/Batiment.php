<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'ville', 'description','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function etages()
    {
        return $this->hasMany(etage::class);
    }

    public function appartements()
    {
        return $this->hasMany(Appartement::class);
    }
    
}
