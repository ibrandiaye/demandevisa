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
            $table->string("profession")->nullable()->change();
            $table->string("tel")->nullable()->change();
            $table->string("lieunaiss")->nullable()->change();
            $table->date("datenaiss")->nullable()->change();
            $table->string("cni")->nullable()->change();
            $table->string("demeurant")->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hebergeurs', function (Blueprint $table) {
            $table->string("profession")->change();
            $table->string("tel")->change();
            $table->string("lieunaiss")->change();
            $table->date("datenaiss")->change();
            $table->string("cni")->change();
            $table->string("demeurant")->change();
        });
    }
};
