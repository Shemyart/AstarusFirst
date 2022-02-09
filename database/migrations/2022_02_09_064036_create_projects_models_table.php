<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->binary('image');
            $table->date('start_date');
            $table->date('finish_date');
            $table->string('code');
            $table->string('status');
            $table->string('tasks');

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
        Schema::dropIfExists('projects_models');
    }
}
