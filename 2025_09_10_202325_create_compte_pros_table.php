<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_pros', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('nom', 255)->nullable();
            $table->string('telephone', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('code_temporaire', 255)->nullable();
            $table->string('nom_entreprise', 255)->nullable();
            $table->string('localisation', 255)->nullable();
            $table->string('identifiant_fiscal', 255)->nullable();
            $table->string('nom_proprietaire', 255)->nullable();
            $table->string('email_pro', 255)->nullable();
            $table->string('activite', 255)->nullable();
            $table->string('upload', 255)->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->tinyInteger('visible')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->bigInteger('merchant_categorie_id')->nullable();
            $table->dateTime('code_temporaire_expires_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('user_id', 'compte_pros_user_id_foreign');
            $table->index('merchant_categorie_id', 'compte_pros_merchant_categorie_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compte_pros');
    }
}