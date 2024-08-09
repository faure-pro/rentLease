<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'email', 'tel'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function batiments()
    {
        return $this->hasMany(Batiment::class);
    }
}
