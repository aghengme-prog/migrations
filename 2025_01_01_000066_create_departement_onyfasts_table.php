<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartementOnyfastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departement_onyfasts', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('designation', 255)->nullable();
            $table->string('code', 255)->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('contry_onyfast_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->unique('designation', 'departement_onyfasts_designation_unique');
            $table->unique('code', 'departement_onyfasts_code_unique');
            $table->index('contry_onyfast_id', 'departement_onyfasts_contry_onyfast_id_foreign');
            $table->index('user_id', 'departement_onyfasts_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departement_onyfasts');
    }
}