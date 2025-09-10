<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtpRetraitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otp_retraits', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('telephone', 255)->nullable();
            $table->string('otp', 255)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('etat_id')->nullable();
            $table->bigInteger('transaction_id')->nullable();
            $table->dateTime('expiration')->nullable(false);
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('user_id', 'otp_retraits_user_id_foreign');
            $table->index('etat_id', 'otp_retraits_etat_id_foreign');
            $table->index('transaction_id', 'otp_retraits_transaction_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otp_retraits');
    }
}