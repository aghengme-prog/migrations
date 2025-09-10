<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->integer('user_id')->nullable();
            $table->bigInteger('type_organisation_id')->nullable();
            $table->string('adresse', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('niu', 255)->nullable();
            $table->string('raison_sociale', 255)->nullable();
            $table->string('telephone', 255)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('countrie_id')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->unique('raison_sociale', 'organisations_raison_sociale_unique');
            $table->unique('niu', 'organisations_niu_unique');
            $table->unique('telephone', 'organisations_telephone_unique');
            $table->index('type_organisation_id', 'organisations_type_organisation_id_foreign');
            $table->index('parent_id', 'organisations_parent_id_foreign');
            $table->index('countrie_id', 'organisations_countrie_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisations');
    }
}