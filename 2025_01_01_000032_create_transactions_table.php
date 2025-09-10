<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('type_transaction_id')->nullable();
            $table->bigInteger('from_compte')->nullable();
            $table->bigInteger('to_compte')->nullable();
            $table->bigInteger('from_wallet')->nullable();
            $table->bigInteger('to_wallet')->nullable();
            $table->bigInteger('operator_id')->nullable();
            $table->string('operator_reference', 255)->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->string('to_telephone', 255)->nullable();
            $table->string('beneficiary_name', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->enum('recharge_status', [])->nullable();
            $table->tinyInteger('is_to_non_client')->nullable();
            $table->string('otp', 255)->nullable();
            $table->string('from', 255)->nullable();
            $table->string('to', 255)->nullable();
            $table->decimal('solde_avant', 8, 2)->nullable();
            $table->decimal('montant', 8, 2)->nullable();
            $table->decimal('fees', 8, 2)->nullable();
            $table->decimal('montant_total', 8, 2)->nullable();
            $table->decimal('solde_apres', 8, 2)->nullable();
            $table->string('idExterne', 255)->nullable();
            $table->string('codeInterne', 255)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('type_transaction_id', 'transactions_type_transaction_id_foreign');
            $table->index('from_compte', 'transactions_from_compte_foreign');
            $table->index('to_compte', 'transactions_to_compte_foreign');
            $table->index('from_wallet', 'transactions_from_wallet_foreign');
            $table->index('to_wallet', 'transactions_to_wallet_foreign');
            $table->index('user_id', 'transactions_user_id_foreign');
            $table->index('operator_id', 'transactions_operator_id_foreign');
            $table->index('country_id', 'transactions_country_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}