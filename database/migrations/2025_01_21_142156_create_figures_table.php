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
        Schema::create('figures', function (Blueprint $table) {
            $table->id(); //PK
            $table->string("name");
            $table->double("price");
            $table->string("picture");
            $table->longText("description");
            $table->string("origin");
            $table->boolean("limited");
            $table->integer("quantity");
            $table->timestamps(); //created_at és updated_at
            $table->softDeletes();  // deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('figures');
    }
};
