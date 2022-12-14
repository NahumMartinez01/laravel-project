<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments("id_appointment");
            $table->string("type_service");
            $table->date("date_appointment");
            $table->unsignedInteger("id_pet");
            $table->foreign("id_pet")->references("id_pet")->on("pets");
            $table->unsignedInteger("id_branch");
            $table->foreign("id_branch")->references("id_branch")->on("branches");

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
        Schema::dropIfExists('appointments');
    }
}