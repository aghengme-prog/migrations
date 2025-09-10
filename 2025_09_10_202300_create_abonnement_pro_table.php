<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonnementProTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnement_pro', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('type_abonnement_pro_plan_id')->nullable();
            $table->dateTime('date_debut')->nullable(false);
            $table->dateTime('date_fin')->nullable(false);
            $table->enum('statut', [])->nullable();
            $table->decimal('montant_paye', 8, 2)->nullable();
            $table->tinyInteger('is_auto_renewal')->nullable();
            $table->integer('pending_payments')->nullable();
            $table->decimal('pending_debt', 8, 2)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('type_abonnement_pro_plan_id', 'abonnement_pro_type_abonnement_pro_plan_id_foreign');
            $table->index(['user_id', 'statut'], 'abonnement_pro_user_id_statut_index');
            $table->index(['date_debut', 'date_fin'], 'abonnement_pro_date_debut_date_fin_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonnement_pro');
    }
}