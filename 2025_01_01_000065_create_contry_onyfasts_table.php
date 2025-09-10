<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContryOnyfastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contry_onyfasts', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->string('designation', 255)->nullable();
            $table->string('programme', 255)->nullable();
            $table->string('code', 255)->nullable();
            $table->string('indicatif', 255)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->unique('designation', 'contry_onyfasts_designation_unique');
            $table->unique('programme', 'contry_onyfasts_programme_unique');
            $table->unique('code', 'contry_onyfasts_code_unique');
            $table->unique('indicatif', 'contry_onyfasts_indicatif_unique');
            $table->index('user_id', 'contry_onyfasts_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contry_onyfasts');
    }
}