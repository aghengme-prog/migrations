<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientNiveauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_niveaux', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->date('dateEffet')->nullable(false);
            $table->bigInteger('client_id')->nullable();
            $table->bigInteger('niveau_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('client_id', 'client_niveaux_client_id_foreign');
            $table->index('niveau_id', 'client_niveaux_niveau_id_foreign');
            $table->index('user_id', 'client_niveaux_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_niveaux');
    }
}