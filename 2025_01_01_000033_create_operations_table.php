<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('sens_operation_id')->nullable();
            $table->bigInteger('transaction_id')->nullable();
            $table->bigInteger('compte_id')->nullable();
            $table->bigInteger('wallet_id')->nullable();
            $table->string('telephone_externe', 255)->nullable();
            $table->double('montant')->nullable(false);
            $table->string('precision', 255)->nullable();
            $table->string('idExterne', 255)->nullable();
            $table->string('codeExterne', 255)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->double('commission')->nullable(false);
            $table->bigInteger('objet_id')->nullable();
            $table->decimal('solde_avant', 8, 2)->nullable();
            $table->decimal('solde_apres', 8, 2)->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('sens_operation_id', 'operations_sens_operation_id_foreign');
            $table->index('transaction_id', 'operations_transaction_id_foreign');
            $table->index('compte_id', 'operations_compte_id_foreign');
            $table->index('wallet_id', 'operations_wallet_id_foreign');
            $table->index('user_id', 'operations_user_id_foreign');
            $table->index('objet_id', 'operations_objet_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operations');
    }
}