<?php

use App\Models\ChargeMensuel;
use App\Models\Contrat;
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
        Schema::create('contrat_charge_mensuels', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Contrat::class);
            $table->foreignIdFor(ChargeMensuel::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrat_charge_mensuels');
    }
};
