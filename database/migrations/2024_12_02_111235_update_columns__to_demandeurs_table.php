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
            $table->date("expiration")->nullable()->change();
            $table->string("parente")->nullable()->change();
            $table->string("motif")->nullable()->change();
            $table->string("nom")->nullable()->change();
            $table->string("prenom")->nullable()->change();
            $table->date("datenaiss")->nullable()->change();
            $table->string("passeport")->nullable()->change();
            $table->string("nationalite")->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demandeurs', function (Blueprint $table) {
            $table->dropColumn("expiration");
            $table->dropColumn("parente");
            $table->dropColumn("motif");
            $table->dropColumn("nom");
            $table->dropColumn("prenom");
            $table->dropColumn("dropColumnnaiss");
            $table->dropColumn("passeport");
            $table->dropColumn("nationalite");
        });
    }
};
