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
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_and_hour');
            $table->string('description');
            $table->integer('id_employees')->unsigned();
            $table->integer('id_clients')->unsigned();
            $table->integer('id_subjects')->unsigned();
            $table->timestamps();
        });

        Schema::table('appointments', function ($table) {
            $table
                ->foreign('id_employees')
                ->references('id')
                ->on('employees')
                ->onDelete('cascade');

            $table
                ->foreign('id_clients')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');

            $table
                ->foreign('id_subjects')
                ->references('id')
                ->on('subjects')
                ->onDelete('cascade');
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
};
