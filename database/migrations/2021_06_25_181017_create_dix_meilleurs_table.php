<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDixMeilleursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dix_meilleurs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('infog_id');
            $table->foreign('infog_id')
                    ->references('id')
                    ->on('infogs')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');

            $table->string('annee');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dix_meilleurs');
    }
}
