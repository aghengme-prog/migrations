<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('type_compte_id')->nullable();
            $table->bigInteger('banque_id')->nullable();
            $table->bigInteger('organisation_id')->nullable();
            $table->bigInteger('proprietaire_id')->nullable();
            $table->string('numero', 255)->nullable();
            $table->double('solde')->nullable();
            $table->string('code_banque', 255)->nullable();
            $table->string('cle_rib', 255)->nullable();
            $table->string('banque', 255)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('type_compte_id', 'comptes_type_compte_id_foreign');
            $table->index('banque_id', 'comptes_banque_id_foreign');
            $table->index('organisation_id', 'comptes_organisation_id_foreign');
            $table->index('proprietaire_id', 'comptes_proprietaire_id_foreign');
            $table->index('user_id', 'comptes_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}