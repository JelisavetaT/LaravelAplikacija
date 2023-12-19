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
        Schema::table('proizvod', function (Blueprint $table) {
            //
            $table->integer('prodavnicaId')->unsigned()->change();
            $table->foreign('prodavnicaId')->references('id')->on('prodavnica');
            $table->integer('dobavljacId') ->unsigned()->change();
            $table->foreign('dobavljacId')->references('id')->on('dobavljac');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proizvod', function (Blueprint $table) {
            //
        });
    }
};
