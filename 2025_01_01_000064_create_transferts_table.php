<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferts', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('aggregator_id')->nullable();
            $table->bigInteger('operator_id')->nullable();
            $table->string('numero', 255)->nullable();
            $table->decimal('montant', 8, 2)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('user_id', 'transferts_user_id_foreign');
            $table->index('country_id', 'transferts_country_id_foreign');
            $table->index('aggregator_id', 'transferts_aggregator_id_foreign');
            $table->index('operator_id', 'transferts_operator_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transferts');
    }
}