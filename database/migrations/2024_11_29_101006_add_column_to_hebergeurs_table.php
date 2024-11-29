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
        Schema::table('hebergeurs', function (Blueprint $table) {
            $table->unsignedBigInteger('demande_id');
            $table->foreign('demande_id')
            ->references("id")
            ->on("demandes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hebergeurs', function (Blueprint $table) {
            $table->dropForeign('demande_id');
            $table->dropForeign('demande_id');
        });
    }
};
