<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualCurrencySupplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_currency_supply', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('currency_type', 255)->nullable();
            $table->decimal('total_supply', 8, 2)->nullable();
            $table->string('last_operation', 255)->nullable();
            $table->decimal('last_operation_amount', 8, 2)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary('id');
            $table->unique('currency_type', 'virtual_currency_supply_currency_type_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virtual_currency_supply');
    }
}