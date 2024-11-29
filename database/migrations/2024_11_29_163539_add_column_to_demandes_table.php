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
        Schema::table('demandes', function (Blueprint $table) {
            $table->boolean("validation")->default(0);
            $table->string("dureelettre");
            $table->integer("dureechiffre");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demandes', function (Blueprint $table) {
            $table->dropColumn("validation");
            $table->dropColumn("dureelettre");
            $table->dropColumn("dureechiffre");
        });
    }
};
