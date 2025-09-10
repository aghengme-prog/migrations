<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonnementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnements', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('type_abonnement_id')->nullable();
            $table->decimal('montant_paye', 8, 2)->nullable();
            $table->date('date_debut')->nullable(false);
            $table->date('date_fin')->nullable();
            $table->enum('statut', [])->nullable();
            $table->integer('pending_payments')->nullable();
            $table->decimal('pending_debt', 8, 2)->nullable();
            $table->tinyInteger('is_auto_renewal')->nullable();
            $table->string('mode_paiement', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('type_abonnement_id', 'abonnements_type_abonnement_id_foreign');
            $table->index(['user_id', 'statut'], 'abonnements_user_id_statut_index');
            $table->index(['date_debut', 'date_fin'], 'abonnements_date_debut_date_fin_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonnements');
    }
}