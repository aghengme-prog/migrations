<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackingCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backing_certificates', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('certificate_id', 255)->nullable();
            $table->string('operation_reference', 255)->nullable();
            $table->string('token_id', 255)->nullable();
            $table->string('cantonnement_account', 255)->nullable();
            $table->bigInteger('guaranteed_amount')->nullable();
            $table->string('certificate_hash', 255)->nullable();
            $table->dateTime('issued_at')->nullable(false);
            $table->enum('status', [])->nullable();
            $table->longText('metadata')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('backing_certificates');
    }
}