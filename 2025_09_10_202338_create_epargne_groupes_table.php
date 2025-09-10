<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpargneGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epargne_groupes', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('nom', 255)->nullable();
            $table->bigInteger('type_groupe_id')->nullable();
            $table->bigInteger('frequence_id')->nullable();
            $table->bigInteger('verrouillage_id')->nullable();
            $table->decimal('montant_total', 8, 2)->nullable();
            $table->tinyInteger('est_son_tour')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('user_id_tour')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->date('next_deposit_date')->nullable();
            $table->date('next_withdraw_date')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('type_groupe_id', 'epargne_groupes_type_groupe_id_foreign');
            $table->index('frequence_id', 'epargne_groupes_frequence_id_foreign');
            $table->index('verrouillage_id', 'epargne_groupes_verrouillage_id_foreign');
            $table->index('user_id', 'epargne_groupes_user_id_foreign');
            $table->index('user_id_tour', 'epargne_groupes_user_id_tour_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('epargne_groupes');
    }
}