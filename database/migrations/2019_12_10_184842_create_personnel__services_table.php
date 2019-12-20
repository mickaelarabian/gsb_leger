<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnel_services', function (Blueprint $table) {
            $table->integer('personnel_id')->unsigned()->index();
            $table->integer('service_id')->unsigned()->index();
            $table->date('date');
            $table->primary(['personnel_id','service_id', 'date']);
            $table->foreign('personnel_id')->references('id')->on('personnels')->onDelete('cascade');;
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnel_services');
    }
}
