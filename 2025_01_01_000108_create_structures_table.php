<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structures', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('type_organisation_id')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('countrie_id')->nullable();
            $table->string('adresse', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('niu', 255)->nullable();
            $table->string('raison_sociale', 255)->nullable();
            $table->string('telephone', 255)->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->unique('raison_sociale', 'structures_raison_sociale_unique');
            $table->unique('niu', 'structures_niu_unique');
            $table->unique('telephone', 'structures_telephone_unique');
            $table->index('user_id', 'structures_user_id_foreign');
            $table->index('type_organisation_id', 'structures_type_organisation_id_foreign');
            $table->index('parent_id', 'structures_parent_id_foreign');
            $table->index('countrie_id', 'structures_countrie_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('structures');
    }
}