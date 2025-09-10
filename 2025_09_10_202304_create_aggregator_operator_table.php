<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAggregatorOperatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aggregator_operator', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('aggregator_id')->nullable();
            $table->bigInteger('operator_id')->nullable();
            $table->decimal('fee', 8, 2)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->unique(['aggregator_id', 'operator_id'], 'aggregator_operator_aggregator_id_operator_id_unique');
            $table->index('operator_id', 'aggregator_operator_operator_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aggregator_operator');
    }
}