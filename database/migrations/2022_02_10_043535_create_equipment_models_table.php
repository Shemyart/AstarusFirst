<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_models', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('volume');
            $table->boolean('activity');
            $table->integer('project_id');
            $table->timestamps();
            $table->binary('image')->nullable();
            $table->binary('file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment_models');
    }
}
