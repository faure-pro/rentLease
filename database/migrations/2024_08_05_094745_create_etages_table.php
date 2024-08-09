<?php

use App\Models\Batiment;
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
        Schema::create('etages', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->integer('nombreAppartements');
            $table->string('description');
            $table->foreignIdFor(Batiment::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etages');
    }
};
