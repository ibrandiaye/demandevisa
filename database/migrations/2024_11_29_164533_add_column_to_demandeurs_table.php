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
        Schema::table('demandeurs', function (Blueprint $table) {
            $table->date("expiration");
            $table->string("profession")->nullable();
            $table->string("parente");
            $table->string("motif");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demandeurs', function (Blueprint $table) {
            $table->dropColumn("expiration");
            $table->dropColumn("profession");
            $table->dropColumn("parente");
            $table->dropColumn("motif");
        });
    }
};
