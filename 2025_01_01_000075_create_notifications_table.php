<?php

namespace Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->string('id', 255)->nullable();
            $table->string('type', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->text('body')->nullable();
            $table->bigInteger('type_notification_id')->nullable();
            $table->bigInteger('assigned_user_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->tinyInteger('is_read')->nullable();
            $table->date('startDate')->nullable(false);
            $table->date('endDate')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('notifiable_type', 255)->nullable();
            $table->bigInteger('notifiable_id')->nullable();
            $table->text('data')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->string('CONSTRAINT')->nullable();
            $table->primary('id');
            $table->index('type_notification_id', 'notifications_type_notification_id_foreign');
            $table->index('assigned_user_id', 'notifications_assigned_user_id_foreign');
            $table->index('user_id', 'notifications_user_id_foreign');
            $table->index(['notifiable_type', 'notifiable_id'], 'notifications_notifiable_type_notifiable_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}