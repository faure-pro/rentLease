<?php

use App\Models\Periode;
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
        Schema::create('etat_lieuxes', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('statut');
            $table->dateTime('date');
            $table->text('detailsEtat')->nullable();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Periode::class);              
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etat_lieuxes');
    }
};
