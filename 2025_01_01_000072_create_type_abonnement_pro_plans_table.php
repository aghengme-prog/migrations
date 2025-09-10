<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeAbonnementProPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_abonnement_pro_plans', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('plan', 255)->nullable();
            $table->integer('tarif')->nullable();
            $table->string('cible', 255)->nullable();
            $table->text('inclus')->nullable(false);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_abonnement_pro_plans');
    }
}