<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commission_reports', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('name', 255)->nullable();
            $table->enum('type', [])->nullable();
            $table->date('start_date')->nullable(false);
            $table->date('end_date')->nullable(false);
            $table->longText('filters')->nullable();
            $table->decimal('total_amount', 8, 2)->nullable();
            $table->integer('total_transactions')->nullable();
            $table->bigInteger('generated_by')->nullable();
            $table->enum('status', [])->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('user_id', 'commission_reports_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commission_reports');
    }
}