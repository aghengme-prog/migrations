<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bank_accounts', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('bank_name', 255)->nullable();
            $table->string('account_number', 255)->nullable();
            $table->string('iban', 255)->nullable();
            $table->string('swift', 255)->nullable();
            $table->string('branch', 255)->nullable();
            $table->string('currency', 255)->nullable();
            $table->tinyInteger('is_default')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('countrie_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('user_id', 'user_bank_accounts_user_id_foreign');
            $table->index('countrie_id', 'user_bank_accounts_countrie_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_bank_accounts');
    }
}