<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banques', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('countrie_id')->nullable();
            $table->string('designation', 255)->nullable();
            $table->string('code', 255)->nullable();
            $table->string('adresse', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('countrie_id', 'banques_countrie_id_foreign');
            $table->index('user_id', 'banques_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banques');
    }
}