<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depenses', function (Blueprint $table) {
            $table->integer('service_id')->unsigned()->index();
            $table->integer('personnel_id')->unsigned()->index();
            $table->dateTime('date');
            $table->string('libelle');
            $table->text('description');
            $table->primary(['service_id', 'personnel_id', 'date']);
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('personnel_id')->references('id')->on('personnels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depenses');
    }
}

