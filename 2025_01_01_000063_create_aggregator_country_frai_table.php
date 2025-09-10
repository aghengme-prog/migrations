<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAggregatorCountryFraiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aggregator_country_frai', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('frai_id')->nullable();
            $table->bigInteger('aggregator_id')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('operator_id')->nullable();
            $table->decimal('valeur', 8, 2)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('frai_id', 'aggregator_country_frai_frai_id_foreign');
            $table->index('aggregator_id', 'aggregator_country_frai_aggregator_id_foreign');
            $table->index('country_id', 'aggregator_country_frai_country_id_foreign');
            $table->index('operator_id', 'aggregator_country_frai_operator_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aggregator_country_frai');
    }
}