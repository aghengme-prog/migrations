<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentityVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identity_verifications', function (Blueprint $table) {
            $table->bigInteger('id')->nullable();
            $table->enum('document_type', [])->nullable();
            $table->string('document_number', 255)->nullable();
            $table->string('document_path', 255)->nullable();
            $table->enum('status', [])->nullable();
            $table->text('rejection_reason')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->bigInteger('verified_by')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('verified_by', 'identity_verifications_verified_by_foreign');
            $table->index('user_id', 'identity_verifications_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identity_verifications');
    }
}