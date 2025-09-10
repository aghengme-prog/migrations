<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperateurFraisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operateur_frais', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('operator_id')->nullable();
            $table->bigInteger('frais_id')->nullable();
            $table->decimal('valeur', 8, 2)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->unique(['operator_id', 'frais_id'], 'operateur_frais_operator_id_frais_id_unique');
            $table->index('frais_id', 'operateur_frais_frais_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operateur_frais');
    }
}