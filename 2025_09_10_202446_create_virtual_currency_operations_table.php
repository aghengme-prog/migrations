<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualCurrencyOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_currency_operations', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('reference', 255)->nullable();
            $table->enum('type', [])->nullable();
            $table->text('encrypted_amount')->nullable(false);
            $table->string('amount_hash', 255)->nullable();
            $table->enum('status', [])->nullable();
            $table->bigInteger('cantonnement_account_id')->nullable();
            $table->bigInteger('requested_by')->nullable();
            $table->bigInteger('verified_by')->nullable();
            $table->bigInteger('validated_by')->nullable();
            $table->bigInteger('executed_by')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('validated_at')->nullable();
            $table->timestamp('executed_at')->nullable();
            $table->longText('metadata')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->unique('reference', 'virtual_currency_operations_reference_unique');
            $table->index('cantonnement_account_id', 'virtual_currency_operations_cantonnement_account_id_foreign');
            $table->index('requested_by', 'virtual_currency_operations_requested_by_foreign');
            $table->index('verified_by', 'virtual_currency_operations_verified_by_foreign');
            $table->index('validated_by', 'virtual_currency_operations_validated_by_foreign');
            $table->index('executed_by', 'virtual_currency_operations_executed_by_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virtual_currency_operations');
    }
}