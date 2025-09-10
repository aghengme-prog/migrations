<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectifs', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('coffre_id')->nullable();
            $table->string('nom', 255)->nullable();
            $table->decimal('montant_cible', 8, 2)->nullable();
            $table->decimal('montant_actuel', 8, 2)->nullable();
            $table->date('date_limite')->nullable();
            $table->integer('delai')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->tinyInteger('deja_transfere')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('coffre_id', 'objectifs_coffre_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objectifs');
    }
}