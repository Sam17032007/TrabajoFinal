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
        Schema::create('productos', function (Blueprint $table) {
            $table->id("id");
            $table->string("nombre");
            $table->string("precio");
            $table->foreignId("id_proveedor")
                ->constrained('proveedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('id_categoria')
                ->constrained('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string("stock");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
