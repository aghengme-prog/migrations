<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualCurrencyLedgerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_currency_ledger', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->char('transaction_id', 255)->nullable();
            $table->string('operation_reference', 255)->nullable();
            $table->string('token_id', 255)->nullable();
            $table->enum('transaction_type', [])->nullable();
            $table->text('amount_encrypted')->nullable(false);
            $table->string('amount_hash', 255)->nullable();
            $table->string('from_wallet', 255)->nullable();
            $table->string('to_wallet', 255)->nullable();
            $table->bigInteger('block_height')->nullable();
            $table->string('previous_hash', 255)->nullable();
            $table->string('transaction_hash', 255)->nullable();
            $table->decimal('gas_fee', 8, 2)->nullable();
            $table->enum('status', [])->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->longText('metadata')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary('id');
            $table->unique('transaction_id', 'virtual_currency_ledger_transaction_id_unique');
            $table->unique('transaction_hash', 'virtual_currency_ledger_transaction_hash_unique');
            $table->index(['transaction_type', 'status'], 'virtual_currency_ledger_transaction_type_status_index');
            $table->index('block_height', 'virtual_currency_ledger_block_height_index');
            $table->index('operation_reference', 'virtual_currency_ledger_operation_reference_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virtual_currency_ledger');
    }
}