<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAggregateurCountryPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aggregateur_country_pivot', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->bigInteger('aggregateur_id')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->decimal('fees_fixed', 8, 2)->nullable();
            $table->decimal('fees_percentage', 8, 2)->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('aggregateur_id', 'aggregateur_country_pivot_aggregateur_id_foreign');
            $table->index('country_id', 'aggregateur_country_pivot_country_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aggregateur_country_pivot');
    }
}