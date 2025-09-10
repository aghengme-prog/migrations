<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupeObjectMembresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_object_membres', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('groupe_object_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('groupe_object_id', 'groupe_object_membres_groupe_object_id_foreign');
            $table->index('user_id', 'groupe_object_membres_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupe_object_membres');
    }
}