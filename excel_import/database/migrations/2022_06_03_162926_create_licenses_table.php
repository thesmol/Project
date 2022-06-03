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
        Schema::create('licenses', function (Blueprint $table) {
            $table->bigIncrements('l_id');
            $table->integer('prev_l_id');
            $table->string('l_series');
            $table->integer('l_number');
            $table->string('l_type  ');
            $table->foreign('company_id')->references('c_id')->on('companies');
            $table->foreign('license_area_id')->references('la_id')->on('license_areas');
            $table->foreign('license_status_id')->references('ls_id')->on('license_statuses');
            $table->foreign('target_destination_id')->references('td_id')->on('tagret_destinations');
            $table->foreign('kind_of_fossil_id')->references('kf_id')->on('lind_of_fossils');
            $table->foreign('authorities_id')->references('a_id')->on('authorities');
            $table->date('date_of_start');
            $table->date('date_of_end');
            $table->date('date_of_annulation')->nullable();
            $table->text('coords');

            $table->primary('l_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licenses');
    }
};
