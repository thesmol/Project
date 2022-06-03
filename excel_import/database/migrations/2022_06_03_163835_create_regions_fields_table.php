<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Arr;
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
        Schema::create('regions_fields', function (Blueprint $table) {
            $table->foreign('f_id')->references('f_id')->on('fields');
            $table->foreign('rr_id')->references('rr_id')->on('region_rves');

            $table->primary(array('f_id', 'rr_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions_fields');
    }
};
