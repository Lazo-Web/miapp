<?php

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
        Schema::create('tractoras', function (Blueprint $table) {
            $table->id();
            $table->string('matricula')->unique();
            $table->string('marca')->nullable();
            $table->string('numero_chasis')->nullable()->unique();
            $table->string('modelo')->nullable();
            $table->integer('kilometraje')->nullable();
            $table->decimal('consumo_promedio', 5, 2)->nullable();
            $table->date('matriculacion')->nullable();
            $table->date('ultima_itv')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tractoras');
    }
};
