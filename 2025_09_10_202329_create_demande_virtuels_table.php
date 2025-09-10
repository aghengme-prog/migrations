<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeVirtuelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_virtuels', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('sous_distributeur_id')->nullable();
            $table->bigInteger('distributeur_id')->nullable();
            $table->double('montant')->nullable(false);
            $table->dateTime('date_traitement')->nullable();
            $table->bigInteger('etat_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('user_id', 'demande_virtuels_user_id_foreign');
            $table->index('sous_distributeur_id', 'demande_virtuels_sous_distributeur_id_foreign');
            $table->index('distributeur_id', 'demande_virtuels_distributeur_id_foreign');
            $table->index('etat_id', 'demande_virtuels_etat_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demande_virtuels');
    }
}