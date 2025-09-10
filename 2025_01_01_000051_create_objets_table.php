<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objets', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('epargne_individuelle_id')->nullable();
            $table->bigInteger('etat_id')->nullable();
            $table->string('nom', 255)->nullable();
            $table->decimal('montant_cible', 8, 2)->nullable();
            $table->decimal('montant_actuel', 8, 2)->nullable();
            $table->date('next_deposit_date')->nullable();
            $table->date('next_retrait_date')->nullable();
            $table->tinyInteger('auto_mode')->nullable();
            $table->tinyInteger('objectif_atteint')->nullable();
            $table->timestamp('archived_at')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('epargne_individuelle_id', 'objets_epargne_individuelle_id_foreign');
            $table->index('etat_id', 'objets_etat_id_foreign');
            $table->index('user_id', 'objets_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objets');
    }
}