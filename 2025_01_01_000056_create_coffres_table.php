<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffres', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('nom', 255)->nullable();
            $table->decimal('total_amount', 8, 2)->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('etat', 255)->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->unique('user_id', 'coffres_user_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffres');
    }
}