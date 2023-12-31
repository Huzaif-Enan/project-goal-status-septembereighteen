<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_status_notifies', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id')->unique();
            $table->dateTime('extended_start');
            $table->integer('extended_days');
            $table->text('pm_reason')->nullable();
            $table->text('admin_comment')->nullable();
            $table->integer('project_notify');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_status_notifies');
    }
};
