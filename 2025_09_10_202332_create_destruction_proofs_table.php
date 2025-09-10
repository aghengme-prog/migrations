<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestructionProofsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destruction_proofs', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('proof_id', 255)->nullable();
            $table->string('operation_reference', 255)->nullable();
            $table->string('token_id', 255)->nullable();
            $table->decimal('destroyed_amount', 8, 2)->nullable();
            $table->string('proof_hash', 255)->nullable();
            $table->string('destruction_method', 255)->nullable();
            $table->string('verifiable_proof', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary('id');
            $table->unique('proof_id', 'destruction_proofs_proof_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destruction_proofs');
    }
}