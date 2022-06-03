<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('la_fields', function (Blueprint $table) {
            $table->foreign('la_id')->references('la_id')->on('license_areas');
            $table->foreign('f_id')->references('f_id')->on('fields');
            $table->primary(array('la_id','f_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('la_fields');
    }
};
