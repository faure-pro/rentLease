<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDeLocataire extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
