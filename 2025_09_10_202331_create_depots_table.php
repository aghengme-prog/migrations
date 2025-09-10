<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depots', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->decimal('montant', 8, 2)->nullable();
            $table->date('scheduled_at')->nullable();
            $table->string('source', 255)->nullable();
            $table->string('epargneable_type', 255)->nullable();
            $table->bigInteger('epargneable_id')->nullable();
            $table->bigInteger('objet_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index(['epargneable_type', 'epargneable_id'], 'depots_epargneable_type_epargneable_id_index');
            $table->index('user_id', 'depots_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depots');
    }
}