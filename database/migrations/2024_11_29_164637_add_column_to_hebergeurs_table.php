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
            $table->string("lieunaiss");
            $table->string("pere")->nullable();
            $table->string("mere")->nullable();
            $table->string("profession");
            $table->string("tel");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hebergeurs', function (Blueprint $table) {
            $table->dropColumn("lieunaiss");
            $table->dropColumn("pere");
            $table->dropColumn("mere");
            $table->dropColumn("profession");
            $table->dropColumn("tel");

        });
    }
};
