<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_logs', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('operation_id')->nullable();
            $table->string('action', 255)->nullable();
            $table->string('previous_status', 255)->nullable();
            $table->string('new_status', 255)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->text('comment')->nullable();
            $table->longText('data')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('operation_id', 'operation_logs_operation_id_foreign');
            $table->index('user_id', 'operation_logs_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operation_logs');
    }
}