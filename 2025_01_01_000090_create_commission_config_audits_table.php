<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionConfigAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commission_config_audits', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('config_table', 255)->nullable();
            $table->bigInteger('config_id')->nullable();
            $table->longText('old_values')->nullable();
            $table->longText('new_values')->nullable(false);
            $table->bigInteger('assigned_user_id')->nullable();
            $table->enum('action', [])->nullable();
            $table->string('ip_address', 255)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('assigned_user_id', 'commission_config_audits_assigned_user_id_foreign');
            $table->index('user_id', 'commission_config_audits_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commission_config_audits');
    }
}