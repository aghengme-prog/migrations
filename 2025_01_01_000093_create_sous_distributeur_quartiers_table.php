<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousDistributeurQuartiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_distributeur_quartiers', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('sous_distributeur_id')->nullable();
            $table->bigInteger('quartier_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('sous_distributeur_id', 'sous_distributeur_quartiers_sous_distributeur_id_foreign');
            $table->index('quartier_id', 'sous_distributeur_quartiers_quartier_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sous_distributeur_quartiers');
    }
}