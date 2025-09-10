<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeAbonnementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_abonnement', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('nom', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->decimal('prix_mensuel', 8, 2)->nullable();
            $table->text('description')->nullable(false);
            $table->integer('max_objectifs')->nullable();
            $table->tinyInteger('cashback_actif')->nullable();
            $table->decimal('taux_cashback', 8, 2)->nullable();
            $table->tinyInteger('support_prioritaire')->nullable();
            $table->tinyInteger('conseiller_dedie')->nullable();
            $table->integer('cartes_virtuelles')->nullable();
            $table->tinyInteger('carte_physique')->nullable();
            $table->decimal('plafond_mensuel', 8, 2)->nullable();
            $table->integer('multi_devises')->nullable();
            $table->tinyInteger('lounge_aeroport')->nullable();
            $table->tinyInteger('mode_incognito')->nullable();
            $table->decimal('plafond_prets', 8, 2)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary('id');
            $table->unique('nom', 'type_abonnement_nom_unique');
            $table->unique('slug', 'type_abonnement_slug_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_abonnement');
    }
}