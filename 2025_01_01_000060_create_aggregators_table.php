<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAggregatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aggregators', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('name', 255)->nullable();
            $table->string('code', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary('id');
            $table->unique('name', 'aggregators_name_unique');
            $table->unique('code', 'aggregators_code_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aggregators');
    }
}