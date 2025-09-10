<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCantonnementAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantonnement_accounts', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('account_number', 255)->nullable();
            $table->string('bank_name', 255)->nullable();
            $table->decimal('balance', 8, 2)->nullable();
            $table->decimal('reserved_amount', 8, 2)->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('user_id', 'cantonnement_accounts_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cantonnement_accounts');
    }
}