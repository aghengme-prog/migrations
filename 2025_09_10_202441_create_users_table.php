<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255)->nullable();
            $table->tinyInteger('code_temporaire')->nullable();
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();
            $table->timestamp('two_factor_confirmed_at')->nullable();
            $table->string('remember_token', 255)->nullable();
            $table->bigInteger('current_team_id')->nullable();
            $table->string('profile_photo_path', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->bigInteger('organisation_id')->nullable();
            $table->string('prenom', 255)->nullable();
            $table->string('telephone', 255)->nullable();
            $table->string('adresse', 255)->nullable();
            $table->bigInteger('type_user_id')->nullable();
            $table->bigInteger('old_id')->nullable();
            $table->bigInteger('countrie_id')->nullable();
            $table->bigInteger('ville_id')->nullable();
            $table->bigInteger('district_id')->nullable();
            $table->bigInteger('quartier_id')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('abonnement_actuel_id')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->unique('email', 'users_email_unique');
            $table->unique('telephone', 'users_telephone_unique');
            $table->index('organisation_id', 'users_organisation_id_foreign');
            $table->index('type_user_id', 'users_type_user_id_foreign');
            $table->index('countrie_id', 'users_countrie_id_foreign');
            $table->index('ville_id', 'users_ville_id_foreign');
            $table->index('district_id', 'users_district_id_foreign');
            $table->index('quartier_id', 'users_quartier_id_foreign');
            $table->index('parent_id', 'users_parent_id_foreign');
            $table->index('abonnement_actuel_id', 'users_abonnement_actuel_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}