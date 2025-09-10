<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpargneIndividuellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epargne_individuelles', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->decimal('montant_total', 8, 2)->nullable();
            $table->decimal('montant_programme', 8, 2)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('frequence_id')->nullable();
            $table->bigInteger('verrouillage_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('scheduled_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('user_id', 'epargne_individuelles_user_id_foreign');
            $table->index('frequence_id', 'epargne_individuelles_frequence_id_foreign');
            $table->index('verrouillage_id', 'epargne_individuelles_verrouillage_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('epargne_individuelles');
    }
}