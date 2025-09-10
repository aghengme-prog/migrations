<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteProQuartiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_pro_quartiers', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('compte_pro_id')->nullable();
            $table->bigInteger('quartier_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('compte_pro_id', 'compte_pro_quartiers_compte_pro_id_foreign');
            $table->index('quartier_id', 'compte_pro_quartiers_quartier_id_foreign');
            $table->index('user_id', 'compte_pro_quartiers_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compte_pro_quartiers');
    }
}