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
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('c_id');
            $table->string('company_name');
            $table->integer('mc_id') -> nullable(); //управляющая компания
            $table->foreign('cs_id')->references('cs_id')->on('company_statuses');
            $table->text('address');
            $table->integer('inn');
            $table->integer('code_OKPO');
            $table->integer('code_OKATO');
            $table->integer('OGRN');
            $table->text('comment') -> nullable();
            $table->primary('c_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
