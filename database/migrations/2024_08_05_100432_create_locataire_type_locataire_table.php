<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TypeDeLocataire;  

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('locataire_type_locataire', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(TypeDeLocataire::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loc_type_locs');
    }
};
