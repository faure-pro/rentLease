<?php

use App\Models\TypeDeLocataire;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('type_de_locataires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
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
        Schema::dropIfExists('type_de_locataires');
    }
};
