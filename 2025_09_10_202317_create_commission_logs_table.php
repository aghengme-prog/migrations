<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commission_logs', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('transaction_id')->nullable();
            $table->decimal('amount', 8, 2)->nullable();
            $table->decimal('commission_rate', 8, 2)->nullable();
            $table->string('type_user', 255)->nullable();
            $table->string('transaction_type', 255)->nullable();
            $table->enum('status', [])->nullable();
            $table->bigInteger('assigned_user_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->enum('sens', [])->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('assigned_user_id', 'commission_logs_assigned_user_id_foreign');
            $table->index('user_id', 'commission_logs_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commission_logs');
    }
}