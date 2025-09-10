<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupeObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_objects', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('epargne_groupe_id')->nullable();
            $table->string('nom', 255)->nullable();
            $table->decimal('montant_cible', 8, 2)->nullable();
            $table->decimal('montant_fixe', 8, 2)->nullable();
            $table->decimal('montant_actuel', 8, 2)->nullable();
            $table->integer('nombre_membre')->nullable();
            $table->tinyInteger('objectif_atteint')->nullable();
            $table->tinyInteger('retire')->nullable();
            $table->bigInteger('etat_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('epargne_groupe_id', 'groupe_objects_epargne_groupe_id_foreign');
            $table->index('etat_id', 'groupe_objects_etat_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupe_objects');
    }
}