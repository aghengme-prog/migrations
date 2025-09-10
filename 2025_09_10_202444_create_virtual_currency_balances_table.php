<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualCurrencyBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_currency_balances', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('operation_reference', 255)->nullable();
            $table->string('wallet_id', 255)->nullable();
            $table->text('amount_encrypted')->nullable(false);
            $table->string('amount_hash', 255)->nullable();
            $table->string('currency_type', 255)->nullable();
            $table->timestamp('emission_date')->nullable();
            $table->enum('status', [])->nullable();
            $table->decimal('destroyed_amount', 8, 2)->nullable();
            $table->timestamp('destruction_date')->nullable();
            $table->string('destruction_reference', 255)->nullable();
            $table->longText('metadata')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary('id');
            $table->index(['wallet_id', 'status'], 'virtual_currency_balances_wallet_id_status_index');
            $table->index('operation_reference', 'virtual_currency_balances_operation_reference_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virtual_currency_balances');
    }
}