<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCompteProTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_compte_pro', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('compte_pro_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->unique(['user_id', 'compte_pro_id'], 'user_compte_pro_user_id_compte_pro_id_unique');
            $table->index('compte_pro_id', 'user_compte_pro_compte_pro_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_compte_pro');
    }
}