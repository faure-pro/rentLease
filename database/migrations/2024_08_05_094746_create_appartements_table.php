<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Etage;
use App\Models\Batiment;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('nombreDeChambres');
            $table->decimal('prix', 10, 2);
            $table->boolean('disponibilite');
            $table->foreignIdFor(Etage::class);
            $table->foreignIdFor(Batiment::class);         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartements');
    }
};
